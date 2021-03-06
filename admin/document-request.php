<?php
    $title = 'Document Request';
    require_once('../connection.php');
    include('../includes/header.php');
    include('../models/functions.php');
    if (!isset($_SESSION['username']) || $_SESSION['is_admin'] != '1'){
        header("location: ../index.php");
    }
?>
<div class="wrapper">

    <?php include('../includes/admin_subheader.php') ?>
    <?php include('../includes/admin_sidebar.php') ?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Document Request
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Document Request</li>
      </ol>
    </section>

    <!-- Main content -->
    <div class="box-body">
      <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Application Letter</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Monthly Report</a></li>
                <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">DTR</a></li>
                <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Final Evaluation</a></li>
                <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Others</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <table id="step1" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $results = getDocumentRequest($conn);

                        foreach($results as $result){
                            $file = "../assets/uploads/student_requirements/".$result['name'];
                            if($result['document_type'] == 'Application Letter'){
                        ?>
                        <tr>
                            <td><?php echo $result['firstname']. ' ' .$result['lastname']; ?></td>
                            <td>
                                <a href="<?php echo $file; ?>" target='_new'>
                                <button class="btn btn-primary btn-xs" title="Preview"><i class="fa fa-eye"></i></button>
                                </a>
                                <a href="../models/approveDocument.php?id=<?php echo $result['id']; ?>">
                                <button class="btn btn-success btn-xs" title="Approve"><i class="fa fa-thumbs-o-up"></i></button>
                                </a>
                                <button class="btn btn-danger btn-xs" title="Reject" onclick="rejectDocument(<?php echo $result['id']; ?>)"><i class="fa fa-thumbs-o-down"></i></button>
                            </td>
                        </tr>
                        <?php }
                        }?>
                        </tbody>
                        </tfoot>
                    </table>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <table id="step2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                         <?php
                         foreach($results as $result){
                             $file = "../assets/uploads/student_requirements/".$result['name'];
                             if($result['document_type'] == 'Monthly Report'){
                        ?>
                            <tr>
                                <td><?php echo $result['firstname']. ' ' .$result['lastname']; ?></td>
                                <td>
                                    <a href="<?php echo $file; ?>" target='_new'>
                                    <button class="btn btn-primary btn-xs" title="Preview"><i class="fa fa-eye"></i></button>
                                    </a>
                                    <a href="../models/approveDocument.php?id=<?php echo $result['id']; ?>">
                                    <button class="btn btn-success btn-xs" title="Approve"><i class="fa fa-thumbs-o-up"></i></button>
                                    </a>
                                    <button class="btn btn-danger btn-xs" title="Reject" onclick="rejectDocument(<?php echo $result['id']; ?>)"><i class="fa fa-thumbs-o-down"></i></button>
                                </td>
                            </tr>
                        <?php }
                        }?>
                        </tbody>
                        <tbody>

                        </tfoot>
                    </table>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <table id="step3" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($results as $result){
                            $file = "../assets/uploads/student_requirements/".$result['name'];
                            if($result['document_type'] == 'DTR'){
                                ?>
                        <tr>
                            <td><?php echo $result['firstname']. ' ' .$result['lastname']; ?></td>
                            <td>
                                <a href="<?php echo $file; ?>" target='_new'>
                                    <button class="btn btn-primary btn-xs" title="Preview"><i class="fa fa-eye"></i></button>
                                </a>
                                <a href="../models/approveDocument.php?id=<?php echo $result['id']; ?>">
                                <button class="btn btn-success btn-xs" title="Approve"><i class="fa fa-thumbs-o-up"></i></button>
                                </a>
                                <button class="btn btn-danger btn-xs" title="Reject" onclick="rejectDocument(<?php echo $result['id']; ?>)"><i class="fa fa-thumbs-o-down"></i></button>
                            </td>
                        </tr>
                        <?php }
                        }?>
                        </tbody>
                        </tfoot>
                    </table>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_4">
                    <table id="step4" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach($results as $result){
                              $file = "../assets/uploads/student_requirements/".$result['name'];
                              if($result['document_type'] == 'Final Evaluation'){
                        ?>
                                <tr>
                                    <td><?php echo $result['firstname']. ' ' .$result['lastname']; ?></td>
                                    <td>
                                        <a href="<?php echo $file; ?>" target='_new'>
                                            <button class="btn btn-primary btn-xs" title="Preview"><i class="fa fa-eye"></i></button>
                                        </a>
                                        <a href="../models/approveDocument.php?id=<?php echo $result['id']; ?>">
                                        <button class="btn btn-success btn-xs" title="Approve"><i class="fa fa-thumbs-o-up"></i></button>
                                        </a>
                                       <button class="btn btn-danger btn-xs" title="Reject" onclick="rejectDocument(<?php echo $result['id']; ?>)"><i class="fa fa-thumbs-o-down"></i></button></a>
                                    </td>
                                </tr>
                            <?php }
                        }?>
                        </tbody>
                        </tfoot>
                    </table>
                </div>
                <div class="tab-pane" id="tab_5">
                    <table id="step4" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($results as $result){
                            $file = "../assets/uploads/student_requirements/".$result['name'];
                            if($result['document_type'] != 'Final Evaluation' && $result['document_type'] != 'DTR' && $result['document_type'] != 'Monthly Report' && $result['document_type'] != 'Application Letter' ){
                                ?>
                                <tr>
                                    <td><?php echo $result['firstname']. ' ' .$result['lastname']; ?></td>
                                    <td>
                                        <a href="<?php echo $file; ?>" target='_new'>
                                            <button class="btn btn-primary btn-xs" title="Preview"><i class="fa fa-eye"></i></button>
                                        </a>
                                        <a href="../models/approveDocument.php?id=<?php echo $result['id']; ?>">
                                        <button class="btn btn-success btn-xs" title="Approve"><i class="fa fa-thumbs-o-up"></i></button>
                                        </a>
                                        <button class="btn btn-danger btn-xs" title="Reject" onclick="rejectDocument(<?php echo $result['id']; ?>)"><i class="fa fa-thumbs-o-down"></i></button></a>
                                    </td>
                                </tr>
                            <?php }
                        }?>
                        </tbody>
                        </tfoot>
                    </table>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    </div>
    <!-- /.content -->
  </div>
  <script>
    function load_dataTable() 
    {
        $('.table').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        });
    }
    function rejectDocument(id)
    {
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
                type : "DELETE",
                url : "../models/rejectDocument.php?id="+id,
                data : {id : id},
                success: function(){
                    location.reload();
                }
            });
        }
        return false;
    }
  </script>
<?php include('../includes/footer.php')?>