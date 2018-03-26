<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" >
                <li class="active"><a href="#featured" data-toggle="tab">featured</a></li>
                <li><a href="#new-arrivals" data-toggle="tab">new arrivals</a></li>
                <li><a href="#top-sales" data-toggle="tab">top sales</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <div class="product-grid-holder">
                        
                        
                        <?php include 'featured.php'; ?>
                        
                        
                    </div>
<!--                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div> -->

                </div>
                <div class="tab-pane" id="new-arrivals">
                    <div class="product-grid-holder">
                        
                        
                        
                        
                        
                        <?php include 'new.php'; ?>

                        

                    </div>
<!--                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div> -->

                </div>

                <div class="tab-pane" id="top-sales">
                    <div class="product-grid-holder">

                        
                        
                        
                        <?php include 'top.php'; ?>
                        
                        
                        

                    </div>
<!--                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>