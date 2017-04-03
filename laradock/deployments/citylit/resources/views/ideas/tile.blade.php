<div class="tile idea-tile">
	<a target="_self" href="{{ action('IdeaController@view', $idea->id) }}" class="tile-image" style="background-image:url('{{ ResourceImage::getImage($idea->photo, 'large') }}')"></a>
	<div class="inner-container">
		<a class="idea-name" href="{{ action('IdeaController@view', $idea->id) }}">
		    {{ str_limit($idea->name, $limit = 50, $end = '...') }}
		</a>
		<p class="idea-description">
			{{ str_limit($idea->description, $limit = 150, $end = '...') }}
		</p>
	</div>
	<div class="tile-footer">
		<div class="phase-progress" style="right:{{ (100 - $idea->progress) }}%"></div>
		<p>
			{{ $idea->latest_phase }}
		</p>
	</div>
</div>
