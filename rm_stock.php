<?php
        $SQL = "SELECT * FROM  stock";
        if(isset($_POST['Search']) AND trim($_POST['searchtxt'])!="")
        {
            $SQL = "SELECT * FROM  stock WHERE pro_name LIKE '%".$_POST['searchtxt']."%' OR cat_name LIKE '%".$_POST['searchtxt']."%'";
        }
        $tbl_name="stock";
        $adjacents = 3;
        $query = "SELECT COUNT(*) as NUM FROM $tbl_name";
        if(isset($_POST['Search']) AND trim($_POST['searchtxt'])!="")
        {
            $query = "SELECT COUNT(*) as num FROM  stock WHERE pro_name LIKE '%".$_POST['searchtxt']."%' OR cat_name LIKE '%".$_POST['searchtxt']."%'";
        }
        $total_pages = mysqli_fetch_array (  mysqli_query($db,$query));
        $total_pages = $total_pages[0];
        $targetpage = "rm.php";
        $limit = 10;
        if(isset($_GET['limit']))
            $limit=$_GET['limit'];
			$page = isset($_GET['page']) ? mysql_real_escape_string($db,$_GET['page']) : 0;
			//$page = mysqli_real_escape_string($db,$_GET['page']);
        if($page)
            $start = ($page - 1) * $limit;
        else
            $start = 0;
        $sql = "SELECT * FROM stock LIMIT $start, $limit ";
        if(isset($_POST['Search']) AND trim($_POST['searchtxt'])!="")
        {
            $sql= "SELECT * FROM  stock WHERE pro_name LIKE '%".$_POST['searchtxt']."%' OR cat_name LIKE '%".$_POST['searchtxt']."%' LIMIT $start, $limit";
        }
        $result = mysqli_query($db,$sql);
        if ($page == 0) $page = 1;
        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($total_pages/$limit);
        $lpm1 = $lastpage - 1;
        $pagination = "";
        if($lastpage > 1)
        {
            $pagination .= "<div class=\"pagination\">";
            if ($page > 1)
                $pagination.= "<a href=\"$targetpage?page=$prev&limit=$limit\"> <span class='glyphicon glyphicon-fast-backward' >  </span></a>";
            else
                $pagination.= "<span class=\"disabled\"> <span class='glyphicon glyphicon-fast-backward'> </span></span>";
            if ($lastpage < 7 + ($adjacents * 2))
            {
                for ($counter = 1; $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter&limit=$limit\">$counter</a>";
                }
            }
            elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
            {
                if($page < 1 + ($adjacents * 2))
                {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter&limit=$limit\">$counter</a>";
                    }
                    $pagination.= "...";
                    $pagination.= "<a href=\"$targetpage?page=$lpm1&limit=$limit\">$lpm1</a>";
                    $pagination.= "<a href=\"$targetpage?page=$lastpage&limit=$limit\">$lastpage</a>";
                }
                elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                {
                    $pagination.= "<a href=\"$targetpage?page=1&limit=$limit\">1</a>";
                    $pagination.= "<a href=\"$targetpage?page=2&limit=$limit\">2</a>";
                    $pagination.= "...";
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter&limit=$limit\">$counter</a>";
                    }
                    $pagination.= "...";
                    $pagination.= "<a href=\"$targetpage?page=$lpm1&limit=$limit\">$lpm1</a>";
                    $pagination.= "<a href=\"$targetpage?page=$lastpage&limit=$limit\">$lastpage</a>";
                }
                else
                {
                    $pagination.= "<a href=\"$targetpage?page=1&limit=$limit\">1</a>";
                    $pagination.= "<a href=\"$targetpage?page=2&limit=$limit\">2</a>";
                    $pagination.= "...";
                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage?page=$counter&limit=$limit\">$counter</a>";
                    }
                }
            }
            if ($page < $counter - 1)
                $pagination.= "<a href=\"$targetpage?page=$next&limit=$limit\"><span class='glyphicon glyphicon-fast-forward'></span></a>";
            else
                $pagination.= "<span class=\"disabled\"><span class='glyphicon glyphicon-fast-forward'></span></span>";
            $pagination.= "</div>\n";
        }
        ?>
       
       
                              <form action="" method="post" name="search" class="navbar-form navbar-left">
                                  <div class="form-group">
                                      <input name="searchtxt" type="text" class="form-control" placeholder="Search">
                                  </div>
                                  <button name="Search" class="btn btn-primary dropdown-toggle" type="submit">Search</button>
                              </form>
                                <form class="navbar-form navbar-left" action="" method="get" name="page">
                                Page per Record<input class="form-control" name="limit" type="text"  style="margin-left:5px;" value="<?php if(isset($_GET['limit'])) echo $_GET['limit']; else echo "10"; ?>" size="3" maxlength="3">
 <input class="btn btn-primary dropdown-toggle" name="go" type="submit" value="Go">
    <input class="btn btn-primary dropdown-toggle" type="button" name="selectall" value="SelectAll" onClick="checkAll()"  style="margin-left:5px;"/>
     <input class="btn btn-primary dropdown-toggle" type="button" name="unselectall" value="DeSelectAll" onClick="uncheckAll()" style="margin-left:5px;" />
