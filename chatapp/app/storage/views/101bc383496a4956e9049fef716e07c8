        <script src="https://js.pusher.com/3.0/pusher.min.js"></script>

        <script>

        // Enable pusher logging - don't include this in production
        Pusher.log = function(message) {
          if (window.console && window.console.log) {
            window.console.log(message);
          }
        };

        var pusher = new Pusher('18a59117b485e03c52c4', {
          encrypted: true
        });

        var channel = pusher.subscribe($('#channel-name').text());

        channel.bind('message', function(data) {
          updateChat(data.user,data.message,data.status);
        });

        channel.bind('topic-update', function(status) {
             $('#topic').fadeOut(200).load(document.URL+' #topic').fadeIn(200);
        });

        channel.bind('channels-update', function(status) {
             $('#channels').fadeOut(200).load(document.URL+' #channels').fadeIn(200);
        });


      </script>