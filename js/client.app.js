(function(){
    'use strict';
    console.log("Hello world from app.js")
    
    //Your Code Here!
    var app = angular.module('app',[]);
    
    app.controller("ClientController", function($http) {
        var self = this;
        self.data = [];
        self.slaData = [];
        self.siteData = [];
        self.showSite = false;

        self.cid = 0;
        
        self.newSlaNote = {
            clientId: 0,
            name: '',
            note: ''
        };
        
        self.selectCid = function(setCid) {
            self.cid = setCid;
            $http.get('api/client/one.php?clientId=' + self.cid)
            .then(
            function successCallback(response) {
                console.log("It worked!", response.data);
                self.data = response.data;
            },
            function errorCallback(err) {
                console.log("ERROR", err);
            }
            )
            $http.get('api/slaNote/byClient.php?clientId=' + self.cid)
            .then(
            function successCallback(response) {
                console.log("It worked!", response.data);
                self.slaData = response.data;
            },
            function errorCallback(err) {
                console.log("ERROR", err);
            }
            )
            $http.get('api/site/byClient.php?clientId=' + self.cid)
            .then(
            function successCallback(response) {
                console.log("It worked!", response.data);
                self.siteData = response.data;
                if (self.siteData.length > 0) {
                    self.showSite = true;
                }
                else {
                    self.showSite = false;
                }
            },
            function errorCallback(err) {
                console.log("ERROR", err);
            }
            )
            console.log(self.cid);
            self.newSlaNote.clientId = self.cid;
        }
        
        self.isCid = function(checkCid) {
            return self.cid === checkCid;
        }
        
        self.tab = 1;
        
        self.selectTab = function(setTab) {
            this.tab = setTab;
        };
        
        self.addSlaNote = function() {
            console.log("Adding SLA Note");
            
            self.slaData.push(self.newSlaNote);
            
            self.newSlaNote = {
                clientId: '',
                name: '',
                note: ''
            };
        }
        
        self.show = function() {
            if (self.showSite) {
                return true;
            }
            else {
                return false;
            }
        }
    });
    
})();
