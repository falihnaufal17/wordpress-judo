(function () {
    var __templates = {};

    function getCPTemplate(id) {
        var text = jQuery("#cp-content-templates-" + id)[0].innerHTML;

        text = text.split('<inline-script').join('<script');
        text = text.split('</inline-script').join('</script');

        return _.template(text);
    }

    window.CP_Customizer.addModule(function (CP_Customizer) {
        var contentTemplates = {
            text: getCPTemplate("text"),

            'text-with-checkbox': getCPTemplate("text-with-checkbox"),
            link: getCPTemplate("link"),
            image: getCPTemplate("image"),
            icon: getCPTemplate("icon"),
            list: getCPTemplate("list"),
            'linked-icon': getCPTemplate("linked-icon"),
            getCPScriptTemplate: getCPTemplate
        };

        CP_Customizer.jsTPL = _.extend(CP_Customizer.jsTPL, contentTemplates);

        CP_Customizer.jsTPL['select'] = _.template('' +
            '<li class="customize-control customize-control-text">' +
            '    <label>' +
            '        <span class="customize-control-title"><%= label %></span>' +
            '        <select type="text" id="<%= id %>">' +
            '            <% jQuery.each(choices,function(index,value){ %>' +
            '                <option value="<%= value %>"  ><%= index %></option>' +
            '            <% }) %>' +
            '        </select>' +
            '        <script>' +
            '                jQuery("#<%= id %>").val("<%= value %>") ' +
            '        </script>' +
            '    </label>' +
            '</li>' +
            '');


        CP_Customizer.jsTPL['selectize'] = _.template('' +
            ' <li class="customize-control customize-control-text">' +
            '    <label>' +
            '        <span class="customize-control-title"><%= label %></span>' +
            '        <select <%= (data.multiple ? \'multiple\' : \'\') %> id="<%= id %>">' +
            '        <% var choices = _.isFunction(data.choices) ? data.choices() : data.choices %>' +
            '        <% _.each(choices, function(label, _v) { %>' +
            '            <%' +
            '               var Vs = _.isArray(value) ? value: value.split(\',\').map(function(item){return item.trim()});' +
            '               var isSelected = (Vs.indexOf(_v) !== -1)' +
            '            %>' +
            '           <option <%= ( isSelected ? "selected=\'true\' ": "" ) %> value="<%= _v %>">' +
            '               <%= label %>' +
            '            </option>' +
            '        <% }); %>' +
            '        </select>' +
            '    </label>' +
            '    <script>' +
            '        jQuery("#<%= id %>").selectize({' +
            '             maxItems: <%= (data.multiple ? "null" : "1") %>,' +
            '             plugins: <%= (data.multiple ? "[\'remove_button\']" : "[]") %>'+
            '        })' +
            '    </script>' +
            '</li>' +
            '');

        CP_Customizer.jsTPL['selectize-remote'] = _.template('' +
            '<li class="customize-control customize-control-selectize-remote">' +
            '    <label>' +
            '        <span class="customize-control-title"><%= label %></span>' +
            '        <select id="<%= id %>"></select>' +
            '    </label>' +
            '</li>' +
            '');


        CP_Customizer.jsTPL['checkbox'] = _.template('' +
            '<li class="customize-control customize-control-checkbox">' +
            '    <span class="customize-control-title"><%= label %></span>' +
            '    <div style="clear: both">' +
            '       <label for="<%= id %>">\n' +
            '           <input  <%= (value?"checked=\'true\'":"") %> id="<%= id %>" type="checkbox"><%= text  %>' +
            '       </label>' +
            '  </div>' +
            '</li>' +
            '');
    });
})();