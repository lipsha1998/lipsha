<!DOCTYPE html>
<html>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    body {
        color: #404E67;
        background: #F5F7FA;
        font-family: 'Open Sans', sans-serif;
    }
    .table-wrapper {
        width: 1000px;
        margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }
    .table-title .add-new i {
        margin-right: 4px;
    }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }    
    table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
    table.table .form-control.error {
        border-color: #f50000;
    }
    table.table td .add {
        display: none;
    }
</style>
<body class="hero-anime"> 
    <div class="wrapper">
        <div class="sidebar">
            <nav class="navbar-lateral">
                <ul>
                  <li class="logo">
                     <a href="" class="nav-link">
                        <img style = "width: 121px; height: 45px; padding: 2px; margin: -12px;" src="download.jpg" alt="">
                      </a>
                  </li>
                </ul>
            </nav>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="#"><i class="fas fa-map-pin"></i>Track on Map</a></li>
                <li><a href="#"><i class="fas fa-address-card"></i>Report</a></li>
            </ul> 
            
        </div>
    <div class="main_content">
        <div class="header">
           </div>  
              <div class="info">
                 <div><strong>Dashboard</strong></div>
              </div>
		        <div class="row" style="margin-right: 128px;margin-left: 40px;">
                    <div class="col-sm-3" style=" margin-top: 7px;">
                         <div class="card">
                             <span style="color:blue" class="cust_span"></span>
                                  <p class="cust_p" style = "color: green;"><span class="cust_span2" style ="margin-right: 56px;"><i class="fas fa-people-carry"style="font-size: 53px;color:green;"></i>
			                    </span>moving</p>
			                     <p class="cust_p" style = "color: green;">&nbsp;&nbsp;View Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;264</p>
                            </div>
                      </div>
                   <div class="col-sm-3"  style=" margin-top: 7px;"> 
                        <div class="card">
                            <span style="color:blue" class="cust_span"></span>
                                <p class="cust_p" style = "color: red;"><span class="cust_span2" style ="margin-right: 56px;"><i class="fas fa-ban" style="font-size:53px;color:red;"></i></span>   
                                 Stoped</p>
			                    <p class="cust_p" style = "color: red;">&nbsp;&nbsp;View Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;264</p>
                        </div>
                   </div>
                    <div class="col-sm-3"  style=" margin-top: 7px;">
                         <div class="card">
                             <span style="color:blue" class="cust_span"></i></span>
                                <p class="cust_p" style = "color: orange;"><span class="cust_span2"style ="margin-right: 56px;"><i class="fas fa-calendar-alt" style="font-size:53px;color:orange;"></i></span>  
                                 calender </p>
			                    <p class="cust_p" style = "color: orange;">&nbsp;&nbsp;View Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;264</p>
                          </div>
                    </div>
                   <div class="col-sm-3"  style=" margin-top: 7px;">
                        <div class="card">
                             <span style="color:blue" class="cust_span"></span>
                               <p class="cust_p" style = "color: purple;"><span class="cust_span2"style ="margin-right: 56px;"><i class="fas fa-exclamation-circle" style="font-size:53px;color:purple;"></i></span>    
                               inacative </p>
			                  <p class="cust_p" style = "color: purple;">&nbsp;&nbsp;View Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;264</p>
                        </div>
                    </div>
              </div>
                <div class="info">
                    <div><strong>Track on map</strong></div>
                </div>
                    <iframe frameborder="0" width ="1000px;" style = "margin-left: 41px;"src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=1625+hennepin+ave+minneapolis+mn&z=14&output=embed"></iframe>
                <div class="info">
                    <div><strong>Select Record</strong></div>
                </div>
                    <script src="https://code.highcharts.com/highcharts.js" ></script>
                        <div class="row" style="margin-right: 120px;margin-left: 23px;">
                             <div class="col-sm-2">
                                <table class="table table-bordered" id="demo" style ="width: 490px;">
                                        <thead>
                                            <tr>
                                               <th>slno</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Phone</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>John Doe</td>
                                                        <td>Administration</td>
                                                        <td>(171) 555-2222</td>
                                                        <td>
                                                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                        </td>
                                                    
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Peter Parker</td>
                                                        <td>Customer Service</td>
                                                        <td>(313) 555-5735</td>
                                                        <td>
                                                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                        </td>
                                                    
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Fran Wilson</td>
                                                        <td>Human Resources</td>
                                                        <td>(503) 555-9931</td>
                                                        <td>
                                                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                    </table> 
                                </div>
                                    <div class="col-sm-8">
                                         <div id="chart_div1" style="width:50%; height:300px; margin-left:500px;">
                                         </div>
                                    </div>
                            </div>
        <div class="info">
             <div><b>Records</b></div>
        </div>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-2"></div>
                         <div class="col-sm-12">
                             <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </div>
                    </div>
                </div>
            <table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        <th>slno</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Administration</td>
                            <td>(171) 555-2222</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Peter Parker</td>
                            <td>Customer Service</td>
                            <td>(313) 555-5735</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fran Wilson</td>
                            <td>Human Resources</td>
                            <td>(503) 555-9931</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>      
                   </tbody>
                </table>
             </div>
          </div>
       </div> 
    </div>
</div>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
    $(function () { 
      Highcharts.setOptions({
        colors: ['#67BCE6'],
        chart: {
            style: {
                fontFamily: 'sans-serif',
                color: '#fff'
            }
        }
    });  
      $('#chart_div1').highcharts({
            chart: {
                type: 'column',
                backgroundColor: '#36394B'
            },
            title: {
                text: 'Weekly Revenue',
                style: {  
                  color: '#fff'
                }
            },
            xAxis: {
                tickWidth: 0,
                labels: {
                  style: {
                      color: '#fff',
                     }
                  },
                categories: ['May 5', 'May 6', 'May 7', 'May 8', 'May 9', 'May 10', 'May 11']
            },
            yAxis: {
               gridLineWidth: .5,
              gridLineDashStyle: 'dash',
              gridLineColor: 'black',
               title: {
                    text: '',
                    style: {
                      color: '#fff'
                     }
                },
                labels: {
                  formatter: function() {
                            return '$'+Highcharts.numberFormat(this.value, 0, '', ',');
                        },
                  style: {
                      color: '#fff',
                     }
                  }
                },
            legend: {
                enabled: false,
            },
            credits: {
                enabled: false
            },
            tooltip: {
               valuePrefix: '$'
            },
            plotOptions: {
              column: {
                borderRadius: 2,
                 pointPadding: 0,
                groupPadding: 0.1
                } 
            },
            series: [{
                name: 'Revenue',
                data: [2200, 2800, 2300, 1700, 2000, 1200, 1400]
            }]
        });
    });
	$(document).ready(function () {
		$('#example').DataTable();
		$('#example tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });
  
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="slno" id="slno"></td>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
    
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>
</body>
</html>