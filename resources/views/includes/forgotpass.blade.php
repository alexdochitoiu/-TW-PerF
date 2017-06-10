<!-- Modal -->
<div id="modalResetPass" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 450px;">
        <form method="POST" action="/trimite_parola">
        {{csrf_field()}}
        <!-- Modal content-->
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Am uitat parola</h3>
            </div>
            <div class="modal-body bg-style">
                <form class="form-horizontal" method="post" action="#">
                    <div class="form-group">
                    <h5 class="forgotPassInfo">Introdu adresa de e-mail pentru trimiterea parolei contului.</h5>
                    </div>
                    <div class="form-group">
                            <div class="input-group" style="margin: 5px 20px;">
                                <span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
                                <input type="email" required class="form-control" name="email" placeholder="Email">
                            </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="submit" class="btn bg-green-color" style="width: 200px">
                    Trimite
                </button>
            </div>
        </div>
        </form>
    </div>
</div>

