
<?php

/**
 * Created with https://github.com/schmunk42/database-command
 */

class m130411_104109_demo_data extends CDbMigration {

	public function safeUp() {
        if (Yii::app()->db->schema instanceof CMysqlSchema) {
           $this->execute('SET FOREIGN_KEY_CHECKS = 0;');
           $options = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';
        } else {
           $options = '';
        }
        $this->truncateTable("AuthAssignment");
        $this->truncateTable("AuthItem");
        $this->truncateTable("AuthItemChild");
        $this->truncateTable("Rights");
        $this->truncateTable("p3_widget");
        $this->truncateTable("p3_media");
        $this->truncateTable("p3_media_meta");
        $this->truncateTable("p3_widget_meta");
        $this->truncateTable("p3_widget_translation");
        $this->truncateTable("p3_page");
        $this->truncateTable("p3_page_meta");
        $this->truncateTable("p3_page_translation");







        // Data for table 'AuthAssignment'
        $this->insert("AuthAssignment", array(
            "itemname"=>"Editor",
            "userid"=>"1",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthAssignment", array(
            "itemname"=>"Admin",
            "userid"=>"1",
            "bizrule"=>null,
            "data"=>"N;",
        ) );




        // Data for table 'AuthItem'
        $this->insert("AuthItem", array(
            "name"=>"Admin",
            "type"=>"2",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"Authenticated",
            "type"=>"2",
            "description"=>"All user accounts",
            "bizrule"=>"return !Yii::app()->user->isGuest;",
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"Guest",
            "type"=>"2",
            "description"=>null,
            "bizrule"=>"return Yii::app()->user->isGuest;",
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"Editor",
            "type"=>"2",
            "description"=>"Content Editor (Widgets, Media Files)",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3admin.Default.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3admin.Module.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.Ckeditor.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.Default.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.File.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.Import.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.P3Media.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3media.P3MediaMeta.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.Default.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.Widget.*",
            "type"=>"1",
            "description"=>"Frontend Editor",
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.P3Widget.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.P3WidgetMeta.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3widgets.P3WidgetTranslation.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3pages.P3Page.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3pages.Default.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3pages.P3PageMeta.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3pages.P3PageTranslation.*",
            "type"=>"1",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3admin.Default.Index",
            "type"=>"0",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );

        $this->insert("AuthItem", array(
            "name"=>"P3admin.Default.Settings",
            "type"=>"0",
            "description"=>null,
            "bizrule"=>null,
            "data"=>"N;",
        ) );




        // Data for table 'AuthItemChild'
        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.Ckeditor.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.Default.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.Import.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.P3Media.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3media.P3MediaMeta.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.Default.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.Widget.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.P3Widget.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.P3WidgetMeta.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3widgets.P3WidgetTranslation.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3pages.Default.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3pages.P3Page.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3pages.P3PageMeta.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3pages.P3PageTranslation.*",
        ) );

        $this->insert("AuthItemChild", array(
            "parent"=>"Editor",
            "child"=>"P3admin.Default.Index",
        ) );




        // Data for table 'Rights'



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




        // Data for table 'p3_page'



        // Data for table 'p3_page_meta'



        // Data for table 'p3_page_translation'
        if (Yii::app()->db->schema instanceof CMysqlSchema)
           $this->execute('SET FOREIGN_KEY_CHECKS = 1;');

	}

	public function safeDown() {
		echo 'Migration down not supported.';
	}

}

?>
