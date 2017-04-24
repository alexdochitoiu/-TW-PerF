<!-- Modal -->
<div id="modalSendMsg" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Trimite mesaj privat vanzatorului</h3>
            </div>
            <div class="modal-body bg-style">
                <form class="form-horizontal" method="post" action="#">
                    <div class="form-group">

                        <label for="name" class="col-sm-2 control-label">Nume</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mesaj</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-green-color">
                    <img src="images/message.png" width="25" alt=""/>
                    Trimite mesaj
                </button>
            </div>
        </div>

    </div>
</div>

