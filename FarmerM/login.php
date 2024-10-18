 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login and Signup Form </title>

     <!-- CSS -->
     <link rel="stylesheet" href="css/style-set1.css" />

     <!-- Boxicons CSS -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

 </head>

 <body>
     <section class="container forms">
         <div class="form login">
             <div class="form-content">
                 <header>Add Item</header>
                 <?php session_start();
                    echo isset($_SESSION['loginerror']) ? $_SESSION['loginerror'] : "" ?>
                 <form action="auth.php" method="post">
                     <div class="field input-field">
                         <input type="fa_id" placeholder="ID" class="input" name="fa_id" required />
                     </div>
                     <div class="field input-field">
                         <input type="f_name" placeholder="Name" class="input" name="f_name" required />
                     </div>
                     <div class="field input-field">
                         <input type="address" placeholder="Address" class="input" name="address" required />
                     </div>

                     <div class="field input-field">
                         <input type="itemname" placeholder="Name of the Item" class="input" name="itemname" required />
                     </div>

                     <div class="field input-field">
                         <input type="quantity" placeholder="Quantity in KG" class="input" name="quantity" required />

                     </div>

                     <div class="field button-field">
                         <button name='submit'>Buy Now</button>
                     </div>
                 </form>

                 <div class="form-link">
                     <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                 </div>
             </div>
         </div>

         <!-- Signup Form -->

         <div class="form signup">
             <div class="form-content">
                 <header>Add Item</header>

                 <form action="auth-login.php" method="post">
                     <div class="field input-field">
                         <input type="text" placeholder="Id" class="password" name="fa_id" required />
                     </div>

                     <div class="field input-field">
                         <input type="text" placeholder="Name" class="input" name="name" required />
                     </div>

                     <div class="form-link">
                         <a href="#" class="forgot-pass">Forgot password?</a>
                     </div>

                     <div class="field button-field">
                         <button>Login</button>
                     </div>
                 </form>

                 <div class="form-link">
                     <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                 </div>
             </div>
         </div>

     </section>
     <script>
         const forms = document.querySelector(".forms"),
             pwShowHide = document.querySelectorAll(".eye-icon"),
             links = document.querySelectorAll(".link");

         pwShowHide.forEach(eyeIcon => {
             eyeIcon.addEventListener("click", () => {
                 let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

                 pwFields.forEach(password => {
                     if (password.type === "password") {
                         password.type = "text";
                         eyeIcon.classList.replace("bx-show", "bx-hide");
                         return;
                     }
                     password.type = "password";
                     eyeIcon.classList.replace("bx-hide", "bx-show");
                 })

             })
         })

         links.forEach(link => {
             link.addEventListener("click", e => {
                 e.preventDefault(); //preventing form submit
                 forms.classList.toggle("show-signup");
             })
         })
     </script>