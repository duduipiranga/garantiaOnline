<?php
session_start();
require("Connections/conexao.php");
require("seguranca.php");
require("funcoes.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Garantia Online</title>
    
        <!-- Bootstrap framework -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" />
        <!-- breadcrumbs-->
            <link rel="stylesheet" href="lib/jBreadcrumbs/css/BreadCrumb.css" />
        <!-- tooltips-->
            <link rel="stylesheet" href="lib/qtip2/jquery.qtip.min.css" />
        <!-- colorbox -->
            <link rel="stylesheet" href="lib/colorbox/colorbox.css" />    
        <!-- code prettify -->
            <link rel="stylesheet" href="lib/google-code-prettify/prettify.css" />    
        <!-- notifications -->
            <link rel="stylesheet" href="lib/sticky/sticky.css" />    
        <!-- splashy icons -->
            <link rel="stylesheet" href="img/splashy/splashy.css" />
        <!-- flags -->
            <link rel="stylesheet" href="img/flags/flags.css" />    
        <!-- calendar -->
            <link rel="stylesheet" href="lib/fullcalendar/fullcalendar_gebo.css" />
            
        <!-- gebo color theme-->
            <link rel="stylesheet" href="css/blue.css" id="link_theme" />
        <!-- main styles -->
            <link rel="stylesheet" href="css/style.css" />
            
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans" />
    
        <!-- Favicon -->
            <link rel="shortcut icon" href="favicon.ico" />
        
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/ie.css" />
            <script src="js/ie/html5.js"></script>
            <script src="js/ie/respond.min.js"></script>
            <script src="lib/flot/excanvas.min.js"></script>
        <![endif]-->
        
        <script>
            //* hide all elements & show preloader
            document.documentElement.className += 'js';
        </script>

    </head>
    <body>
       <?php include("header.php"); ?>	
            
            <!-- main content -->
            <div id="contentwrapper">
                <div class="main_content">
                    
                    <nav>
                        <div id="jCrumbs" class="breadCrumb module">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-home"></i></a>
                                </li>
                                <li>
                                    Principal
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="row-fluid">
                        <div class="span5">
                            <h3 class="heading">Garantias <small>Pendentes / Concluidas </small></h3>
                            <div id="fl_2" style="height:200px;width:80%;margin:50px auto 0"></div>
                        </div>
                        <div class="span7">
                            <div class="heading clearfix">
                                <h3 class="pull-left">Atalhos Garantias</h3>
                                <span class="pull-right label label-important ttip_t" title="Use as opções abaixo para: Adicionar e Listar as Garantais">Info</span>
                            </div>
                            <div id="fl_c" style="height:270px;width:100%;margin:15px auto 0">
                            
                            	<ul class="dshb_icoNav tac" style="float:left;">
                                <li><a href="add_garantia.php" style="background-image: url(img/gCons/add-item.png)">Adicionar</a></li>
                                <li><a href="javascript:void(0)" style="background-image: url(img/gCons/edit.png)">Pendentes</a></li>
                                <li><a href="javascript:void(0)" style="background-image: url(img/gCons/flag.png)">Concluidas</a>
                              
                            </ul>
                            
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="heading clearfix">
                            	<?php 
                            	$queryConcluida = getList10Concluida(); 
                            	$totalConcluida = mysql_num_rows($queryConcluida);
                            	?>
                                <h3 class="pull-left">Garantias <small>(concluidas)</small></h3>
                                <span class="pull-right label label-important"><?=$totalConcluida?></span>
                            </div>
                            <table class="table table-striped table-bordered mediaTable">
                                <thead>
                                    <tr>
                                        <th class="optional">ID</th>
                                        <th class="essential persist">Tipo SG</th>
                                        <th class="essential">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                               		while($linhaConcluida = mysql_fetch_array($queryConcluida)) {
                                  ?>
                                    <tr>
                                        <td><?=$linhaConcluida['id']?></td>
                                        <td><?=$linhaConcluida['tipoprod']?></td>
                                        <td>
                                            <a href="#" title="Visualizar"><i class="splashy-zoom"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="span6">
                            <div class="heading clearfix">
                            	<?php 
                            	$queryPendente = getList10Pendente(); 
                            	$totalPendente = mysql_num_rows($queryPendente);
                            	?>
                                <h3 class="pull-left">Garantias <small>(pendentes)</small></h3>
                                <span class="pull-right label label-important"><?=$totalPendente?></span>
                            </div>
                                <table class="table table-striped table-bordered mediaTable">
                                <thead>
                                    <tr>
                                        <th class="optional">ID</th>
                                        <th class="essential persist">Tipo SG</th>
                                        <th class="essential">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                               while($linhaPendente = mysql_fetch_array($queryPendente)) {
                                  ?>
                                
                                    <tr>
                                        <td><?=$linhaPendente['id']?></td>
                                        <td><?=$linhaPendente['tipoprod']?></td>
                                        <td>
                                            <a href="#" title="Visualizar"><i class="splashy-zoom"></i></a>
                                        </td>
                                    </tr>
								<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                        
                </div>
            </div>
            
            
            <?php include("menuEsquerdo.php"); ?>
            
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery-migrate.min.js"></script>
            <!-- smart resize event -->
            <script src="js/jquery.debouncedresize.min.js"></script>
            <!-- hidden elements width/height -->
            <script src="js/jquery.actual.min.js"></script>
            <!-- js cookie plugin -->
            <script src="js/jquery_cookie.min.js"></script>
            <!-- main bootstrap js -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <!-- bootstrap plugins -->
            <script src="js/bootstrap.plugins.min.js"></script>
            <!-- tooltips -->
            <script src="lib/qtip2/jquery.qtip.min.js"></script>
            <!-- jBreadcrumbs -->
            <script src="lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"></script>
            <!-- lightbox -->
            <script src="lib/colorbox/jquery.colorbox.min.js"></script>
            <!-- fix for ios orientation change -->
            <script src="js/ios-orientationchange-fix.js"></script>
            <!-- scrollbar -->
            <script src="lib/antiscroll/antiscroll.js"></script>
            <script src="lib/antiscroll/jquery-mousewheel.js"></script>
            <!-- to top -->
            <script src="lib/UItoTop/jquery.ui.totop.min.js"></script>
            <!-- mobile nav -->
            <script src="js/selectNav.js"></script>
            <!-- common functions -->
            <script src="js/gebo_common.js"></script>
            
            <script src="lib/jquery-ui/jquery-ui-1.10.0.custom.min.js"></script>
            <!-- touch events for jquery ui-->
            <script src="js/forms/jquery.ui.touch-punch.min.js"></script>
            <!-- multi-column layout -->
            <script src="js/jquery.imagesloaded.min.js"></script>
            <script src="js/jquery.wookmark.js"></script>
            <!-- responsive table -->
            <script src="js/jquery.mediaTable.min.js"></script>
            <!-- small charts -->
            <script src="js/jquery.peity.min.js"></script>
            <!-- charts -->
            <script src="lib/flot/jquery.flot.min.js"></script>
            <script src="lib/flot/jquery.flot.resize.min.js"></script>
            <script src="lib/flot/jquery.flot.pie.min.js"></script>
            <!-- calendar -->
            <script src="lib/fullcalendar/fullcalendar.min.js"></script>
            <!-- sortable/filterable list -->
            <script src="lib/list_js/list.min.js"></script>
            <script src="lib/list_js/plugins/paging/list.paging.js"></script>
            <!-- dashboard functions -->
            <script src="js/gebo_dashboard.js"></script>
    
            <script>
                $(document).ready(function() {
                    //* show all elements & remove preloader
                    setTimeout('$("html").removeClass("js")',1000);
                    gebo_charts.fl_2();
                    
                });
            </script>
            
            <script>
            	gebo_charts = {
	fl_2 : function() {
		// var a = $("#TotalSgPendente").html();
		//var b = $("#TotalSgPendente").html();
		// Setup the placeholder reference
		elem = $('#fl_2');

		var data = [{
			label : "Pendentes",
			data : <?php echo $_SESSION['totalSgPendente']; ?>
		}, {
			label : "Concluídas",
			data : <?php echo $_SESSION['totalSgConcluido']; ?>
		}];

		// Setup the flot chart using our data
		$.plot(elem, data, {
			label : "",
			series : {
				pie : {
					show : true,
					highlight : {
						opacity : 0.2
					}
				}
			},
			grid : {
				hoverable : true,
				clickable : true
			},
			//colors: [ "#b3d3e8", "#8cbddd", "#65a6d1", "#3e8fc5", "#3073a0", "#245779", "#183b52" ]
			colors : ["#b4dbeb", "#8cc7e0", "#64b4d5", "#3ca0ca", "#2d83a6", "#22637e", "#174356", "#0c242e"]
		});
		// Create a tooltip on our chart
		elem.qtip({
			prerender : true,
			content : 'Loading...', // Use a loading message primarily
			position : {
				viewport : $(window), // Keep it visible within the window if possible
				target : 'mouse', // Position it in relation to the mouse
				adjust : {
					x : 7
				} // ...but adjust it a bit so it doesn't overlap it.
			},
			show : false, // We'll show it programatically, so no show event is needed
			style : {
				classes : 'ui-tooltip-shadow ui-tooltip-tipsy',
				tip : false // Remove the default tip.
			}
		});

		// Bind the plot hover
		elem.on('plothover', function(event, pos, obj) {

			// Grab the API reference
			var self = $(this), api = $(this).qtip(), previousPoint, content,

			// Setup a visually pleasing rounding function
			round = function(x) {
				return Math.round(x * 1000) / 1000;
			};

			// If we weren't passed the item object, hide the tooltip and remove cached point data
			if (!obj) {
				api.cache.point = false;
				return api.hide(event);
			}

			// Proceed only if the data point has changed
			previousPoint = api.cache.point;
			if (previousPoint !== obj.seriesIndex) {
				percent = parseFloat(obj.series.percent).toFixed(2);
				// Update the cached point data
				api.cache.point = obj.seriesIndex;
				// Setup new content
				content = obj.series.label + ' ( ' + percent + '% )';
				// Update the tooltip content
				api.set('content.text', content);
				// Make sure we don't get problems with animations
				//api.elements.tooltip.stop(1, 1);
				// Show the tooltip, passing the coordinates
				api.show(pos);
			}
		});
	}
};
            </script>
        
        </div>
    </body>
</html>