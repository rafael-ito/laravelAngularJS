angular.module('app.controllers').controller('ProjectNoteShowController', ['$scope', '$routeParams', 'ProjectNote', function ($scope, $routeParams, ProjectNote) {
	$scope.projectNotes = ProjectNote.query({
		id: $routeParams.id, 
		idNote: $routeParams.idNote
	});
}]);