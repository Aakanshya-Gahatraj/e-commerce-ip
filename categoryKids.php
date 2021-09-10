<?php require("categoryOutline.php");?>
<?php include "productsCard.php";


            $result=$con->query("SELECT * FROM product WHERE category_id=3") or die($con->error);
            $solutions = array();
            
            while($row =$result->fetch_assoc()) {
            $solutions[] = $row;
            }
            ?>

            <?php
            $i=0;
            while($solutions[$i] !=NULL) { 
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="item">
                <?php
                echo card($solutions[$i]);
                ?>
                </div>
            </div>
            <?php
            $i++;
            }
            ?>


                    </div> <!-- /.row -->
                </div>
                <!-- /.category-product -->
            </div>
            <!-- /.tab-pane -->

            
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.search-result-container -->
        
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
</div>

<?php require("footer.php");?>
</body>
</html>
