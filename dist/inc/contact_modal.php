<!-- Contact Modal Form -->
<div class="ui">
  <form method="post" action="script/mail.php" class="ui modal form">
    <!-- <i class="close icon"></i> -->
    <div class="header">
      I Want to Hire You
    </div>

    <div class="ui stackable grid basic segment container">
      <div class="two column row">
        <div class="column">
          <div class="field">
            <div class="ui left icon input">
              <input type="text" name="contact[name]" placeholder="Name">
              <i class="user icon"></i>
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <input type="text" name="contact[email]" placeholder="Email Address">
              <i class="mail icon"></i>
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <input type="text" name="contact[phone]" placeholder="Phone Number">
              <i class="call icon"></i>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="field">
            <div class="message">
              <div class="ui left icon input">
                <textarea type="text" name="contact[message]" placeholder="Message" rows="2"></textarea>
                <i class="keyboard icon"></i>
              </div>
            </div>
          </div>
          <div class="ui grid basic segment container">
            <div class="g-recaptcha" data-sitekey="6LcJtQoTAAAAAHRxLuxE2ONF8svs7vicaY4ZstTw" style="margin:0 auto"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div id="contact_sending_message" class="ui info message">
            <i class="spinner loading icon"></i> Attempting to Send Message.
          </div>
          <div id="contact_error_message" class="ui error message"></div>
          <div id="contact_success_message" class="ui positive message"></div>
        </div>
      </div>
    </div>

    <div class="actions">
      <div class="ui black deny button">
        Close
      </div>
      <button type="submit" name="submit" class="ui positive right labeled icon blue submit button">
        Send Message
        <i class="send icon"></i>
      </button>
    </div>
  </form> <!-- End ui modal form-->
</div>
