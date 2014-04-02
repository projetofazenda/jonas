//based on prototype's ajax class
//to be used with prototype.lite, moofx.mad4milk.net.
 
ajax = Class.create();
ajax.event = ['Uninitialized', 'Loading', 'Loaded', 'Interactive', 'Complete'];
function emptyFunction() {}
ajax.prototype = {
    initialize: function(url, options){
        this.transport = this.getTransport();
        this.options = options;
        this.postBody = options.postBody || '';
        this.method = options.method || 'post';
        this.update = $(options.update) || null;
        this.request(url);
    },
 
    request: function(url){
        this.transport.open(this.method, url, true);
        this.transport.onreadystatechange = this.onStateChange.bind(this);
        if (this.method == 'post') {
            this.transport.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            if (this.transport.overrideMimeType) this.transport.setRequestHeader('Connection', 'close');
        }
        this.transport.send(this.postBody);
    },
 
    onStateChange: function(){
        var event = ajax.event[this.transport.readyState];
        if (event == 'Complete') {
            setTimeout(function(){(this.options['on' + this.transport.status] || emptyFunction)(this.transport);}.bind(this), 10);
            if (this.transport.status == 200 && this.update)
                setTimeout(function(){this.update.innerHTML = this.transport.responseText;}.bind(this), 10);
        }
        setTimeout(function(){(this.options['on' + event] || emptyFunction)(this.transport);}.bind(this), 10);
        
        if (event == 'Complete')
            this.transport.onreadystatechange = function(){};
    },
 
    getTransport: function() {
        if (window.ActiveXObject) return new ActiveXObject('Microsoft.XMLHTTP');
        else if (window.XMLHttpRequest) return new XMLHttpRequest();
        else return false;
    }
};