var newFeed = document.getElementById("newFeed");
var feed = document.getElementById("feed");
var showFeed = document.getElementById("showFeed");

function openForm() {
	newFeed.style.display = "block";
	feed.style.visibility = "hidden";
}

function closeForm() {
	newFeed.style.display = "none";
}

function showFeedId() {
	feed.style.display = "none";
	showFeed.style.display = "block";
}

function closeShowFeed() {
	showFeed.style.display = "none";
	feed.style.display = "block";
}