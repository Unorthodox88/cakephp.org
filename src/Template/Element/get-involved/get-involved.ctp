<?php
use Cake\Core\Configure;
?>
<div id="getInvolved" class="col-sm-12 pt-35">
	<h2><?= __('Get Involved!')?></h2>

	<p><?= __('If you\'re interested in contributing to CakePHP and supporting the community then we\'d love for you to join us,
		there are a variety of ways to get involved and help out.')?></p>

	<div id="userSupport" class="box-get">
		<i class="fa fa-users icon-get"></i>
		<h3><?= __('User Support')?></h3>
		<div class="br-bottom mb20"></div>
		<p><?= __('One of the greatest ways to contribute to CakePHP is by directly supporting the developer community. There\'s
			no need to be a genius or guru to get involved, you may just have the answer to some of the questions being
			asked. Here are some ways you can get started:')?></p>
		<ul>
			<li><?= __('Join the #cakephp IRC channel and talk to developers who need help. *')?></li>
			<li><?= __('Answer questions on platforms such as {0}.', $this->Html->link('StackOverflow', Configure::read('Site.menu.items.help.stackOverflow.url'), ['target' => '_blank']))?>
			</li>
			<li><?= __('Comment on posts asking for help with a specific problem.')?></li>
		</ul>
		<p>
			<?= __('* For those who don\'t have an IRC client we have a web-based client available {0}.', $this->Html->link(__('here'), Configure::read('Site.menu.items.help.irc.url'), ['target' => '_blank']))?>
		</p>
	</div>

	<div id="education" class="box-get mb0">
		<i class="fa fa-graduation-cap icon-get"></i>

		<h3><?= __('Education and Training')?></h3>

		<div class="br-bottom mb20"></div>
		<p><?= __('Helping others to learn CakePHP is another valuable way to contribute to the community. There are many ways
			you can help others, these include:')?></p>
		<ul>
			<li><?= __('Coding Seminars')?></li>
			<li><?= __('Live Workshops')?></li>
			<li><?= __('Hackathons')?></li>
			<li><?= __('Training Courses')?></li>
			<li><?= __('Tutorials')?></li>
		</ul>
	</div>
	<div class="alert box-featured-light-2 back-medium-gray">
		<span class="glyph_range icon-featured icon-education">Q</span>
		<p class="c-white"><?= __('Additionally, we offer professional training for CakePHP, as well as the opportunity to
			become an officially certified CakePHP developer through the developer certification program.')?></p>
	</div>
	<div id="marketing" class="box-get">
		<i class="fa fa-comment icon-get"></i>

		<h3><?= __('Marketing and Evangelism')?></h3>

		<div class="br-bottom mb20"></div>
		<p><?= __('As an open source project, backed by the {0} we don\'t have a massive budget to market and advertise the framework, so we depend
			on people like you getting involved and helping support the community. There are many actions which can help
			raise awareness, share experiences and educate your fellow developers about CakePHP.', $this->Html->link(__('Cake Software Foundation'), 'http://cakefoundation.org/', ['target' => '_blank']))?> </p>
		<h4><?= __('Write and Talk About CakePHP')?></h4>
		<p><?= __('Actively writing and talking about CakePHP helps spread the word about the framework.')?></p>
		<ul>
			<li><?= __('Write an article or blog post about a certain feature or development experience.')?></li>
			<li><?= __('Comment on articles or posts and provide ideas and arguments which invite further conversation and
				feedback.')?>
			</li>
			<li><?= __('Use social platforms such as {0}, {1} or {2} to provide links to articles, posts, plugins, events, etc.',
					$this->Html->link(__('Facebook'), Configure::read('Site.menu.items.help.facebook.url'), ['target' => '_blank']),
					$this->Html->link(__('Google+'), Configure::read('Site.menu.items.help.google.url'), ['target' => '_blank']),
					$this->Html->link(__('Twitter'), Configure::read('Site.menu.items.help.twitter.url'), ['target' => '_blank'])
				)?>
			</li>
		</ul>
		<h4><?= __('Help Your Local Community')?></h4>

		<p><?= __('We depend on people who know and understand their local community. This not only refers to the difference in
			the language, but also the local customs and cultural differences. You can help us by connecting with your
			local community and supporting CakePHP. A few actions you can undertake include:')?></p>
		<ul>
			<li><?= __('Starting or joining a local user group')?></li>
			<li><?= __('Organizing events or meet-ups')?></li>
			<li><?= __('Distributing information and awareness')?></li>
		</ul>
	</div>

	<div id="contributing" class="box-get">
		<i class="fa fa-comments-o icon-get"></i>

		<h3><?= __('Contributing Code')?></h3>

		<div class="br-bottom mb20"></div>
		<p><?= __('If you want to contribute code for a bug fix then coordinate your patch in the comments of the issue, either
			by uploading the patch file, or linking to the commit(s) for the fix. You can find a clear outline for
			contribution to the framework here.')?></p>
		<h4><?= __('Contributing via Patch Files')?></h4>

		<p><?= __('Patch files should be either in unified diff files, or generated with git format-patch.')?></p>
		<h4><?= __('Contributing via Commits on a GitHub Fork')?></h4>

		<p><?= __('Contributing via commits on a GitHub fork is the preferred way of submitting fixes. If your fix is more than
			a single commit, you should put the fix on an appropriately named branch. This makes integration of the fix
			easier.')?></p>
	</div>

	<div id="testing" class="box-get">
		<i class="fa fa-thumbs-o-up icon-get"></i>

		<h3><?= __('Testing and Quality Assurance')?></h3>

		<div class="br-bottom mb20"></div>
		<p><?= __('Filing issues is a great way to start contributing to CakePHP. By finding and reporting issues in the code
			you notify the maintainers of any issues and help get them resolved. Issues for all CakePHP projects are
			located on {0}', $this->Html->link(__('GitHub'), Configure::read('Site.help.github.url')))?>
		</p>
		<h4><?= __('Found a Bug?')?></h4>

		<p><?= __('Sometimes there are problems in CakePHP. If you think you\'ve come across one you can:')?></p>
		<ul>
			<li><?= __('Search for a similar or {0}.', $this->Html->link(__('existing issues'), 'https://github.com/cakephp/cakephp/labels/Defect', ['target' => '_blank']))?>
			</li>
			<li><?= __('Create a {0} if you\'re sure it doesn\'t already exist OR update the existing issue.', $this->Html->link(__('new issue'), 'https://github.com/cakephp/cakephp/labels/Defect', ['target' => '_blank']))?>
			</li>
			<li><?= __('Add detailed instructions on how to reproduce the bug. This could be in the form of test cases or a code
				snippet that demonstrates the issue. Not having a way to reproduce an issue, means its less likely to
				get fixed.')?>
			</li>
		</ul>
		<h4><?= __('New Issues That Need Triaging')?></h4>

		<p><?= __('All {0}
			need to be triaged and have the correct tags, as well as having a milestone assigned to them. You can help
			by looking at new issues and adding the correct tags. Additionally, confirming or asking for more
			information on unclear issues doesn\'t take much time, and helps speed up the process.', $this->Html->link(__('new issues'), Configure::read('Site.help.github.url')))?></p>

		<p><?= __('Tags for issues usually contain which classes, methods, and other generic properties are involved. The tags
			{0}, {1} and {2} move issues into related bins.', $this->Html->tag('i', __('Defect')),  $this->Html->tag('i', __('Enhancement')),  $this->Html->tag('i', __('RFC')))?></p>
		<h4><?= __('Confirm or Invalidate Existing Issues That Need a Way to Reproduce')?></h4>

		<p><?= __('If an issue cannot be easily reproduced, or is unclear, it will be set to hold. Issues on hold generally need
			a way to be confirmed or require additional information. You can help by finding out ways to reproduce
			issues, or prodding issue authors for more information. Issues that are on hold can be found {0}',
				$this->Html->link(__('here'), 'https://github.com/cakephp/cakephp/labels/On%20hold')
			)?></p>
		<h4><?= __('Bug Issues for Maintenance Releases')?></h4>

		<p><?= __('Existing releases usually have a few issues open against them. These issues generally need patches and test
			cases created for them, so they can be resolved. Preparing patches for open {0}
			is a great way to get involved with CakePHP, and is one of the first steps to becoming a core contributor.',
				$this->Html->link(__('open unresolved issues'), 'https://github.com/cakephp/cakephp/issues?q=is%3Aopen',  ['target' => '_blank'])
			)?>
		</p>
		<h4><?= __('Features and Enhancements for Future Releases')?></h4>

		<p> <?= __('We are currently working towards the {0}. There are still a number of
			incomplete tasks and {1}. If an issue has been moved into the 3.0 milestone, it is planned for inclusion in the
			release. Issues are moved into this milestone based on community feedback and the core team\'s plans. If you
			plan on contributing a feature, please also include relevant test cases for the feature. We want to keep
			CakePHP as bug free as possible, and test cases have proven to help immensely. If you submit features
			without test cases, and no documentation it is highly unlikely it will be merged in.',
				$this->Html->link(__('3.0 milestone'), 'https://github.com/cakephp/cakephp/issues?milestone=7', ['target' => '_blank']),
				$this->Html->link(__('unresolved issues'), 'https://github.com/cakephp/cakephp/issues?milestone=7&state=open', ['target' => '_blank'])
			)?></p>

		<p><?= __('CakePHP is {0}, so you can check the status of the {1} on the Jenkins server at any time.',
			$this->Html->link(__('continuously integrated'), 'http://en.wikipedia.org/wiki/Continuous_integration', ['target' => '_blank']),
			$this->Html->link(__('various builds'), 'http://ci.cakephp.org/', ['target' => '_blank'])
			)?>
		</p>
	</div>

	<div id="documentation" class="box-get">
		<i class="fa fa-book icon-get"></i>

		<h3><?= __('Documentation')?></h3>

		<div class="br-bottom mb20"></div>
		<p><?= __('Documentation is another excellent way to start getting involved with CakePHP. We have two primary forms of
			documentation, the {0} and the {1}. The API
			is generated from the source code, so if you find an inaccuracy or issue with the API documentation, you can
			file a patch against the {2}. The CookBook is a community managed
			documentation source which can also be found on {3}.
			Guidelines on contributing to the documentation can be reviewed here.',
				$this->Html->link(__('API'), Configure::read('Site.menu.items.documentation.api.url'), ['target' => '_blank']),
				$this->Html->link(__('CookBook'), Configure::read('Site.menu.items.documentation.book.url'), ['target' => '_blank']),
				$this->Html->link(__('GitHub'), 'https://github.com/cakephp/docs', ['target' => '_blank']),
				$this->Html->link(__('here'), 'http://book.cakephp.org/3.0/en/contributing/documentation.html')
			)?></p>
	</div>

	<div id="translation" class="box-get">
		<i class="fa fa-comments-o icon-get"></i>
		<h3><?= __('Translations')?></h3>
		<div class="br-bottom mb20"></div>
		<p><?= __('We have developers from countries all over the world who use CakePHP. If you\'re a non-english speaker,
			translating the {0} or the {1} content
			into your language is another way to help support the community. Providing the official documentation and
			support material in as many languages as possible helps lower the barrier to entry to using the framework.',
				$this->Html->link(__('API'), Configure::read('Site.menu.items.documentation.api.url'), ['target' => '_blank']),
				$this->Html->link(__('CookBook'), Configure::read('Site.menu.items.documentation.book.url'), ['target' => '_blank'])
			)?>
		</p>
	</div>
</div>