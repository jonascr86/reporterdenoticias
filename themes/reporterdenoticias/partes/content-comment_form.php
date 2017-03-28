<!-- comments form -->
<div class="comments-form col-sm-12">
    <div class="section-title">
        <h3> <span class="cat-icon"><i class="fa fa-commenting"></i></span>Deixe um comentário</h3>
    </div>
    <div class="contact-form leave-message">
        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required="required">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group input-textarea">
                <textarea name="message" rows="5" class="form-control" placeholder="Message" required="required"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar comentário</button>
        </form>
    </div>
</div> <!-- //comments form -->