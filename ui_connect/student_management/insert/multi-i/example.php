<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>jQuery Multifield Example</title>

	<!-- Latest compiled and minified CSS -->
	
	<link rel="stylesheet" href="../../../../libs/css/bootstrap.min.css">
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style type="text/css">
		body{background-color: #ECF0F1;}
		.main-content{background: #fff;padding-top:40px;padding-bottom: 40px;}
		.row{margin:10px 0px;}
		.footer{margin-top:40px;padding-top:20px;text-align: center;border-top:1px solid #BDC3C7;}
	</style>
</head>
<body>


<div class="container main-content">


	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<h2>Plugin Options</h2>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th>Option</th>
						<th>Type</th>
						<th>Default</th>
						<th>Description</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>section</td>
						<td>string</td>
						<td>null</td>
						<td><b>REQUIRED</b> Selector of the section which is located inside of the parent wrapper</td>
					</tr>
					<tr>
						<td>btnAdd</td>
						<td>string</td>
						<td>null</td>
						<td><b>REQUIRED</b> Selector of the "Add section" button - can be located everywhere on the page</td>
					</tr>
					<tr>
						<td>btnRemove</td>
						<td>string</td>
						<td>null</td>
						<td><b>REQUIRED</b> Selector of the "Remove section" button - should be located INSIDE of the "section"</td>
					</tr>
					<tr>
						<td>max</td>
						<td>integer</td>
						<td>0</td>
						<td>Maximum section</td>
					</tr>
					<tr>
						<td>locale</td>
						<td>string</td>
						<td>'default'</td>
						<td>Language to use, default is english</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<h2>Basic usage #1 (HTML5 data-attribute options) <a data-toggle="collapse" class="btn btn-warning" href="#srcExample1" aria-expanded="false" aria-controls="srcExample1">SOURCE</a></h2>

			<div class="collapse" id="srcExample1">
				<pre>
&lt;div id="example-1" class="content" data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'&gt;
	&lt;div class="row"&gt;
		&lt;div class="col-md-12"&gt;&lt;button type="button" id="btnAdd-1" class="btn btn-primary"&gt;Add section&lt;/button&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row group"&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input class="form-control" type="text"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input class="form-control" type="text"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4"&gt;
			&lt;textarea&gt;&lt;/textarea&gt;
		&lt;/div&gt;
		&lt;div class="col-md-3"&gt;
			&lt;button type="button" class="btn btn-danger btnRemove"&gt;Remove&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<pre>
&lt;script&gt;
$('#example-1').multifield();
&lt;/script&gt;
</pre>
			</div>
		</div>
	</div>
</div>

<div id="example-1" class="content" data-mfield-options='{"section": ".group","btnAdd":"#btnAdd-1","btnRemove":".btnRemove"}'>
	<div class="row">
		<div class="col-md-12"><button type="button" id="btnAdd-1" class="btn btn-primary">Add section</button></div>
	</div>
	<div class="row group">
		<div class="col-md-2">
			<input class="form-control" type="text">
		</div>
		<div class="col-md-2">
			<input class="form-control" type="text">
		</div>
		<div class="col-md-4">
			<textarea class="form-control"></textarea>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-danger btnRemove">Remove</button>
		</div>
	</div>
</div>

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<h2>Basic usage #2 (JavaScript options) <a data-toggle="collapse" class="btn btn-warning" href="#srcExample2" aria-expanded="false" aria-controls="srcExample2">SOURCE</a></h2>
			<div class="collapse" id="srcExample2">
<pre>
&lt;div id="example-2" class="content"&gt;
	&lt;div class="row"&gt;
		&lt;div class="col-md-12"&gt;&lt;button type="button" id="btnAdd-2" class="btn btn-primary"&gt;Add section&lt;/button&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row group"&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input class="form-control" type="text"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input class="form-control" type="text"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4"&gt;
			&lt;textarea&gt;&lt;/textarea&gt;
		&lt;/div&gt;
		&lt;div class="col-md-3"&gt;
			&lt;button type="button" class="btn btn-danger btnRemove"&gt;Remove&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<pre>
&lt;script&gt;
$('#example-2').multifield({
	section: '.group',
	btnAdd:'#btnAdd-2',
	btnRemove:'.btnRemove'
});
&lt;/script&gt;
</pre>
			</div>
		</div>
	</div>
</div>

<div id="example-2" class="content">
	<div class="row">
		<div class="col-md-12"><button type="button" id="btnAdd-2" class="btn btn-primary">Add section</button></div>
	</div>
	<div class="row group">
		<div class="col-md-2">
			<input class="form-control" type="text">
		</div>
		<div class="col-md-2">
			<input class="form-control" type="text">
		</div>
		<div class="col-md-4">
			<textarea class="form-control"></textarea>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-danger btnRemove">Remove</button>
		</div>
	</div>
</div>


<div class="content">
	<div class="row">
		<div class="col-md-12">
			<h2>Example #3 (The maximum sections count) <a data-toggle="collapse" class="btn btn-warning" href="#srcExample3" aria-expanded="false" aria-controls="srcExample3">SOURCE</a></h2>
			<p>You can set maximum sections count via 'max' option.</p>
			<div class="collapse" id="srcExample3">
<pre>
&lt;div id="example-3" class="content"&gt;
	&lt;div class="row"&gt;
		&lt;div class="col-md-12"&gt;&lt;button type="button" id="btnAdd-3" class="btn btn-primary"&gt;Add section&lt;/button&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row group"&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input class="form-control" type="text"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input class="form-control" type="text"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4"&gt;
			&lt;textarea&gt;&lt;/textarea&gt;
		&lt;/div&gt;
		&lt;div class="col-md-3"&gt;
			&lt;button type="button" class="btn btn-danger btnRemove"&gt;Remove&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<pre>
&lt;script&gt;
$('#example-3').multifield({
	section: '.group',
	btnAdd:'#btnAdd-3',
	btnRemove:'.btnRemove',
	max: 3
});
&lt;/script&gt;
</pre>
			</div>
		</div>
	</div>
</div>

<div id="example-3" class="content">
	<div class="row">
		<div class="col-md-12"><button type="button" id="btnAdd-3" class="btn btn-primary">Add section</button></div>
	</div>
	<div class="row group">
		<div class="col-md-2">
			<input class="form-control" type="text">
		</div>
		<div class="col-md-2">
			<input class="form-control" type="text">
		</div>
		<div class="col-md-4">
			<textarea class="form-control"></textarea>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-danger btnRemove">Remove</button>
		</div>
	</div>
</div>

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<h2>Example #4 (Localization) <a data-toggle="collapse" class="btn btn-warning" href="#srcExample4" aria-expanded="false" aria-controls="srcExample4">SOURCE</a></h2>
			<p>You can translate confirmation message which appears on section remove.</p>
			<p>To do so just pass an object with translated strings through the 'locale' option.</p>
			<div class="collapse" id="srcExample4">
<pre>
&lt;div id="example-4" class="content"&gt;
	&lt;div class="row"&gt;
		&lt;div class="col-md-12"&gt;&lt;button type="button" id="btnAdd-4" class="btn btn-primary"&gt;Добавить&lt;/button&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row group"&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input class="form-control" type="text"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input class="form-control" type="text"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4"&gt;
			&lt;textarea&gt;&lt;/textarea&gt;
		&lt;/div&gt;
		&lt;div class="col-md-3"&gt;
			&lt;button type="button" class="btn btn-danger btnRemove"&gt;Удалить&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<pre>
&lt;script&gt;
$('#example-4').multifield({
	section: '.group',
	btnAdd:'#btnAdd-4',
	btnRemove:'.btnRemove',
	locale:{
          "multiField": {
            "messages": {
              "removeConfirmation": "Вы уверены, что вы хотите удалить этот элемент?"
            }
          }
        }
});
&lt;/script&gt;
</pre>
			</div>
		</div>
	</div>
</div>

<div id="example-4" class="content">
	<div class="row">
		<div class="col-md-12"><button type="button" id="btnAdd-4" class="btn btn-primary">Добавить</button></div>
	</div>
	<div class="row group">
		<div class="col-md-2">
			<input class="form-control" type="text">
		</div>
		<div class="col-md-2">
			<input class="form-control" type="text">
		</div>
		<div class="col-md-4">
			<textarea class="form-control"></textarea>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-danger btnRemove">Удалить</button>
		</div>
	</div>
</div>


<div class="content">
	<div class="row">
		<div class="col-md-12">
			<h2>Example #5 (Advanced) <a data-toggle="collapse" class="btn btn-warning" href="#srcExample5" aria-expanded="false" aria-controls="srcExample5">SOURCE</a></h2>
			<p>
				To use radio buttons you should add numeric value to their names, for example: name="group[0]"
			</p>
			<p>Add "reset-image-src" class to image to reset image src</p>
			<div class="collapse" id="srcExample5">
<pre>
&lt;div id="example-5" class="content"&gt;
	&lt;div class="row"&gt;
		&lt;div class="col-md-12"&gt;&lt;button type="button" id="btnAdd-5" class="btn btn-primary"&gt;Add section&lt;/button&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row group"&gt;
		&lt;div class="col-md-2"&gt;
			&lt;select name="select_example[]"&gt;
				&lt;option value="1"&gt;Option 1&lt;/option&gt;
				&lt;option value="2"&gt;Option 2&lt;/option&gt;
				&lt;option value="3"&gt;Option 3&lt;/option&gt;
			&lt;/select&gt;
		&lt;/div&gt;
		&lt;div class="col-md-2"&gt;
			&lt;input type="radio" name="radio_example[0]" value="1"&gt; Option 1 &lt;br&gt;
			&lt;input type="radio" name="radio_example[0]" value="2"&gt; Option 2 &lt;br&gt;
			&lt;input type="radio" name="radio_example[0]" value="3"&gt; Option 3 &lt;br&gt;
		&lt;/div&gt;
		&lt;div class="col-md-3"&gt;
			&lt;p&gt;Image src will not be cleared&lt;/p&gt;
			&lt;img class="media-object" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGU0MzRkMDhhOCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZTQzNGQwOGE4Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="  style="width: 64px; height: 64px;"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-2"&gt;
			&lt;p&gt;Image src will be cleared&lt;/p&gt;
			&lt;img class="media-object reset-image-src" alt="Image" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGU0MzRkMDhhOCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZTQzNGQwOGE4Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" style="width: 64px; height: 64px;"&gt;
		&lt;/div&gt;
		&lt;div class="col-md-2"&gt;
			&lt;button type="button" class="btn btn-danger btnRemove"&gt;Remove&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<pre>
&lt;script&gt;
$('#example-5').multifield({
	section: '.group',
	btnAdd:'#btnAdd-5',
	btnRemove:'.btnRemove',
});
&lt;/script&gt;
</pre>
			</div>
		</div>
	</div>
</div>

<div id="example-5" class="content">
	<div class="row">
		<div class="col-md-12"><button type="button" id="btnAdd-5" class="btn btn-primary">Add section</button></div>
	</div>
	<div class="row group">
		<div class="col-md-2">
			<select name="select_example[]">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
			</select>
		</div>
		<div class="col-md-2">
			<input type="radio" name="radio_example[0]" value="1"> Option 1 <br>
			<input type="radio" name="radio_example[0]" value="2"> Option 2 <br>
			<input type="radio" name="radio_example[0]" value="3"> Option 3 <br>
		</div>
		<div class="col-md-3">
			<p>Image src will not be cleared</p>
			<img class="media-object" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGU0MzRkMDhhOCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZTQzNGQwOGE4Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="  style="width: 64px; height: 64px;">
		</div>
		<div class="col-md-2">
			<p>Image src will be cleared</p>
			<img class="media-object reset-image-src" alt="Image" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGU0MzRkMDhhOCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZTQzNGQwOGE4Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" style="width: 64px; height: 64px;">
		</div>
		<div class="col-md-2">
			<button type="button" class="btn btn-danger btnRemove">Remove</button>
		</div>
	</div>
</div>

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<h2>Example #6 (Handling data with PHP) <a data-toggle="collapse" class="btn btn-warning" href="#srcExample6" aria-expanded="false" aria-controls="srcExample6">SOURCE</a></h2>
			<div class="collapse" id="srcExample6">
<pre>
&lt;form method="post"&gt;
&lt;div id="example-6" class="content"&gt;
	&lt;div class="row"&gt;
		&lt;div class="col-md-12"&gt;&lt;button type="button" id="btnAdd-6" class="btn btn-primary"&gt;Add Employee&lt;/button&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row group"&gt;
		&lt;div class="col-md-2"&gt;
			&lt;div class="form-group"&gt;
				&lt;label&gt;Name&lt;input class="form-control" class="form-control" type="text" name="user_name[]"&gt;&lt;/label&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="col-md-2"&gt;
			&lt;label&gt;Gender
			&lt;select name="user_gender[]" class="form-control"&gt;
				&lt;option value=""&gt;Please select..&lt;/option&gt;
				&lt;option value="male"&gt;Male&lt;/option&gt;
				&lt;option value="female"&gt;Female&lt;/option&gt;
			&lt;/select&gt;
			&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class="col-md-4"&gt;
			&lt;div class="col-md-2"&gt;
				&lt;div class="radio"&gt;
					&lt;label&gt;&lt;input type="radio" name="user_role[0]" value="manager"&gt; Manager &lt;/label&gt;
				&lt;/div&gt;
				&lt;div class="radio"&gt;
					&lt;label&gt;&lt;input type="radio" name="user_role[0]" value="editor"&gt; Editor &lt;/label&gt;
				&lt;/div&gt;
				&lt;div class="radio"&gt;
					&lt;label class="checkbox-inline"&gt;&lt;input type="radio" name="user_role[0]" value="writer"&gt; Writer &lt;/label&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="col-md-3"&gt;
			&lt;button type="button" class="btn btn-danger btnRemove"&gt;Remove&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;
</pre>
<pre>
&lt;script&gt;
$('#example-6').multifield({
	section: '.group',
	btnAdd:'#btnAdd-6',
	btnRemove:'.btnRemove',
});
&lt;/script&gt;
</pre>
<pre>
&lt;?php var_dump($_POST); ?&gt;

OUTPUT :

  'user_name' =>
    array (size=5)
      0 => string 'John Doe' (length=8)
      1 => string 'Alice Smith' (length=11)
      2 => string 'Jason Louis' (length=11)
      3 => string 'Bob Freeman' (length=11)
      4 => string 'Jane Watkins' (length=12)
  'user_gender' =>
    array (size=5)
      0 => string 'male' (length=4)
      1 => string 'female' (length=6)
      2 => string 'male' (length=4)
      3 => string 'male' (length=4)
      4 => string 'female' (length=6)
  'user_role' =>
    array (size=5)
      0 => string 'manager' (length=7)
      1 => string 'editor' (length=6)
      2 => string 'writer' (length=6)
      3 => string 'writer' (length=6)
      4 => string 'writer' (length=6)

// Get information about the first record
$_POST['user_name'][0]; // John Doe
$_POST['user_gender'][0]; // male
$_POST['user_role'][0]; // manager

</pre>
			</div>
		</div>
	</div>
</div>

<div id="example-6" class="content">
	<div class="row">
		<div class="col-md-12"><button type="button" id="btnAdd-6" class="btn btn-primary">Add Employee</button></div>
	</div>
	<div class="row group">
		<div class="col-md-2">
			<div class="form-group">
				<label>Name<input class="form-control" class="form-control" type="text" name="user_name[]"></label>
			</div>
		</div>
		<div class="col-md-2">
			<label>Gender
			<select name="user_gender[]" class="form-control">
				<option value="">Please select..</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			</label>
		</div>
		<div class="col-md-4">
			<div class="col-md-2">
				<div class="radio">
					<label><input type="radio" name="user_role[0]" value="manager"> Manager </label>
				</div>
				<div class="radio">
					<label><input type="radio" name="user_role[0]" value="editor"> Editor </label>
				</div>
				<div class="radio">
					<label class="checkbox-inline"><input type="radio" name="user_role[0]" value="writer"> Writer </label>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-danger btnRemove">Remove</button>
		</div>
	</div>
</div>


	<div class="content footer">
		<div class="row">
			<div class="col-md-12">
				2016 &copy; <a href="https://maxkostinevich.com" target="_blank" title="Max Kostinevich">Max Kostinevich</a>
			</div>
		</div>
	</div>

</div>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery Multifield -->
<script src="jquery.multifield.min.js"></script>
<script>

	$('#example-1').multifield();

	$('#example-2').multifield({
		section: '.group',
		btnAdd:'#btnAdd-2',
		btnRemove:'.btnRemove'
	});

	$('#example-3').multifield({
		section: '.group',
		btnAdd:'#btnAdd-3',
		btnRemove:'.btnRemove',
		max:3
	});

	$('#example-4').multifield({
		section: '.group',
		btnAdd:'#btnAdd-4',
		btnRemove:'.btnRemove',
		locale:{
      "multiField": {
        "messages": {
          "removeConfirmation": "Вы уверены, что вы хотите удалить этот элемент?"
        }
      }
    }
	});

	$('#example-5').multifield({
		section: '.group',
		btnAdd:'#btnAdd-5',
		btnRemove:'.btnRemove'
	});

	$('#example-6').multifield({
		section: '.group',
		btnAdd:'#btnAdd-6',
		btnRemove:'.btnRemove'
	});

</script>

<!-- Place this tag right after the last button or just before your close body tag. -->
<script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
</body>
</html>