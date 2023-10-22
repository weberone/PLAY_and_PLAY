<form class="text-center">
  <div class="mb-6">
    <label for="text" class="label-style">Username</label>
    <input type="text" id="text" class="input-style" placeholder="Username" required>
  </div>
  <div class="mb-6">
    <label for="email" class="label-style">Email</label>
    <input type="email" id="email" class="input-style" placeholder="email@email.com" required>
  </div>
  <div class="mb-6">
    <label for="password" class="label-style">Password</label>
    <input type="password" id="password" class="input-style" required>
  </div>
  <p class="my-5">or</p>
  <!-- valutare utilizzo di plugin esterno per social connect -->
  <div class="mb-5"><a href=""><img src="img/login-fb.png" alt=""></a></div>
  <div class="mb-5"><a href=""><img src="img/login-google.png" alt=""></a></div>
  <div class=" my-10">
    <input id="accept" type="checkbox" value="" class="checkbox-style" required>
    <label for="accept" class="ml-2 text-gray-900 ">Accept <a class="link" href="#">Terms and Conditions</a>, <a
        class="link" href="#">Privacy Policy</a> & <a class="link" href="#">Cookies Policy</a></label>
  </div>
  <button type="submit" class="btn">register</button>
</form>