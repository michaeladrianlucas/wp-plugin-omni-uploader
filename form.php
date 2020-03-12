<section id="contact-form-section">
  <div class="form-reveal-wrap">
    <div class="envelope-wrap">
          <div class="envelope-wrap-text">CONTACT US</div>
          <svg class="mail-icon" viewBox="0 0 24 24">
      <path fill="currentColor" d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z" />
  </svg>
    </div>

       <p class="contact-subtitle">Please send us a message </p>

        <form name="form" method="post"
                  enctype="multipart/form-data"  id="contact-form" class="form-reveal">
          <div class="file-uploader">

            <div class="file-uploader__message-area">
             <p>Select a file to upload</p>
              </div>
                  <div class="file-chooser">
                    <input class="file-chooser__input" type="file">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="name">Name: </label>
                        <input placeholder="Name" type="text" name="userName" class="form-control" id="name" data-rule="required|name" />
                     </div>
                     <div class="form-group">
                       <label for="email">Email: </label>
                        <input placeholder="Email" type="text" name="userEmail" class="form-control" id="email" data-rule="required|email"/>
                         </div>
                     <div class="form-group">
                       <label for="message">Message: </label>
                          <textarea placeholder="How can we help you?" type="text" name="message" id="message" class="form-control" data-rule="required"></textarea>
                    </div>
                  <div class="form-group">
               <input type="button" class="btn button-primary" id="contact-button" value="Send"/>
            </div>

            </form>
           </div>
       </section>
