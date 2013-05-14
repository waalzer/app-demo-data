
<?php

/**
 * Created with https://github.com/schmunk42/database-command
 */

class m130515_002115_replace_p3_data extends CDbMigration {

	public function safeUp() {
        if (Yii::app()->db->schema instanceof CMysqlSchema) {
           $this->execute('SET FOREIGN_KEY_CHECKS = 0;');
           $options = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        } else {
           $options = '';
        }
        $this->truncateTable("p3_widget");
        $this->truncateTable("p3_media");
        $this->truncateTable("p3_media_meta");
        $this->truncateTable("p3_widget_meta");
        $this->truncateTable("p3_widget_translation");
        $this->truncateTable("p3_page");
        $this->truncateTable("p3_page_meta");
        $this->truncateTable("p3_page_translation");







        // Data for table 'p3_widget'
        $this->insert("p3_widget", array(
            "id"=>"1",
            "alias"=>"CWidget",
            "rank"=>"0",
            "containerId"=>"top",
            "moduleId"=>"",
            "controllerId"=>"site",
            "actionName"=>"index",
            "requestParam"=>"",
            "sessionParam"=>"",
        ) );

        $this->insert("p3_widget", array(
            "id"=>"2",
            "alias"=>"CWidget",
            "rank"=>"0",
            "containerId"=>"top",
            "moduleId"=>"p3pages",
            "controllerId"=>"default",
            "actionName"=>"page",
            "requestParam"=>"3",
            "sessionParam"=>"",
        ) );

        $this->insert("p3_widget", array(
            "id"=>"3",
            "alias"=>"CWidget",
            "rank"=>"0",
            "containerId"=>"main",
            "moduleId"=>"p3pages",
            "controllerId"=>"default",
            "actionName"=>"page",
            "requestParam"=>"3",
            "sessionParam"=>"",
        ) );

        $this->insert("p3_widget", array(
            "id"=>"4",
            "alias"=>"TbCarousel",
            "rank"=>"0",
            "containerId"=>"top",
            "moduleId"=>"p3pages",
            "controllerId"=>"default",
            "actionName"=>"page",
            "requestParam"=>"4",
            "sessionParam"=>"",
        ) );

        $this->insert("p3_widget", array(
            "id"=>"5",
            "alias"=>"CWidget",
            "rank"=>"0",
            "containerId"=>"main",
            "moduleId"=>"p3pages",
            "controllerId"=>"default",
            "actionName"=>"page",
            "requestParam"=>"4",
            "sessionParam"=>"",
        ) );




        // Data for table 'p3_media'



        // Data for table 'p3_media_meta'



        // Data for table 'p3_widget_meta'
        $this->insert("p3_widget_meta", array(
            "id"=>"1",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-04-11 10:28:38",
            "createdBy"=>"1",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"017DE3C5-D643-4771-AC23-0003BE613972",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );

        $this->insert("p3_widget_meta", array(
            "id"=>"2",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-14 22:04:35",
            "createdBy"=>"1",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"B38A147B-EE98-4C79-9F46-6AA8A742FA8A",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );

        $this->insert("p3_widget_meta", array(
            "id"=>"3",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-14 22:04:59",
            "createdBy"=>"1",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"86453BF3-50F4-491F-8F15-144A14073B12",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );

        $this->insert("p3_widget_meta", array(
            "id"=>"4",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-14 23:33:16",
            "createdBy"=>"1",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"DA675921-1139-4FF0-B168-D8C8B9C3EC30",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );

        $this->insert("p3_widget_meta", array(
            "id"=>"5",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-15 00:08:39",
            "createdBy"=>"1",
            "modifiedAt"=>null,
            "modifiedBy"=>null,
            "guid"=>"CFE5CA78-B09A-4AEA-A5AE-254CC84F4371",
            "ancestor_guid"=>null,
            "model"=>"P3Widget",
        ) );




        // Data for table 'p3_widget_translation'
        $this->insert("p3_widget_translation", array(
            "id"=>"1",
            "p3_widget_id"=>"1",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"<div data-intro=\"Hello step one!\" data-step=\"1\" id=\"login\" style=\"background:#f3f3f3;border-radius:5px;padding:20px;margin-bottom:20px;\">

	<img src=\"https://raw.github.com/waalzer/app-demo-data/f8379e8e4bd4a5150f08c0666d75ca91212a8f9a/images/phundament.png\" style=\"float:left;margin-right:20px;margin-bottom:10px;\" />

	<h1>

		Welcome to Phundament 3!</h1>

	<h3>

		You will like it.</h3>

	<p>

		<a href=\"https://github.com/phundament/\" target=\"_blank\">View on GitHub</a> | <a href=\"https://github.com/phundament/app/wiki\" target=\"_blank\">The Definitive Guide</a> |&nbsp;<a href=\"http://phundament.com/\" target=\"_blank\">Phundament Homepage</a></p>

</div>

<div class=\"row\">

	<div class=\"span4\" data-intro=\"Hello step one!\" data-step=\"2\" id=\"login\" style=\"background:#f3f3f3;border-radius:5px;margin-bottom:20px;\">

		<div style=\"padding:10px;\">

			<h1>

				Login</h1>

			<p>

				Login with&nbsp;<code>admin/admin</code></p>

			<p>

				<img alt=\"\" src=\"https://raw.github.com/waalzer/app-demo-data/f8379e8e4bd4a5150f08c0666d75ca91212a8f9a/images/login.png\" /></p>

		</div>

	</div>

	<div class=\"span4\" data-intro=\"Hello step one!\" data-step=\"3\" id=\"login\" style=\"background:#f3f3f3;border-radius:5px;margin-bottom:20px;\">

		<div style=\"padding:10px;\">

			<h1>

				Create Pages</h1>

			<p>

				<strong>Create index</strong></p>

			<p>

				Log in and go to Sitemap in the top menu. Click <span class=\"label label-error\">Create</span>&nbsp;then&nbsp;<span class=\"label label-error\">Text input</span> and paste <code>{&quot;route&quot;:&quot;/site/index&quot;}</code>&nbsp;in the text box to add this page as index.</p>

			<p>

				Select Layout <span class=\"label label-error\">_TbNavbar</span> and save the page.</p>

			<p>

				<strong>Create Child Page</strong></p>

			<p>

				Go to your index page. Click <span class=\"label label-error\">Append Child Page</span> in the top menu. Select&nbsp;<span class=\"label label-error\">Main Layout</span> and save.</p>

			<p>

				<strong>Add translation</strong></p>

			<p>

				You will see * after the pages name in the top menu because there isn&#39;t any translation for it. Add one by clicking <span class=\"label label-error\">+ Add Translation</span>. Choose language, menu name and page title.</p>

			<p>

				<strong>Create Sibling Pages</strong></p>

			<p>

				To add more pages at same level in the top menu click <span class=\"label label-error\">Append Sibling Page</span>.</p>

		</div>

	</div>

	<div class=\"span4\" data-intro=\"Hello step one!\" data-step=\"4\" id=\"login\" style=\"background:#f3f3f3;border-radius:5px;margin-bottom:20px;\">

		<div style=\"padding:10px;\">

			<h1>

				Create Widgets</h1>

			<p>

				<strong>Switch to edit mode</strong></p>

			<p>

				Go to a page and switch to the edit mode by clicking the edit icon at the top.</p>

			<p>

				<img alt=\"\" src=\"https://raw.github.com/waalzer/app-demo-data/f8379e8e4bd4a5150f08c0666d75ca91212a8f9a/images/topmenubar.png\" style=\"width: 299px; height: 35px;\" /></p>

			<p>

				<strong>Create a widget</strong></p>

			<p>

				Hover over container top or main and add <span class=\"label label-error\">Basic HTML Widget</span>.</p>

			<p>

				<strong>Add translation and content</strong></p>

			<p>

				Then add a translation, type some text in the editor, try to style it and add some media.</p>

			<p>

				<strong>See the guide</strong></p>

			<p>

				<a href=\"https://github.com/phundament/app/wiki/Pages\" target=\"_blank\">Pages</a>,&nbsp;<a href=\"https://github.com/phundament/app/wiki/Widgets\" target=\"_blank\">Widgets</a>, <a href=\"https://github.com/phundament/app/wiki/Ckeditor\" target=\"_blank\">CKEditor</a> and <a href=\"https://github.com/phundament/app/wiki/Media\" target=\"_blank\">Media</a>.</p>

		</div>

	</div>

</div>

<div style=\"background:#f3f3f3;border-radius:5px;padding:20px;margin-bottom:20px;\">

	<h1>

		Give us some Feedback</h1>

	<p>

		<a href=\"https://groups.google.com/forum/?fromgroups#!forum/phundament-dev\" target=\"_blank\">Google Groups</a>&nbsp;| <a href=\"https://plus.google.com/u/0/114873431066202526630/posts\" target=\"_blank\">Google+</a> | <a href=\"https://www.facebook.com/phundament\" target=\"_blank\">Facebook</a>&nbsp;| <a href=\"https://twitter.com/phundament\" target=\"_blank\">Twitter</a>&nbsp;| <a href=\"http://www.yiiframework.com/forum/index.php/topic/24696-extension-phundament\" target=\"_blank\">Yii Forum</a></p>

</div>

",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"2",
            "p3_widget_id"=>"2",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"<div>
	<h2>
		Ex feugait processus</h2>
	<div class=\"row\">
		<div class=\"span4\">
			<p>
				<a href=\"http://placehold.it/1200x900.jpg\"><img alt=\"\" src=\"http://placehold.it/400x300.jpg\" /></a></p>
			<p>
				Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.</p>
		</div>
		<div class=\"span4\">
			<p>
				<a href=\"http://placehold.it/1200x900.jpg\"><img alt=\"\" src=\"http://placehold.it/400x300.jpg\" /></a></p>
			<p>
				Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.</p>
		</div>
		<div class=\"span4\">
			<p>
				<a href=\"http://placehold.it/1200x900.jpg\"><img alt=\"\" src=\"http://placehold.it/400x300.jpg\" /></a></p>
			<p>
				Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.</p>
		</div>
	</div>
</div>
<div>
</div>
",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"3",
            "p3_widget_id"=>"3",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"<h2>
	Properties</h2>
<pre>
{
    &quot;actionPrefix&quot;: &quot;NULL&quot;,
    &quot;skin&quot;: &quot;default&quot;
}</pre>
<h2>
	HTML Source-Code</h2>
<pre>
&lt;div&gt;
&nbsp;&nbsp;&nbsp; &lt;h2&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ex feugait processus&lt;/h2&gt;

&nbsp;&nbsp;&nbsp; &lt;div class=&quot;row&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;span4&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a href=&quot;http://placehold.it/1200x900.jpg&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://placehold.it/400x300.jpg&quot;/&gt;&lt;/a&gt;&lt;/p&gt;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.&lt;/p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;span4&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a href=&quot;http://placehold.it/1200x900.jpg&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://placehold.it/400x300.jpg&quot;/&gt;&lt;/a&gt;&lt;/p&gt;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.&lt;/p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class=&quot;span4&quot;&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a href=&quot;http://placehold.it/1200x900.jpg&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://placehold.it/400x300.jpg&quot;/&gt;&lt;/a&gt;&lt;/p&gt;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.&lt;/p&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;
&nbsp;&nbsp;&nbsp; &lt;/div&gt;
&lt;/div&gt;</pre>
",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"4",
            "p3_widget_id"=>"4",
            "language"=>"en",
            "properties"=>"{
  \"prevLabel\":\"‹\",
  \"nextLabel\":\"›\",
  \"slide\":\"1\",
  \"displayPrevAndNext\":\"1\",
  \"items\":{
    \"0\":{
      \"image\":\"http://placehold.it/1400x800&text=This+stuff\",
      \"label\":\"It's foo bar!\",
      \"caption\":\"Lorem ipsum dolor sit amet, est te labitur tincidunt consequuntur, mutat consul dicunt id sed. Et mei quando aliquid, sed ad graece audiam ornatus. Vel id adhuc consul perfecto. Decore ignota euismod eos ex.\"
    },
    \"1\":{
      \"image\":\"http://placehold.it/1400x800&text=rockz!\",
      \"label\":\"Sup?\",
      \"caption\":\"Lorem ipsum dolor sit amet, est te labitur tincidunt consequuntur, mutat consul dicunt id sed. Et mei quando aliquid, sed ad graece audiam ornatus. Vel id adhuc consul perfecto. Decore ignota euismod eos ex.\"
    }
  },      
  \"actionPrefix\":\"NULL\",
  \"skin\":\"default\"
}",
            "content"=>"<div>
	<div class=\"row\">
		<div class=\"span6\">
			{WIDGET_CONTENT}</div>
		<div class=\"span6\">
			<h2>
				Ex feugait processus</h2>
			<p>
				Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.</p>
			<p>
				Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.</p>
		</div>
	</div>
</div>
<div>
</div>
",
        ) );

        $this->insert("p3_widget_translation", array(
            "id"=>"5",
            "p3_widget_id"=>"5",
            "language"=>"en",
            "properties"=>"{\"actionPrefix\":\"NULL\",\"skin\":\"default\"}",
            "content"=>"<div>
	<h2>
		Properties</h2>
	<pre>
{
    &quot;prevLabel&quot;: &quot;&lsaquo;&quot;,
    &quot;nextLabel&quot;: &quot;&rsaquo;&quot;,
    &quot;slide&quot;: &quot;1&quot;,
    &quot;displayPrevAndNext&quot;: &quot;1&quot;,
    &quot;items&quot;: {
        &quot;0&quot;: {
            &quot;image&quot;: &quot;http://placehold.it/1400x800&amp;text=This+stuff&quot;,
            &quot;label&quot;: &quot;It&#39;s foo bar!&quot;,
            &quot;caption&quot;: &quot;Lorem ipsum dolor sit amet, est te labitur tincidunt consequuntur, mutat consul dicunt id sed. Et mei quando aliquid, sed ad graece audiam ornatus. Vel id adhuc consul perfecto. Decore ignota euismod eos ex.&quot;
        },
        &quot;1&quot;: {
            &quot;image&quot;: &quot;http://placehold.it/1400x800&amp;text=rockz!&quot;,
            &quot;label&quot;: &quot;Sup?&quot;,
            &quot;caption&quot;: &quot;Lorem ipsum dolor sit amet, est te labitur tincidunt consequuntur, mutat consul dicunt id sed. Et mei quando aliquid, sed ad graece audiam ornatus. Vel id adhuc consul perfecto. Decore ignota euismod eos ex.&quot;
        }
    },
    &quot;actionPrefix&quot;: &quot;NULL&quot;,
    &quot;skin&quot;: &quot;default&quot;
}</pre>
	<h2>
		HTML Source-Code</h2>
	<pre>
&lt;div&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;span6&quot;&gt;
   {WIDGET_CONTENT}&lt;/div&gt;
  &lt;div class=&quot;span6&quot;&gt;
   &lt;h2&gt;
    Ex feugait processus&lt;/h2&gt;
   &lt;p&gt;
    Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.&lt;/p&gt;
   &lt;p&gt;
    Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.Ex feugait processus Est veniam sit, Qui ut typi con. Sequat nobis elit. Liber facer elit delenit nunc consequat. Parum augue in minim vero amet. Te qui ut per molestie notare.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
	<div class=\"row-fluid\">
	</div>
</div>
<div>
</div>
",
        ) );




        // Data for table 'p3_page'
        $this->insert("p3_page", array(
            "id"=>"1",
            "layout"=>null,
            "view"=>null,
            "route"=>"{\"route\":\"/site/index\"}",
            "nameId"=>"Navbar",
        ) );

        $this->insert("p3_page", array(
            "id"=>"2",
            "layout"=>null,
            "view"=>null,
            "route"=>null,
            "nameId"=>null,
        ) );

        $this->insert("p3_page", array(
            "id"=>"3",
            "layout"=>"//layouts/main",
            "view"=>"//p3pages/column1",
            "route"=>"{}",
            "nameId"=>null,
        ) );

        $this->insert("p3_page", array(
            "id"=>"4",
            "layout"=>"//layouts/main",
            "view"=>"//p3pages/column1",
            "route"=>"{}",
            "nameId"=>null,
        ) );

        $this->insert("p3_page", array(
            "id"=>"5",
            "layout"=>"//layouts/main",
            "view"=>"//p3pages/column1",
            "route"=>"{}",
            "nameId"=>null,
        ) );




        // Data for table 'p3_page_meta'
        $this->insert("p3_page_meta", array(
            "id"=>"1",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>null,
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-14 21:39:33",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-05-14 21:40:04",
            "modifiedBy"=>"1",
            "guid"=>"4DACAAC0-DA36-4EE5-B5EE-CD2A71202B11",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"2",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"1",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-14 21:40:09",
            "createdBy"=>"1",
            "modifiedAt"=>"0000-00-00 00:00:00",
            "modifiedBy"=>null,
            "guid"=>"61A27DA3-D5E2-405D-A33D-E1A67AAEB33C",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"3",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"2",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-14 21:44:49",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-05-14 21:44:57",
            "modifiedBy"=>"1",
            "guid"=>"98FAF80B-39D9-4245-A248-497215A8F255",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"4",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"2",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-14 21:57:55",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-05-14 21:58:04",
            "modifiedBy"=>"1",
            "guid"=>"682954BD-BDD5-4B98-B0B5-6778A1FEBE6F",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );

        $this->insert("p3_page_meta", array(
            "id"=>"5",
            "status"=>"30",
            "type"=>null,
            "language"=>"_ALL",
            "treeParent_id"=>"2",
            "treePosition"=>null,
            "begin"=>null,
            "end"=>null,
            "keywords"=>null,
            "customData"=>null,
            "label"=>null,
            "owner"=>"1",
            "checkAccessCreate"=>null,
            "checkAccessRead"=>null,
            "checkAccessUpdate"=>null,
            "checkAccessDelete"=>null,
            "createdAt"=>"2013-05-14 21:59:19",
            "createdBy"=>"1",
            "modifiedAt"=>"2013-05-14 21:59:24",
            "modifiedBy"=>"1",
            "guid"=>"71B94105-58F0-4277-A377-9DF5DB0BE351",
            "ancestor_guid"=>null,
            "model"=>"P3Page",
        ) );




        // Data for table 'p3_page_translation'
        $this->insert("p3_page_translation", array(
            "id"=>"1",
            "p3_page_id"=>"2",
            "language"=>"en",
            "seoUrl"=>"examples",
            "pageTitle"=>"Examples",
            "menuName"=>"Examples",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"2",
            "p3_page_id"=>"3",
            "language"=>"en",
            "seoUrl"=>null,
            "pageTitle"=>null,
            "menuName"=>"Basic HTML",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"3",
            "p3_page_id"=>"4",
            "language"=>"en",
            "seoUrl"=>null,
            "pageTitle"=>null,
            "menuName"=>"Carousel",
            "keywords"=>null,
            "description"=>null,
        ) );

        $this->insert("p3_page_translation", array(
            "id"=>"4",
            "p3_page_id"=>"5",
            "language"=>"en",
            "seoUrl"=>null,
            "pageTitle"=>null,
            "menuName"=>"Fancybox",
            "keywords"=>null,
            "description"=>null,
        ) );

        if (Yii::app()->db->schema instanceof CMysqlSchema)
           $this->execute('SET FOREIGN_KEY_CHECKS = 1;');

	}

	public function safeDown() {
		echo 'Migration down not supported.';
	}

}

?>
