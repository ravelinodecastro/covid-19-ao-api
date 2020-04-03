export default {
    inserted: function (el, binding) {
        var btns = $(el).find('.btn');
        var radioGrpName = $(btns[0]).find('input')[0].name;
        $("input[name='" + radioGrpName + "'][value='" + binding.value + "']").closest('.btn').button('toggle');
    },
    bind: function (el, binding, vnode) {
        var btns = $(el).find('.btn');
        btns.each(function () {
            $(this).on('click', function () {
                var v = $(this).find('input').get(0).value;
                (function set(obj, str, val) {
                    str = str.split('.');
                    while (str.length > 1) {
                        obj = obj[str.shift()];
                    }
                    return obj[str.shift()] = val;
                })(vnode.context, binding.expression, v);
            })
        })
    }
}