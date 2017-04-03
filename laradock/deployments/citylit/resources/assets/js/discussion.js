$(document).ready(function() {

	fetchComments();
});

function appendComment(comment)
{
	if (comment.data.in_reply_to_comment_id)
	{
		// This is a reply
		$(comment.view).hide().appendTo($('#comment-' + comment.data.in_reply_to_comment_id).children('.comment-replies')).slideDown(300);
	}
	else
	{
		$(comment.view).hide().appendTo($('.discussion-wrapper').find('.comments-container')).slideDown(300);
	}
	attachHandlers();
}

function attachHandlers()
{
	$('.reply-to-comment-button').off('click').on('click', function(event)
	{
		var wrapper = $(this).parent();

		$('.post-reply-container').hide();
		$(this).parent().parent().children('.post-reply-container').show();
		$(this).parent().parent().children('.post-reply-container').find('textarea').expanding().focus();
	});

	// Add post comment handlers
	$('.post-comment-button').off('click').on('click', function(event)
	{
		var wrapper = $(this).parent();

		postComment(wrapper);
	});

	// Add post comment on enter handlers
	$('.comment-text-input').off('keypress').on('keypress', function(event) {

		var wrapper = $(this).parent().parent();

		var code = event.keyCode ? event.keyCode : event.which;

		if (code == 13)
		{
			event.preventDefault();
			postComment(wrapper);
		}

	});

	// Add destroy handlers
	$('.destroy-comment-button').off('click').on('click', function() {

		destroyComment($(this));

	});

	// Add report handlers
	$('.report-comment-button').off('click').on('click', function() {

		reportComment($(this));

	});

	// Add vote handlers
	$('.comment-vote-container .vote-button').off('click').on('click', function() {

		var vote_button = $(this);
		var vote_container = $(this).parents('.vote-controls').parents('.comment-vote-container');

		var vote_direction = $(this).attr('data-vote-direction');
		var votable_id = $(this).attr('data-votable-id');
		var votable_type = $(this).attr('data-votable-type');

		addVote(vote_button, vote_container, vote_direction, votable_id, votable_type);

	});
}

function fetchComments(url) {

	console.log(url);

	if (!url) { url = window.location.href.replace(/^https?:\/\//,''); }

	console.log('Fetching comments for - ' + url);

	var discussion_wrapper = $('.discussion-wrapper');

	if (discussion_wrapper.length > 1)
	{
		discussion_wrapper = $('.discussion-wrapper').filter('[data-url="' + url + '"]');
	}

	var comments_container = discussion_wrapper.find('.comments-container');

	var data = {
		url: url,
		target_id: discussion_wrapper.attr('data-target-id'),
		target_type: discussion_wrapper.attr('data-target-type'),
		idea_id: discussion_wrapper.attr('data-idea-id')
	};

	$.getJSON("/api/comment/view", data, function(response) {

		if (response) {

			// Check if locked
			if (response.data.comment_target.locked)
			{
				discussion_wrapper.find('.post-comment-container').hide();
			}
			else
			{
				discussion_wrapper.find('.post-comment-container').show();
			}

			var comment_views = '';

			$.each(response.data.comments, function(index, comment) {

				comment_views += comment.view;

			});

			if (comments_container.html() != comment_views)
			{
				comments_container.html(comment_views);
			}

			attachHandlers();
		}
	});
}

function postComment(wrapper)
{
	var in_reply_to_comment_id = wrapper.attr('data-in-reply-to-comment-id');

	in_reply_to_comment_id = (in_reply_to_comment_id) ? in_reply_to_comment_id : undefined;

	// Get comment from textarea
	var comment = wrapper.find('textarea').val();

	// Clear textarea
	wrapper.find('textarea').val('').change();

	// Hide reply composer
	$('.post-reply-container').hide();

	// Post message
	var url = window.location.href.replace(/^https?:\/\//,'');
	var data = { url: url, comment: comment, in_reply_to_comment_id: in_reply_to_comment_id };

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
			'Content-type': 'application/json'
		}
	});

	$.ajax({
		type:"POST",
		url: "/api/comment/post",
		dataType: "json",
		data:  JSON.stringify(data),
		processData: false,
		success: function(response) {

			console.log(response);

			if (response.meta.success)
			{
				appendComment(response);
			}
			else
			{
				// Output errors
				$.each(response.errors, function(index, value) {
					alert(value);
				})
			}
		},
		error: function(response) {
			console.log(response);
			alert('Something went wrong!');
		}
	});
}

function destroyComment(delete_button)
{
	var result = confirm(delete_button.attr('data-delete-confirmation'));

	if (!result)
	    return;

	var comment_id = delete_button.attr('data-comment-id');

	$.ajaxSetup({
        headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        	'Content-type': 'application/json'
        }
	});

    $.ajax({
        type:"DELETE",
        url: "/api/comment/destroy",
        dataType: "json",
        data:  JSON.stringify({comment_id: comment_id}),
        processData: false,
        success: function(response) {

        	if (response.meta.success)
        	{
				// Remove element from DOM
				$('#comment-' + comment_id).remove();
			}
        	else
        	{
        		// Output errors
        		$.each(response.errors, function(index, value) {
        			alert(value);
        		})
        	}
        },
        error: function(response) {
			console.log(response);
        	alert('Something went wrong!');
        }
    });
}

function reportComment(report_button)
{
	if (report_button.hasClass('reported'))
		return; // This has been reported so cancel

	var result = confirm(report_button.attr('data-report-confirmation'));

	if (!result)
	    return; // User decided not to report this so cancel

	var comment_id = report_button.attr('data-comment-id');

	$.ajaxSetup({
        headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        	'Content-type': 'application/json'
        }
	});

    $.ajax({
        type:"POST",
        url: "/api/report",
        dataType: "json",
        data:  JSON.stringify({reportable_id: comment_id, reportable_type: 'comment'}),
        processData: false,
        success: function(response) {

        	if (response.meta.success)
        	{
				report_button.addClass('reported');
			}
        	else
        	{
        		// Output errors
        		$.each(response.errors, function(index, value) {
        			alert(value);
        		})
        	}
        },
        error: function(response) {
			console.log(response);
        	alert('Something went wrong!');
        }
    });
}
