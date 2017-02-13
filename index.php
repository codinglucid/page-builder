<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>KEditor - Kademi Content Editor</title>
        <link rel="stylesheet" type="text/css" href="plugins/bootstrap-3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="dist/css/keditor-1.1.3.min.css" />
        <link rel="stylesheet" type="text/css" href="dist/css/keditor-components-1.1.3.min.css" />
        <link rel="stylesheet" type="text/css" href="css/examples.css" />
        <script src="plugins/jquery-1.11.3/jquery-1.11.3.min.js"></script>
        <script src="plugins/bootstrap-3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            var bsTooltip = $.fn.tooltip;
            var bsButton = $.fn.button;
        </script>
        <script src="plugins/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript">
            $.widget.bridge('uibutton', $.ui.button);
            $.widget.bridge('uitooltip', $.ui.tooltip);
            $.fn.tooltip = bsTooltip;
            $.fn.button = bsButton;
        </script>
        <script src="plugins/jquery.nicescroll-3.6.6/jquery.nicescroll.min.js"></script>
        <script src="plugins/ckeditor-4.5.6/ckeditor.js"></script>
        <script src="plugins/ckeditor-4.5.6/adapters/jquery.js"></script>
        <script src="dist/js/keditor-1.1.3.min.js"></script>
        <script src="dist/js/keditor-components-1.1.3.js"></script>
    </head>

    <body>
		
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">iKi Page Builder</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
		<li><a href="#">Preview</a></li>
		<li><a href="#" id="save">Save</a></li>
		<li><a href="#">Logout</a></li>
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		
		
        <div id="content-area">
		
		<section><div class="row">
        <div class="col-sm-12" data-type="container-content">
        <section><div class="row">
        <div class="col-sm-3 keditor-container-content ui-droppable ui-sortable" data-type="container-content" id="keditor-container-content-1486927853646">
        <section data-type="component-photo" data-categories="Media;Photo" class="keditor-component existing-component keditor-initialized-component showed-keditor-toolbar" id="keditor-component-1486927853654"><section class="keditor-component-content" id="keditor-component-content-1486927853655"><div class="photo-panel">
        <img src="http://i.imgur.com/hshbA5e.jpg" width="100%" height="" style="display: inline-block;">
    </div></section><div class="keditor-toolbar keditor-toolbar-component">   <a href="#" class="btn-component-reposition"><i class="fa fa-arrows"></i></a><a href="#" class="btn-component-setting"><i class="fa fa-cog"></i></a>   <a href="#" class="btn-component-duplicate"><i class="fa fa-files-o"></i></a>   <a href="#" class="btn-component-delete"><i class="fa fa-times"></i></a></div></section></div>
        <div class="col-sm-3 keditor-container-content ui-droppable ui-sortable" data-type="container-content" id="keditor-container-content-1486927853665">
        </div>
        <div class="col-sm-3 keditor-container-content ui-droppable ui-sortable" data-type="container-content" id="keditor-container-content-1486927853669">
        </div>
        <div class="col-sm-3 keditor-container-content ui-droppable ui-sortable" data-type="container-content" id="keditor-container-content-1486927853688">
        </div>
    </div></section></div>
    </div></section>
		
		</div>
        
        <script type="text/javascript">
            $(function() {
                $('#content-area').keditor();
				$("#save").click(function(){
					console.log($('#content-area').keditor('getContent'));
					return false;
				});
				
            });
        </script>
    </body>
</html>
