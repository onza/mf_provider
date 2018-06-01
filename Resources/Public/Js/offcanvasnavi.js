/**
 * @Author: Martin Farkas
 * @Date:   2017-04-27
 * @Copyright: none (public domain)
 */

jQuery(document).ready(function($) {
  "use strict";
  $(".toggle").click(function() {
    $(".offset").toggleClass("show");
  });
  $(".offset ul li a").click(function() {
    $(".offset").removeClass("show");
  });
});
