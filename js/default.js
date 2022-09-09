/**
 * @file A simple javascript library for working with default css framework and also work use as a simple library
 * @author MD ABDULLAH AL LOMAN <apple.cse.brur@gmail.com>
 * @version 1.0.0
 * @see
 */
(function() {
  if (typeof app === "undefined") {
    window.app = libDefine();
    window.onload = function() {
      app.init();
    };
  }
  /**
   * Defining the library
   * @function
   */
  function libDefine() {
    var dropdowns = [];
    var radios = [];
    var app = {};
    /**
     * Remove class from the provided element
     * @function
     * @param {object} htmlElement HTML Element
     * @param {string} name class name which which have to find
     * @return {number} 0 if not found and 1 if found
     */
    app.hasClass = function(htmlElement, name) {
      if (htmlElement == null || htmlElement == undefined) return false;
      if (htmlElement.className != null) {
        var arr = htmlElement.className.split(" ");
        for (var i = 0; i < arr.length; i++) {
          if (arr[i] === name) return true;
        }
        return false;
      }
      return false;
    };
    /**
     * Add class to the provided element
     * @function
     * @param {object} htmlElement HTML Element
     * @param {string} name Class name which is to be add
     */
    app.addClass = function(htmlElement, name) {
      if (!app.hasClass(htmlElement, name)) {
        htmlElement.className += " " + name;
      }
    };
    /**
     * Remove class to the provided element
     * @function
     * @param {object} htmlElement HTML Element
     * @param {string} name class name which would be remove
     */
    app.removeClass = function(htmlElement, name) {
      if (htmlElement.className != null) {
        htmlElement.className = htmlElement.className.replace(" " + name, "");
      }
    };
    /**
     * Toggle the class name to the provided element
     * @function
     * @param {object} htmlElement HTML Element
     * @param {string} removeName Class name which will be removed
     * @param {string} replaceName Class name which will replace the remove name
     */
    app.toggleClass = function(htmlElement, removeName, replaceName) {
      if (htmlElement.className != null) {
        htmlElement.className = htmlElement.className.replace(
          removeName,
          replaceName
        );
      }
    };

    /**
     * To add any specific event on
     * @function
     * @param {string} eventName Event name lick 'click','hover','mouseMove' etc
     * @param {object} htmlElement HTML Element
     * @param {function} returnFunction  Function which will be return
     * @example
     * app.addEvent('click',document.getElementbyId('button'),function(){Code Here});
     */
    app.addEvent = function(eventName, htmlElement, returnFunction) {
      if (htmlElement != null) {
        if (htmlElement.addEventListener) {
          htmlElement.addEventListener(eventName, returnFunction, false);
        } else if (htmlElement.attachEvent) {
          htmlElement.attachEvent("on" + eventName, returnFunction);
        }
      }
    };

    /**
     * Find Parent Using Class Name
     * @function
     * @param {object} htmlElement Child HTML Element
     * @param {string} name Parent Class Name
     * @return {Array} Return an array that contains isParentFound and ParentElement.
     */
    app.findParent = function(htmlElement, name) {
      if (htmlElement != null && name != null) {
        if (app.hasClass(htmlElement, name)) return htmlElement;
        var al = htmlElement.parentElement;
        var i = 0;
        while (1) {
          if (al.tagName == "html" || al.tagName == "HTML") return false;
          if (app.hasClass(al, name)) return al;
          if (i == 5) break;
          i++;
          al = al.parentElement;
        }
        return false;
      }
      return false;
    };

    /**
     * Initialization function Calling when script run first time
     * @function
     */
    app.init = function() {
      if (/(MSIE\ [0-7]\.\d+)/.test(navigator.userAgent)) {
        app.addClass(document.getElementsByTagName("body")[0], "ie7");
      }
      // console.time('start');
      // console.timeEnd('start');

      var items = body.getElementsByTagName("*");
      var z = 0;
      var zz = 0;
      for (var i = 0, len = items.length; i < len; i++) {
        if (
          items[i].getAttribute("href") == "" ||
          items[i].getAttribute("href") == "#"
        )
          items[i].href = "javascript:";
        if (
          app.hasClass(items[i], "form") &&
          items[i].getAttribute("data-validate") == "true"
        )
          app.validate(items[i]);
        if (app.hasClass(items[i], "switch")) {
          if (app.hasClass(items[i], "switch-off")) {
            if (items[i].getAttribute("data-name") != null)
              items[i].innerHTML =
                "OFF <input type='hidden' name='" +
                items[i].getAttribute("data-name") +
                "' value='false'>";
            else items[i].innerHTML = "OFF";
          } else if (app.hasClass(items[i], "switch-on")) {
            if (items[i].getAttribute("data-name") != null)
              items[i].innerHTML =
                "ON <input type='hidden' name='" +
                items[i].getAttribute("data-name") +
                "' value='true'>";
            else items[i].innerHTML = "ON";
          } else {
            app.addClass(items[i], "switch-off");
            if (items[i].getAttribute("data-name") != null)
              items[i].innerHTML =
                "OFF <input type='hidden' name='" +
                items[i].getAttribute("data-name") +
                "' value='false'>";
            else items[i].innerHTML = "OFF";
          }
        }
        if (app.hasClass(items[i], "dropdown")) {
          dropdowns[z++] = items[i];
        }
        if (app.hasClass(items[i], "radio")) {
          if (/(MSIE\ [0-8]\.\d+)/.test(navigator.userAgent)) {
            app.removeClass(items[i], "radio");
          } else radios[zz++] = items[i];
        }
        if (app.hasClass(items[i], "slider")) {
          app.slider(items[i], 10);
        }
        if (app.hasClass(items[i], "carousel")) {
          app.carousel(items[i]);
        }
      }
      app.addEvent("click", body, function(e) {
        var target = e.target || e.srcElement;
        //console.log(dropdowns);
        // var dataName = target.getAttribute("data-name");

        if (app.hasClass(target, "checkbox") == 1) {
          if (app.hasClass(target, "checked") == 1) {
            app.removeClass(target, "checked");
            target.checked = false;
            //console.log(target.checked);
          } else if (!app.hasClass(target, "checked")) {
            app.addClass(target, "checked");
            target.checked = true;
            // console.log(target.checked);
          }
        } else if (app.hasClass(target, "radio")) {
          if (!app.hasClass(target, "checked")) {
            var name = target.name;
            for (var i = 0; i < radios.length; i++) {
              if (radios[i].getAttribute("name") == name) {
                app.removeClass(radios[i], "checked");
                radios[i].checked = false;
              }
            }
            app.addClass(target, "checked");
            target.checked = true;
          }
        } else if (app.hasClass(target, "switch-off")) {
          var dataName = target.getAttribute("data-name");
          app.removeClass(target, "switch-off");
          app.addClass(target, "switch-on");
          if (dataName != null)
            target.innerHTML =
              "ON <input type='hidden' name='" + dataName + "' value='true'>";
          else target.innerHTML = "ON";
        } else if (app.hasClass(target, "switch-on")) {
          var dataName = target.getAttribute("data-name");
          app.removeClass(target, "switch-on");
          app.addClass(target, "switch-off");
          if (dataName != null)
            target.innerHTML =
              "OFF <input type='hidden' name='" + dataName + "' value='false'>";
          else target.innerHTML = "OFF";
        }
        if (
          app.hasClass(target, "btn") &&
          !app.hasClass(target, "active") &&
          app.findParent(target, "group-btn")
        ) {
          var parent = app.findParent(target, "group-btn");
          var childs = parent.getElementsByTagName("*");
          for (var i = 0; i < childs.length; i++) {
            if (app.hasClass(childs[i], "active")) {
              app.removeClass(childs[i], "active");
            }
          }
          app.addClass(target, "active");
        }
        // Ok
        if (
          app.hasClass(target, "modal-close") ||
          app.hasClass(target, "modal-cancel") ||
          app.hasClass(target, "alert-close")
        ) {
          if (app.findParent(target, "modal"))
            app.toggleClass(app.findParent(target, "modal"), "show", "hide");
          else if (app.findParent(target, "alert"))
            app.toggleClass(app.findParent(target, "alert"), "show", "hide");
        }

        // Ok

        if (app.hasClass(target, "tab")) {
          if (app.hasClass(target, "active")) return false;
          var link = target.getAttribute("data-href");
          if (link == undefined)
            link = "#" + target.getAttribute("href").split("#")[1];
          var pp = app.findParent(target, "tabs");
          if (pp) {
            var all = pp.getElementsByTagName("*");
            for (var i = 0; i < all.length; i++) {
              if (app.hasClass(all[i], "tab"))
                app.removeClass(all[i], "active");
              if (
                app.hasClass(all[i], "tab-item") &&
                app.hasClass(all[i], "show")
              )
                app.removeClass(all[i], "show");
              if (app.hasClass(all[i], "tab-item") && all[i].id == link)
                app.addClass(all[i], "show");
            }
          }
          app.addClass(target, "active");
        }
        if (app.findParent(target, "accordion-head")) {
          var acrHead = app.findParent(target, "accordion-head");
          var acrItem = app.findParent(acrHead, "accordion-item");
          var acrMain = app.findParent(acrHead, "accordion");
          if (acrMain && app.hasClass(acrMain, "multiple")) {
            if (acrItem && app.hasClass(acrItem, "collapse"))
              app.removeClass(acrItem, "collapse");
            else app.addClass(acrItem, "collapse");
          } else if (acrMain) {
            var childs = acrMain.getElementsByTagName("*");
            for (var i = 0; i < childs.length; i++) {
              if (app.hasClass(childs[i], "collpase"))
                app.removeClass(childs[i], "collapse");
            }
            app.addClass(acrItem, "collapse");
          }
        }

        // Ok
        if (app.findParent(target, "navbar-icon")) {
          var navbar = app.findParent(target, "navbar");
          if (navbar) {
            var childs = navbar.getElementsByTagName("*");
            for (var i = 0; i < childs.length; i++) {
              if (
                app.hasClass(childs[i], "navbar-menu") &&
                app.hasClass(childs[i], "show")
              )
                app.toggleClass(childs[i], "show", "hide");
              else if (
                app.hasClass(childs[i], "navbar-menu") &&
                app.hasClass(childs[i], "hide")
              )
                app.toggleClass(childs[i], "hide", "show");
              else if (app.hasClass(childs[i], "navbar-menu"))
                app.addClass(childs[i], "show");
            }
          }
        }
        if (app.findParent(target, "dropdown-content")) {
          // console.log("yes");
          var parent = app.findParent(target, "select");
          var value = target.getAttribute("data-value");
          var drpButton = null;
          var name = null;

          if (parent && parent.getAttribute("data-name") != null) {
            name = parent.getAttribute("data-name");
            var childs = parent.getElementsByTagName("*");
            for (var i = 0; i < childs.length; i++) {
              if (app.hasClass(childs[i], "dropBtn")) drpButton = childs[i];
            }
          }
          app.removeClass(parent, "hover");
        }
        if (app.findParent(target, "dropbtn")) {
          var parent = app.findParent(target, "dropdown");
          if (parent && app.hasClass(parent, "hover"))
            app.removeClass(parent, "hover");
          else {
            for (var i = 0; i < dropdowns.length; i++) {
              app.removeClass(dropdowns[i], "hover");
            }
            app.addClass(parent, "hover");
          }
        }
        // ok
        else {
          for (var i = 0; i < dropdowns.length; i++) {
            app.removeClass(dropdowns[i], "hover");
          }
        }

        // console.timeEnd("#Start 2:");
      });
    };
    app.validate = function(id) {
      var al = document.getElementById(id) || id;

      function valid(t, l, f) {
        if (l === null) {
          if (t.value.length == 0 || !f.test(t.value)) {
            app.removeClass(t, "tf-success");
            app.addClass(t, "tf-error");
          } else {
            app.removeClass(t, "tf-error");
            app.addClass(t, "tf-success");
          }
        } else {
          if (t.value.length == 0 || t.value.length > l || !f.test(t.value)) {
            app.removeClass(t, "tf-success");
            app.addClass(t, "tf-error");
          } else {
            app.removeClass(t, "tf-error");
            app.addClass(t, "tf-success");
          }
        }
      }
      app.addEvent("keyup", al, function(e) {
        var target = e.target || e.srcElement;
        var len = target.getAttribute("data-len");
        var filter = target.getAttribute("data-filter");
        if (filter === null) filter = "all";
        var f = {
          all: /[A-Za-z0-9]/,
          email: /^\w+([\.\-]?\w+)*\@\w+([\.\-]?\w+)*(\.\w{2,5})+$/,
          number: /^[0-9]+$/,
          username: /^\w+$/
        };
        if (target.type == "text") {
          valid(target, len, f[filter]);
        } else if (target.type == "email") {
          valid(target, len, f.email);
        } else if (target.type == "number") {
          valid(target, len, f.number);
        }
      });
      al.onsubmit = function() {
        var inputs = al.getElementsByTagName("input"),
          input = null,
          flag = true;
        for (var i = 0, len = inputs.length; i < len; i++) {
          input = inputs[i];
          if (!input.value) {
            flag = false;
            input.focus();
            app.addClass(input, "tf-error");
            break;
          }
        }
        return flag;
      };
    };
    app.slider = function(al, duration) {
      var t = null;
      if (duration != null) {
        duration = duration * 1000;
      } else duration = 5000;
      var myIndex = 0;
      var last = 0;
      var direction = 1;

      slide();
      function slide() {
        var i;
        var arr1 = [];
        var arr2 = [];
        var cir = 0;
        var x = al.getElementsByTagName('*');
        for (i = 0; i < x.length; i++) {
            if (app.hasClass(x[i], "slide")) {
              app.removeClass(x[i], "showprev");
              app.removeClass(x[i], "shownext");
              if (app.hasClass(x[i], "showleft") || app.hasClass(x[i], "showright")) {
                if(direction == 1) app.addClass(x[i], "shownext");
                else app.addClass(x[i], "showprev");
              }
              app.removeClass(x[i], "showleft");
              app.removeClass(x[i], "showright");
              arr1.push(i);
            }
            if (app.hasClass(x[i], "bulet")) {
              app.removeClass(x[i], "active");
              arr2.push(i);
            }
          
        }
        
        last = arr1.length;
        myIndex++;
        if (myIndex > arr1.length) myIndex = 1;
        if (direction == 1) app.addClass(x[arr1[myIndex - 1]], "showleft");
        else app.addClass(x[arr1[myIndex - 1]], "showright");
        
        app.addClass(x[arr2[myIndex - 1]], "active");
        direction = 1;
        t = setTimeout(slide, duration);
      }

      function indexPlus() {
        direction = 1;
        clearTimeout(t);
        slide();
      }

      function indexMinus() {
        direction = -1;
        clearTimeout(t);
        myIndex = myIndex - 2;
        if (myIndex < 0) {
          myIndex = last - 1;
        }
        slide();
      }

      app.addEvent("click", al, function(e) {
        var target = e.target || e.srcElement;

        if (app.findParent(target, "prev")) {
          indexMinus();
        }
        if (app.findParent(target, "next")) {
          indexPlus();
        }
        if (app.hasClass(target, "bulet")) {
          clearTimeout(t);
          if(myIndex <= target.id -1) direction = 1;
          else direction = -1;
          myIndex = target.id - 1;
          slide();
        }
      });
    };
    app.carousel = function(id) {
      var x = id.childNodes;
      var t = null;
      for (var i = 0; i < x.length; i++) {
        if (app.hasClass(x[i], "c-item")) continue;
        else id.removeChild(x[i]);
      }
      var i = 0;
      slide();

      function slide() {
        if (i % 2 == 0) {
          var y = id.childNodes;
          var yy = y[0];
          var w = yy.offsetWidth + 20;
          for (var j = 0; j < y.length; j++) {
            app.addClass(y[j], "left");
          }
          id.style.left = -w + "px";
          i++;
          t = setTimeout(slide, 2000);
        } else {
          var z = id.childNodes;
          var zz = z[0];
          for (var k = 0; k < z.length; k++) {
            app.removeClass(z[k], "left");
          }
          id.removeChild(z[0]);
          id.style.left = "0px";
          id.appendChild(zz);
          i++;
          t = setTimeout(slide, 6000);
        }
      }
    };

    /**
     * Perform a function when specify events occur
     * @param {string} eventName
     * @param {object} htmlElement
     * @param {function} returnFunction
     * @example
     * // This will redirect to relative path of current domain.
     * app.on('click',document.getElementById('switch1'),function(){..code Here});
     */
    app.on = function(eventName, htmlElement, returnFunction) {
      //checking the html element is null or not
      if (htmlElement != undefined) {
        //For new Browser if and for older browser elese statement
        if (htmlElement.addEventListener)
          htmlElement.addEventListener(eventName, returnFunction);
        else htmlElement.attachEvent("on" + eventName, returnFunction);
      }
    };

    /**
     * Redirect to the provided URL.
     * @function
     * @param {string} url url to redirect.
     * @example
     * // This will redirect to relative path of current domain.
     * app.redirectTo('about.html');
     * @example
     * // This will redirect to the facebook page (Don't forget to use url with https:// or http://);
     * app.showAlert("https://www.facebook.com");
     */
    app.redirectTo = function(url) {
      window.location.href = url;
    };

    /**
     * Showing the alert
     * @function
     * @param {string} htmlElementId  Id of HTML element.
     * @param {number} timeInSecond How many second the alert will show.
     * @example
     * // The alert will show until click the close button.
     * app.showAlert('alert2')
     * @example
     * // The alert will show only for 10 second.
     * app.showAlert('alert1',10)
     */
    app.showAlert = function(htmlElementId, timeInSecond) {
      var element = document.getElementById(htmlElementId);
      // If the alert is hide then set to show
      if (app.hasClass(element, "hide"))
        app.toggleClass(element, "hide", "show");
      else app.addClass(element, "show");
      // If the times set in the parameter
      if (timeInSecond != undefined && timeInSecond > 0) {
        var time = null;
        var counter = 0;
        var duration = timeInSecond * 100;
        count();

        function count() {
          if (counter == timeInSecond) {
            app.toggleClass(element, "show", "hide");
            clearTimeout(time);
          }
          counter = counter + 1;
          t = setTimeout(count, duration);
        }
      }
    };
    return app;
  }
})();
