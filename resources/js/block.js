(function (window, document) {

    let tweets = Array.prototype.slice.call(
        document.querySelectorAll('.block--recent_tweets_block .tweet__content')
    );

    tweets.forEach(function (tweet) {

        tweet.addEventListener('click', function (event) {
            if (event.target.tagName.toLowerCase() !== 'a') {

                window.open('http://twitter.com/' + tweet.dataset.username + '/statuses/' + tweet.dataset.status);

                return false;
            }
        });
    });

})(window, document);
