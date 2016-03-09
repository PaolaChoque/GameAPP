$(".selector").gantt({
	source: "ajax/data.json",
	scale: "weeks",
	minScale: "weeks",
	maxScale: "months",
	onItemClick: function(data) {
		alert("Item clicked - show some details");
	},
	onAddClick: function(dt, rowId) {
		alert("Empty space clicked - add an item!");
	},
	onRender: function() {
		console.log("chart rendered");
	}
});

source: [{
	name: "Example",
	desc: "Lorem ipsum dolor sit amet.",
	values: [ ... ]
}]



values: [{
	to: "/Date(1328832000000)/",
	from: "/Date(1333411200000)/",
	desc: "Something",
	label: "Example Value",
	customClass: "ganttRed",
	dataObj: foo.bar[i]
}]