<input class="btn btn-primary dropdown-toggle" name="dsubmit" type="button" value="Delete Selected" style="margin-left:5px;" onClick="return confirmDeleteSubmit()"/>
                                </form>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    
                       <!-- <form role="form" name="deletefiles" action="delet.php" method="post" >
                            <input name="table" type="hidden" value="stock">
                            <input name="return" type="hidden" value="rm.php">-->
                        
                          <!--  <div>
                                <h1 class="panel-title" align="center">View Customers Details</h1>
                            </div>-->
                           
                                    <form role="form" name="deletefiles" action="delet.php" method="post" >
                                        <input name="table" type="hidden" value="stock">
                                        <input name="return" type="hidden" value="rm.php">
                                                    <div>
                                                        <table class="table-bordered table-hover table-striped" >
                                                            <thead>
                                                            <tr>
                                                            
                                                                <th align="center">Product Name</th>
                                                                <th align="center">Category</th>
                                                                <th align="center">Buying Price</th>
                                                                <th align="center">Selling Price</th>
                                                                 <th align="center">Suplier Name</th>
                                                                  <th align="center">Expiery Date</th>
                                                               
                                                                <th align="center">View/Edit</th>
                                                                <th align="center">Delete</th>
                                                                <th align="center">Select</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            while($row = mysqli_fetch_array($result))
                                                            {
															
                                                                //$mysqlidate=$row['date'];
                                                                //$phpdate = strtotime( $mysqlidate );
                                                                //$phpdate = date("d/m/Y",$phpdate);
                                                                ?>
                                                                <tr>
                                                                    <td align="center"><?php echo $row['pro_name']; ?></td>
                                                                    <td align="center"><?php echo $row['cat_name']; ?></td>
                                                                     <td align="center"><?php echo $row['by_rate']; ?></td>
                                                                      <td align="center"><?php echo $row['sel_rate']; ?></td>
                                                                      <td align="center"><?php echo $row['sup_name']; ?></td>
                                                                      <td align="center"><?php echo $row['Ex_date']; ?></td>
                                                                     
                                                                   
 <td align="center"> <a href="edit.php?cat_id=<?php echo $row['st_id'];?>"><span class=" glyphicon glyphicon-pencil"></span></a></td>
   <td align="center"><a onClick="return confirmSubmit()" href="delete.php?cat_id=<?php echo $row['st_id']; ?>&table=category&return=category.php"><span class="glyphicon glyphicon-trash"></span></a></td>
                                                                    <td align="center" ><input  type="checkbox" value="<?php echo $row['st_id']; ?>" name="checklist[]" /></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                    </div>
                                </div>
                            </div>
                          
                        </form>
                       