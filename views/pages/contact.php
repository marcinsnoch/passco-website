<h2>Kontakt</h2><hr>
<form action="<?php echo base_url('kontakt'); ?>" method="post">
    <div class="well well-xs">
        <div class="form-group">
            <label for="contact_name">Imię i nazwisko (wymagane)</label><br>
            <input type="text" name="contact_name" class="form-control" id="contact_name">
        </div>
        <div class="form-group">
            <label for="email_address">Email (wymagane)</label><br>
            <input type="email" name="email_address" class="form-control" id="email_address">
        </div>
        <div class="form-group">
            <label for="message">Wiadomiść</label><br>
            <textarea name="message" rows="3" class="form-control" id="message"></textarea>
        </div>
        <p><button type="submit" name="sendmessage" value="true" class="btn btn-primary">Wyślij</button></p>
    </div>
</form>