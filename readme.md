pico_subtemplate
===================================

A Pico CMS simply plugin for render subtemplate to main layout. 
In default Pico, you can change only main template by setting `Template` meta.
This plugin allows you to setup something like nested template.

#### Usage

Create custom named template in you Theme dir `e.g. sidebar.html`

````html
<div class="sub-content">
	{{ content }}
</div>
<div class="sidebar">
	<ul>
		<li>Feature 1</li>
		<li>Feature 2</li>
	</ul>
</div>
````

In your .md file add meta `Subtemplate: sidebar`

That's all