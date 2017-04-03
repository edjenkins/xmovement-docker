@extends('layouts.app', ['bodyclasses' => 'transparent medium-grey'])

@section('content')
    <div class="container-fluid hero-container shallow" id="terms-hero-container" style="background-image:url('{{ getenv('APP_TERMS_HEADER_IMG') }}')">
        <div class="black-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-container">
                        <h1>{{ trans('terms.tagline') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="container">

		<div class="row floating-page-row">

			<div class="col-md-12">
				<div class="floating-page-tile">
					<h3>
						{{ trans('terms.terms_and_conditions') }}
					</h3>

					<p>Please read these terms of use carefully before using the services offered by University of Newcastle Upon Tyne (“Newcastle University”, "University of Newcastle Upon Tyne", “we”, “us”). These terms of use set forth the legally binding terms and conditions for your use of the website at {{ env('APP_URL') }} (the "Service") and the services, features, content, applications or widgets offered by Newcastle University (collectively with the Service, the "Service").</p>

					<p><strong>Please read these Terms of Use carefully before using the Service. If you do not accept these Terms of Use, then you may not use the Service. These Terms of Use are subject to change by us at any time, effective when posted on the Service. Your continued use after such notice will constitute acceptance by you of such changes.</strong></p>

					<p><strong>IF YOU DO NOT AGREE TO THESE TERMS OF SERVICE YOU MAY NOT ACCESS OR OTHERWISE USE OUR SITE.</strong></p>

					<p>These Terms of Use apply to all users of the Service, including, without limitation, users who are contributors of content, information, and other materials or services on the Service, individual users of the Service, venues that access the Service, and users that have a page on the Service. By using the Service you are agreeing to be bound by these Terms of Use.</p>

					<p><strong>USE OF THE SERVICE.</strong> You may use this Service only subject to these Terms of Use, all applicable laws, rules and regulations and any agreements or terms with third parties to which you are subject. You may not use this Service for commercial purposes, such as to promote a product or service, without our prior written consent. We may impose restrictions on certain features or your access to the Service without notice or liability.</p>

					<p><strong>PROHIBITED USE.</strong> You may not use spiders, robots, data mining techniques or other automated devices or programs to catalog, download or otherwise reproduce, store or distribute content available on the Service. Further, you may not use any such automated means to manipulate the Service or attempt to exceed the limited authorization and access granted to you under these Terms of Use or disrupt the Service or any other user's use of the Service, including, without limitation, via means of overloading, “flooding”, “mailbombing” or “crashing” the Service or circumventing security or user authentication measures. You may not frame portions of the Service within another web site or establish links from any other web site to any page of the Service other than the home page. You may not resell use of, or access to, the Service to any third party.</p>

					<p><strong>CONTENT.</strong> Users may be able to post content in certain areas on the Service, such as in connection with starting ideas, adding contributions (in design area) and in the comments or discussion sections of the Service. You are solely responsible for any content, photos, artwork, videos, text, graphics, articles and other information you upload, post, display or otherwise provide to the Service (“Content”). You represent and warrant that: (i) you own the Content posted by you on the Service or otherwise have the right to grant the license rights granted in these Terms of Use; (ii) your Content does not violate the privacy rights, publicity rights, intellectual property rights, or any other rights of any person; and (iii) the posting of Content on the Service does not result in a breach of any contract between you and a third party.</p>

					<p>We do not guarantee the accuracy, completeness or usefulness of any Content. Furthermore, we do not endorse, nor are we responsible for, the accuracy and reliability of any opinion, advice or statement made on the Service by any third party. We assume no responsibility and no obligation to modify or remove any inappropriate Content, and no responsibility for the conduct of the user submitting any such content.</p>

					<p>We reserve the right, in our sole discretion, to reject, refuse to post or remove any Content posted by you. We expressly reserve the right to remove or revoke your registration and/or restrict, suspend, or terminate your access to the Service if we determine, in our sole discretion, that you pose a threat to the Service and/or its users.</p>

					<p>After posting your Content to the Service, you continue to retain all ownership rights in such Content, and you continue to have the right to use your Content in any way you choose. By supplying Content to any area of the Service, you automatically grant to us for purposes of maintaining the Service, making Content available, and you represent and warrant that you have the right to grant an irrevocable, transferable, sublicenseable, perpetual, non-exclusive, fully paid up, worldwide license to use, copy, perform, reproduce, display, edit, modify and distribute such information and Content and to prepare derivative works of, or incorporate into other works, such Content. Additionally, we shall be free to use any ideas, concepts, know-how or techniques contained in such Content for any purpose whatsoever, including without limitation, developing, manufacturing and marketing products and services which incorporate such Content, including mobile applications that may be created using the Service.</p>

					<p><strong>ONLINE BEHAVIOR.</strong> The Service is a space dedicated to helping communities engage in new and creative ways of commissioning. You should not post Content to the Service that is inappropriate for or unrelated to this mission. The following is a partial list of the type of Content that is illegal or prohibited to post on or through the Service. Prohibited Content includes, but is not limited to Content that:</p>

						<ol>
							<li>is patently offensive and promotes racism, bigotry, hatred or physical harm of any kind against any group or individual;</li>
							<li>harasses or advocates harassment of another person;</li>
							<li>exploits people in a sexual or violent manner;</li>
							<li>contains nudity, violence, or offensive subject matter or contains a link to an adult website;</li>
							<li>solicits personal information from anyone under the age of 21 years;</li>
							<li>provides any telephone numbers, street addresses, last names, URLs or email addresses;</li>
							<li>promotes information that you know is false or misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libelous;</li>
							<li>promotes an illegal or unauthorized copy of another person's copyrighted work, such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files;</li>
							<li>involves the transmission of "junk mail," "chain letters," or unsolicited mass mailing, instant messaging, "spimming," or "spamming";</li>
							<li>contains restricted or password only access pages or hidden pages or images (those not linked to or from another accessible page);</li>
							<li>furthers or promotes any criminal activity or enterprise or provides instructional information about illegal activities including, but not limited to, making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses;</li>
							<li>solicits passwords from other users or personal identifying information for commercial or unlawful purposes from other users;</li>
							<li>involves commercial activities and/or sales without our prior written consent such as contests, sweepstakes, barter, advertising, or pyramid schemes;</li>
							<li>or includes a photograph or video footage of another person that you have posted without that person's consent or other third party content including but not limited to music, trademarks, logos, artwork or any other copyrighted, trademarked, or proprietary third party content that you have not secured permission to include on the Site.</li>
						</ol>
					<p>If you wish to report any Content or conduct on the Service that you believe is inappropriate, please contact us.</p>

					<p><strong>NO CONTENT MONITORING.</strong></p>
					<p>We are under no obligation to screen or monitor Content, but may review Content from time to time at our sole discretion to review compliance with these Terms of Use. We will make all determinations as to what Content is appropriate in our sole discretion. We may include, edit or remove any Content at any time without notice. We may employ automated monitoring devices or techniques to protect our users from mass unsolicited communications (also known as "spam") and/or other types of electronic communications that we deem objectionable. Such devices or techniques are not perfect, and we will not be responsible for any legitimate communication that is blocked, or for any unsolicited communication that is not blocked. Mailboxes may have a limited storage capacity. If you exceed the maximum permitted storage space, we may employ automated devices that delete or block email messages that exceed the limit. We will not be responsible for such deleted or blocked messages.</p>

					<p><strong>TERMINATION OF ACCESS.</strong> In addition to any right or remedy that may be available to us under these Terms of Use or applicable law, we may suspend, limit or terminate all or a portion of your access to the Service, at any time with or without notice and with or without cause. In addition, we may refer any information on illegal activities, including your identity, to the proper authorities.</p>

					<p><strong>PRIVACY.</strong> The privacy of your personally identifiable information is very important to us. For more information on what information we collect and how we use such information, please read our Privacy Policy.</p>

					<p><strong>LINKS.</strong> This Service may contain links to other web sites not maintained by us (including without limitation Facebook, Twitter and other social media platforms). We encourage you to be aware when you leave our Service and to read the terms and conditions and privacy statements of each and every web site that you visit. We are not responsible for the practices or the content of such other web sites or services.</p>

					<p>The existence of a link between this Service and any other website is not and shall not be understood to be an endorsement by us of the owner or proprietor of the linked internet website, nor an endorsement of us by the owner or proprietor of such linked website.</p>

					<p>You agree that we shall not be liable to you or anyone else for any type of loss or damages, regardless of whether based on contract, negligence, intentional wrongdoing, or liability without fault for any costs, losses, or damages (whether direct, indirect, compensatory, special, lost profits, liquidated, consequential, or punitive) arising out of or in any way in connection with your access to or use of any such third party site.</p>

					<p><strong>OUR PROPRIETARY RIGHTS.</strong> We or our licensors are the exclusive owners of all copy, software, graphics, designs and all copyrights, trademarks and other intellectual property or proprietary rights contained on or used in connection with the Service. Except as set forth herein, you agree not to copy, distribute, modify or make derivative works of any materials without the prior written consent of the owner of such materials. All rights not granted under these Terms of Use are reserved by us.</p>

					<p><strong>NO WARRANTIES.</strong> The Service, including all content made available on or accessed through the Service, is provided "as is" and we make no representations or warranties of any kind whatsoever for the content made available through the Service. The Service may contain typographical errors and you agree that we shall not be bound by any such errors.</p>

					<p>Further, to the fullest extent permissible by law, we disclaim any express or implied warranties, including, without limitation, non-infringement, title, merchantability or fitness for a particular purpose.</p>

					<p>We do not warrant that the functions contained in the Service or, materials or content contained therein will be completely secure, uninterrupted or error free, that defects will be corrected, or that the site or the server that makes it available is free of viruses or other harmful components.</p>

					<p>We shall not be liable for the use of the Service, including, without limitation, the content and any errors contained therein provided by third parties.</p>

					<p>In no event will we be liable under any theory of tort, contract, strict liability or other legal or equitable theory for any direct, indirect, special, incidental, or other consequential damages, lost profits, lost data, lost opportunities, costs of cover, exemplary, punitive, personal injury/wrongful death, each of which is hereby excluded by agreement of the parties regardless of whether or not we have been advised of the possibility of such damages.</p>

					<p><strong>INDEMNITY.</strong> You agree to defend, indemnify and hold harmless us, our business partners and agents, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees) arising from any breach by you of any of these Terms of Use.</p>

					<p><strong>JURISDICTION AND GOVERNING LAW.</strong> English law governs these terms and conditions. You submit to the non-exclusive jurisdiction of the English courts.</p>

					<p><strong>SEVERABILITY.</strong> If any part of these Terms of Use shall be held or declared to be invalid or unenforceable for any reason by any court of competent jurisdiction, such provision shall be ineffective but shall not affect any other part of these Terms of Use.</p>

					<p><strong>WAIVER; REMEDIES.</strong> The failure by us to partially or fully exercise any rights or the waiver of any breach of these Terms of Use by you, shall not prevent a subsequent exercise of such right by us or be deemed a waiver by us of any subsequent breach by you of the same or any other term of these Terms of Use. Our rights and remedies under these Terms of Use shall be cumulative, and the exercise of any such right or remedy shall not limit our right to exercise any other right or remedy.</p>

					<p><strong>NOTICES.</strong> Any and all notices to be given by either one of us to the other pursuant to or in connection with these Terms of Use shall be deemed sufficiently given when forwarded by e-mail in each case addressed to you at the e-mail address you have given us or to us at the e-mail address displayed on the Service.</p>

					<p><strong>EFFECTIVE DATE.</strong> These Terms of Use were last updated on 28th July 2016.</p>

					<hr />

					<h3 id="privacy">
						{{ trans('terms.privacy_policy') }}
					</h3>

					<p>University of Newcastle Upon Tyne (“Newcastle University”, “we”, “us”), the owner of [{{ trans('common.brand') }}], an online commissioning platform (the “Site”, or "Service"), recognizes the importance of your privacy. Therefore, we have created this Privacy Policy so that you know how we use and disclose your information when you make it available to us. This Privacy Policy applies solely to information collected at this Site. By using or accessing the Site, you signify your agreement to be bound by our Privacy Policy.</p>

					<p><strong>IF YOU DO NOT AGREE TO THIS PRIVACY POLICY YOU MAY NOT ACCESS OR OTHERWISE USE OUR SITE.</strong></p>

					<p><strong>Personal Information that we collect:</strong> We do not collect personal information from you unless you voluntarily provide it to us, such as when you register for the Site or submit a piece of content.</p>

					<p><strong>Non-personal or Aggregate Information that we collect:</strong> We may collect non-personally identifiable information, such as IP host address, pages viewed, browser type, duration and frequency of visits or other data, and may aggregate any information collected in a manner which does not identify any individual (“Aggregate Information”). Aggregate Information obtained in connection with the Site may be intermingled with and used by us in conjunction with information obtained through sources other than the Site, including both offline and online sources. Aggregate Information may be shared by us with third parties by allowing them to link to and collect data from the Site. This data will be used for their benefit and for ours, for marketing advertising or other purposes, including analysis of the Site for purposes of improving your experience with the Site and academic publication.</p>

					<p><strong>Clickstream:</strong> As you use the Internet, a trail of electronic information is left at each website you visit. This information, which is sometimes referred to as “clickstream data,” can be collected and stored by a website’s server. Clickstream data can tell us the type of computer and browsing software you use and the address of the website from which you linked to the Site. We may collect and use clickstream data as a form of Aggregate Information to anonymously determine how much time visitors spend on each page of our Site, how visitors navigate throughout the Site and how we may tailor our web pages to better meet the needs of visitors. This information will be used to improve our Site and our services. Any collection or use of clickstream data will be anonymous and aggregated, and will not intentionally contain any personal information. We may also use this aggregated data in order to conduct academic research studies. As a result of these academic research studies we may publish the anonymous aggregated data we have outlined.</p>

					<p><strong>Information Usage:</strong> We will only use your personal information as described below, unless you have specifically consented to another type of use, either at the time the personal information is collected from you or through some other form of consent from you or notification to you. We may use your personal information as follows: (i) to respond to your inquires or requests; (ii) to send you emails and newsletters from time to time with information about our Site; (iii) to share with our partners, by allowing them to link to and collect your information from the Site; (iv) we may permit our vendors and subcontractors to access your personal information, but they are only permitted to do so in connection with performing services for us; (v) we may disclose personal information as required by law or legal process; (vi) to investigate suspected fraud, harassment or other violations of any law, rule or regulation, or the terms or policies for our services or our sponsors and (vii) we may transfer your personal information in connection with the sale or merger or change of control of [the service].</p>

					<p><strong>Cookies:</strong> Our Site may pass a “cookie” (a string of information that is sent by a website to reside on your system’s hard drive and/or temporarily in your computer's memory blocks) or similar items, such as web beacons, gifs, and tags. The purpose of a cookie is to tell the web server that you have returned to a particular page. You may set your browser to decline cookies. If you do so, however, you may not be able to fully experience some features of the Site. Additionally, we may include small graphic images in our email messages and newsletters to you in order to determine whether these messages were opened and whether any links contained in these messages were viewed.</p>

					<p><strong>Security:</strong> We will ensure that we put in place and will maintain appropriate technical and organizational measures to safeguard any personal information submitted onto the Site. However, you acknowledge that due to the inherent open nature of the Internet, no transmission via the Internet can be guaranteed to be 100% secure. As a result of this and other factors beyond our control, we cannot guarantee the security of the information that you transmit to or through our Site. Therefore, you assume that risk by using the Site.</p>

					<p><strong>Your Disclosure on the Site and in Social Media:</strong> You should be aware that any information that you submit to any portion of the Site that is viewable by the public, such a publicly accessible blog, chat room, social media platform or otherwise online may be viewed and used by others without any restrictions. We are unable to control such uses of your personal information, and by using such services you assume the risk that the personal information provided by you may be viewed and used by third parties for any number of purposes.</p>

					<p><strong>Protection for Children:</strong> We do not collect personal information from children under the age of 13 years old. When we become aware that personal information from a child under 13 years old has been collected without such child’s parent or guardian’s consent, we will use all reasonable efforts to delete such information from our database. We encourage parents to monitor the online activities of their children to ensure that no information is collected from a child without parental permission.</p>

					<p><strong>Other Sites and Applications:</strong> As a convenience to you, we may provide links to third-party sites from within our Site. We are not responsible for the privacy practices or content of any third parties or third-party sites. We encourage you to review these privacy policies to ensure that you are familiar with their terms.</p>

					<p>If you use any extra plug-ins or third party applications (“Applications”) in connection with the Site, the provider(s) of these Applications may obtain access to certain personal information about you. We do not and cannot control how the providers of Applications may use any personal information collected in connected with such Applications. Please be sure to review any privacy policies or other terms applicable to your use of these Applications prior to installation.</p>

					<p><strong>Changes to this Privacy Policy:</strong> We reserve the right, at our discretion, to change, modify, add, or remove portions from this Privacy Policy at any time. Your continued use of the Site following the posting of any changes to this Privacy Policy means you accept and consent to such changes.</p>

					<p><strong>Opt-Out Process:</strong> If you do not want to receive email communications (including email digests) from us in the future, please send an email to us at <a target="_self" href="mailto:{{ env('APP_CONTACT_EMAIL') }}">{{ env('APP_CONTACT_EMAIL') }}</a> requesting to be removed from our mailing list. You will also have the option of clicking on a link included in email correspondence you receive from us in order to remove yourself from our mailing list.</p>

					<p>If you do not want to want to receive our newsletters in the future, please send an email to us at <a target="_self" href="mailto:{{ env('APP_CONTACT_EMAIL') }}">{{ env('APP_CONTACT_EMAIL') }}</a> requesting to be removed from our mailing list. You will also have the option of clicking on a link included in the newsletters you receive from us in order to remove yourself from our mailing list.</p>

					<p>We are not, however, responsible for removing your personal information from the lists of any third party who has previously been provided your information in accordance with this Privacy Policy or your consent, such as a sponsor. You should contact such third parties directly if you wish to have your personal information removed from their lists.</p>

					<p><strong>Communications with Us:</strong> By providing your email address to us, you expressly consent to receive emails from us. We may use email to communicate with you, to send information that you have requested or to send information about other products or services developed or provided by us or our business partners, provided that, we will not give your email address to another party to promote their products or services directly to you without your consent or as set forth in this policy.</p>

					<p>Any communication or material you transmit to us by email or otherwise, including any data, questions, comments, suggestions, or the like is, and will be treated as, nonconfidential and nonproprietary. Furthermore, you expressly agree that we are free to use any ideas, concepts, know-how, or techniques contained in any communication you send to us without compensation and for any purpose whatsoever, including but not limited to, developing, manufacturing and marketing products and services using such information.</p>

					<p>Site Terms of Use: Use of this Site is governed by, and subject to, the Terms of Use. This Privacy Policy is incorporated into such terms. Your use, or access, of the Site constitutes your agreement to be bound by these provisions.</p>

					<p><strong>IF YOU DO NOT AGREE TO THESE TERMS OF USE YOU MAY NOT ACCESS OR OTHERWISE USE THE SITE.</strong></p>

					<p><strong>Transfers of Personal Data Outside the EEA:</strong> The personal data that we collect from you may be transferred to, and stored at, a destination outside the European Economic Area ("EEA"). It may also be processed by staff operating outside the EEA who work for us or for one of our suppliers. By submitting your personal data, you agree to this transfer, storing or processing. We will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this privacy policy.</p>

					<p><strong>Contact:</strong> For questions or concerns relating to privacy, we can be contacted at: <a target="_self" href="mailto:{{ env('APP_CONTACT_EMAIL') }}">{{ env('APP_CONTACT_EMAIL') }}</a>.</p>

					<p><strong>EFFECTIVE DATE.</strong> This Privacy Policy was last updated on 28th July 2016.</p>

				</div>
			</div>

		</div>

	</div>
@endsection
