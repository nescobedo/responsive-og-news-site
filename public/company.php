
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shale Experts Research Sections</title>

    <!--Begin Head-->
    <?php include("resources/inc/head.php"); ?>
    <!--End Head-->

  </head>

  <body class="body-wrap">

  <!--Begin Header-->
    <?php include("resources/inc/header.php"); ?>
    <?php include("resources/inc/nav.php"); ?>
  <!--End Header-->

  <!--Begin Content-->

<!--   <div class="section-block">
    <div class="container">
    <div class="overlay"></div>
      <div class="col-sm-12">
          <h1>Company</h1>
      </div>
    </div>
  </div> -->

  <div id="Company" class="content pg-padding">
    <div class="container">

        <div class="row">
          <div class="col-sm-12">

                <div class="co-stock">NYSE: APC</div>
                <h2 class="company-header">EOG Resources, Inc.</h2>

                  <!-- Nav tabs -->
                  <ul id="co-tabs" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a></li>
                    <li role="presentation"><a href="#active-rigs" aria-controls="active-rigs" role="tab" data-toggle="tab">Active Rigs</a></li>
                    <li role="presentation"><a href="#permitted-wells" aria-controls="permitted-wells" role="tab" data-toggle="tab">Permitted Wells</a></li>
                    <li role="presentation"><a href="#assets-operations" aria-controls="assets-operations" role="tab" data-toggle="tab">Assets/Operations</a></li>
                    <li role="presentation"><a href="#capex-2015" aria-controls="capex-2015" role="tab" data-toggle="tab">Capex 2015</a></li>
                    <li role="presentation"><a href="#transactions" aria-controls="transactions" role="tab" data-toggle="tab">Transactions</a></li>
                    <li role="presentation"><a href="#ep-news" aria-controls="ep-news" role="tab" data-toggle="tab">EP News</a></li>
                    <li role="presentation"><a href="#all-news" aria-controls="all-news" role="tab" data-toggle="tab">All News</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="overview">
                      <?php include("resources/inc/co-overview.php"); ?>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="contact">
                      <?php include("resources/inc/co-contact.php"); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="active-rigs">
                      <?php include("resources/inc/co-active-rigs.php"); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="permitted-wells">
                      <?php include("resources/inc/co-permitted-wells.php"); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="assets-operations">
                      <?php include("resources/inc/co-assets-operations.php"); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="capex-2015">
                      <?php include("resources/inc/co-capex-2015.php"); ?>
                      </div>
                    <div role="tabpanel" class="tab-pane" id="transactions">
                      <?php include("resources/inc/co-transactions.php"); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ep-news">
                      <?php include("resources/inc/co-ep-news.php"); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="all-news">
                      <?php include("resources/inc/co-all-news.php"); ?>
                    </div>
                  </div>
                  <!-- End Tab panes -->

          </div>
        </div>





    </div> <!-- /.container -->
  </div> <!-- /#Research -->

  <!--End Content-->


  <!--Begin Footer-->
  <?php include("resources/inc/footer.php"); ?>
  <!--End Footer-->

  <!--Begin Foot-->
  <?php include("resources/inc/foot.php"); ?>
  <!--End Foot-->

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#co-tabs').tab();
    });
</script>


  </body>
</html>
