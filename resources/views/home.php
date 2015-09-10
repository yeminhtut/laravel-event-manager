<html>
    <head>
        <title>Event Manager</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.js"></script>
    </head>
    <body>
    	<header>
    		<div class="container">
	            <nav class="navbar navbar-light">
	                <a class="navbar-brand" href="#">Event Manager</a>
	                <div class="navbar-form pull-right"><a data-toggle="modal" data-target="#myModal">login</a></div>
	            </nav>
        	</div>
    	</header>      
        <div class="container">
            
                <div class="col-sm-4">
                    One of three columns
                </div>
                <div class="col-sm-4">
                    One of three columns
                </div>
                <div class="col-sm-4">
                    One of three columns
                </div>
            
        </div>
        <!--Modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
