var templateUrl = object_name.templateUrl;


particlesJS.load('particles-js', templateUrl+'/particlesjs-config.json', function () {
    console.log('callback - particles.js config loaded');
  });

  $( document ).ready(function() {
    
  $('.button-collapse').sideNav({
    menuWidth: 300, // Default is 300
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true // Choose whether you can drag to open on touch screens,
  }
);
});