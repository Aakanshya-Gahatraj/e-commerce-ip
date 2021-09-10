<?php
require("categoryOutline.php");
require("productsCard.php");
require("form_process.php");

$solutions=$_SESSION['searched'];
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
