! function(t, n) { "object" == typeof exports && "undefined" != typeof module ? module.exports = n() : "function" == typeof define && define.amd ? define(n) : (t = t || self).LazyLoad = n() }(this, (function() {
    "use strict";

    function t() { return (t = Object.assign || function(t) { for (var n = 1; n < arguments.length; n++) { var e = arguments[n]; for (var i in e) Object.prototype.hasOwnProperty.call(e, i) && (t[i] = e[i]) } return t }).apply(this, arguments) }
    var n = "undefined" != typeof window,
        e = n && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),
        i = n && "IntersectionObserver" in window,
        o = n && "classList" in document.createElement("p"),
        a = n && window.devicePixelRatio > 1,
        r = { elements_selector: "img", container: e || n ? document : null, threshold: 300, thresholds: null, data_src: "src", data_srcset: "srcset", data_sizes: "sizes", data_bg: "bg", data_bg_hidpi: "bg-hidpi", data_bg_multi: "bg-multi", data_bg_multi_hidpi: "bg-multi-hidpi", data_poster: "poster", class_applied: "applied", class_loading: "loading", class_loaded: "loaded", class_error: "error", load_delay: 0, auto_unobserve: !0, cancel_on_exit: !1, callback_enter: null, callback_exit: null, callback_applied: null, callback_loading: null, callback_loaded: null, callback_error: null, callback_finish: null, callback_cancel: null, use_native: !1 },
        c = function(n) { return t({}, r, n) },
        l = function(t, n) {
            var e, i = new t(n);
            try { e = new CustomEvent("LazyLoad::Initialized", { detail: { instance: i } }) } catch (t) {
                (e = document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized", !1, !1, { instance: i })
            }
            window.dispatchEvent(e)
        },
        s = function(t, n) { return t.getAttribute("data-" + n) },
        u = function(t, n, e) {
            var i = "data-" + n;
            null !== e ? t.setAttribute(i, e) : t.removeAttribute(i)
        },
        d = function(t) { return s(t, "ll-status") },
        f = function(t, n) { return u(t, "ll-status", n) },
        _ = function(t) { return f(t, null) },
        g = function(t) { return null === d(t) },
        v = function(t) { return "delayed" === d(t) },
        b = ["loading", "applied", "loaded", "error"],
        p = function(t) { return b.indexOf(d(t)) > -1 },
        m = function(t, n) { return u(t, "ll-timeout", n) },
        h = function(t) { return s(t, "ll-timeout") },
        E = function(t, n, e, i) { t && (void 0 === i ? void 0 === e ? t(n) : t(n, e) : t(n, e, i)) },
        y = function(t, n) { o ? t.classList.add(n) : t.className += (t.className ? " " : "") + n },
        L = function(t, n) { o ? t.classList.remove(n) : t.className = t.className.replace(new RegExp("(^|\\s+)" + n + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "") },
        I = function(t) { return t.llTempImage },
        k = function(t, n, e) {
            if (e) {
                var i = e._observer;
                i && n.auto_unobserve && i.unobserve(t)
            }
        },
        A = function(t) { t && (t.loadingCount += 1) },
        w = function(t) { for (var n, e = [], i = 0; n = t.children[i]; i += 1) "SOURCE" === n.tagName && e.push(n); return e },
        z = function(t, n, e) { e && t.setAttribute(n, e) },
        C = function(t, n) { t.removeAttribute(n) },
        O = function(t) { return !!t.llOriginalAttrs },
        x = function(t) {
            if (!O(t)) {
                var n = {};
                n.src = t.getAttribute("src"), n.srcset = t.getAttribute("srcset"), n.sizes = t.getAttribute("sizes"), t.llOriginalAttrs = n
            }
        },
        N = function(t) {
            if (O(t)) {
                var n = t.llOriginalAttrs;
                z(t, "src", n.src), z(t, "srcset", n.srcset), z(t, "sizes", n.sizes)
            }
        },
        M = function(t, n) { z(t, "sizes", s(t, n.data_sizes)), z(t, "srcset", s(t, n.data_srcset)), z(t, "src", s(t, n.data_src)) },
        R = function(t) { C(t, "src"), C(t, "srcset"), C(t, "sizes") },
        T = function(t, n) {
            var e = t.parentNode;
            e && "PICTURE" === e.tagName && w(e).forEach(n)
        },
        G = { IMG: function(t, n) { T(t, (function(t) { x(t), M(t, n) })), x(t), M(t, n) }, IFRAME: function(t, n) { z(t, "src", s(t, n.data_src)) }, VIDEO: function(t, n) { w(t).forEach((function(t) { z(t, "src", s(t, n.data_src)) })), z(t, "poster", s(t, n.data_poster)), z(t, "src", s(t, n.data_src)), t.load() } },
        S = function(t, n, e) {
            var i = G[t.tagName];
            i && (i(t, n), A(e), y(t, n.class_loading), f(t, "loading"), E(n.callback_loading, t, e), E(n.callback_reveal, t, e))
        },
        j = ["IMG", "IFRAME", "VIDEO"],
        D = function(t) { t && (t.loadingCount -= 1) },
        F = function(t, n) {!n || n.toLoadCount || n.loadingCount || E(t.callback_finish, n) },
        P = function(t, n, e) { t.addEventListener(n, e), t.llEvLisnrs[n] = e },
        V = function(t, n, e) { t.removeEventListener(n, e) },
        U = function(t) { return !!t.llEvLisnrs },
        $ = function(t) {
            if (U(t)) {
                var n = t.llEvLisnrs;
                for (var e in n) {
                    var i = n[e];
                    V(t, e, i)
                }
                delete t.llEvLisnrs
            }
        },
        q = function(t, n, e) {! function(t) { delete t.llTempImage }(t), D(e), L(t, n.class_loading), k(t, n, e) },
        H = function(t, n, e) { var i = I(t) || t; if (!U(i)) {! function(t, n, e) { U(t) || (t.llEvLisnrs = {}), P(t, "load", n), P(t, "error", e), "VIDEO" === t.tagName && P(t, "loadeddata", n) }(i, (function(o) {! function(t, n, e, i) { q(n, e, i), y(n, e.class_loaded), f(n, "loaded"), E(e.callback_loaded, n, i), F(e, i) }(0, t, n, e), $(i) }), (function(o) {! function(t, n, e, i) { q(n, e, i), y(n, e.class_error), f(n, "error"), E(e.callback_error, n, i), F(e, i) }(0, t, n, e), $(i) })) } },
        B = function(t) { t && (t.toLoadCount -= 1) },
        J = function(t, n, e) {
            ! function(t) { t.llTempImage = document.createElement("img") }(t), H(t, n, e),
                function(t, n, e) {
                    var i = s(t, n.data_bg),
                        o = s(t, n.data_bg_hidpi),
                        r = a && o ? o : i;
                    r && (t.style.backgroundImage = 'url("'.concat(r, '")'), I(t).setAttribute("src", r), A(e), y(t, n.class_loading), f(t, "loading"), E(n.callback_loading, t, e), E(n.callback_reveal, t, e))
                }(t, n, e),
                function(t, n, e) {
                    var i = s(t, n.data_bg_multi),
                        o = s(t, n.data_bg_multi_hidpi),
                        r = a && o ? o : i;
                    r && (t.style.backgroundImage = r, y(t, n.class_applied), f(t, "applied"), k(t, n, e), E(n.callback_applied, t, e))
                }(t, n, e)
        },
        K = function(t, n, e) {! function(t) { return j.indexOf(t.tagName) > -1 }(t) ? J(t, n, e): function(t, n, e) { H(t, n, e), S(t, n, e) }(t, n, e), B(e), F(n, e) },
        Q = function(t) {
            var n = h(t);
            n && (v(t) && _(t), clearTimeout(n), m(t, null))
        },
        W = function(t, n, e, i) { "IMG" === t.tagName && ($(t), function(t) { T(t, (function(t) { R(t) })), R(t) }(t), function(t) { T(t, (function(t) { N(t) })), N(t) }(t), L(t, e.class_loading), D(i), E(e.callback_cancel, t, n, i), setTimeout((function() { i.resetElementStatus(t, i) }), 0)) },
        X = function(t, n, e, i) {
            E(e.callback_enter, t, n, i), p(t) || (e.load_delay ? function(t, n, e) {
                var i = n.load_delay,
                    o = h(t);
                o || (o = setTimeout((function() { K(t, n, e), Q(t) }), i), f(t, "delayed"), m(t, o))
            }(t, e, i) : K(t, e, i))
        },
        Y = function(t, n, e, i) { g(t) || (e.cancel_on_exit && function(t) { return "loading" === d(t) }(t) && W(t, n, e, i), E(e.callback_exit, t, n, i), e.load_delay && v(t) && Q(t)) },
        Z = ["IMG", "IFRAME"],
        tt = function(t) { return t.use_native && "loading" in HTMLImageElement.prototype },
        nt = function(t, n, e) { t.forEach((function(t) {-1 !== Z.indexOf(t.tagName) && (t.setAttribute("loading", "lazy"), function(t, n, e) { H(t, n, e), S(t, n, e), B(e), f(t, "native"), F(n, e) }(t, n, e)) })), e.toLoadCount = 0 },
        et = function(t) {
            var n = t._settings;
            i && !tt(t._settings) && (t._observer = new IntersectionObserver((function(e) {! function(t, n, e) { t.forEach((function(t) { return function(t) { return t.isIntersecting || t.intersectionRatio > 0 }(t) ? X(t.target, t, n, e) : Y(t.target, t, n, e) })) }(e, n, t) }), function(t) { return { root: t.container === document ? null : t.container, rootMargin: t.thresholds || t.threshold + "px" } }(n)))
        },
        it = function(t) { return Array.prototype.slice.call(t) },
        ot = function(t) { return t.container.querySelectorAll(t.elements_selector) },
        at = function(t) { return function(t) { return "error" === d(t) }(t) },
        rt = function(t, n) { return function(t) { return it(t).filter(g) }(t || ot(n)) },
        ct = function(t) {
            var n, e = t._settings;
            (n = ot(e), it(n).filter(at)).forEach((function(t) { L(t, e.class_error), _(t) })), t.update()
        },
        lt = function(t, e) {
            var i;
            this._settings = c(t), this.loadingCount = 0, et(this), i = this, n && window.addEventListener("online", (function(t) { ct(i) })), this.update(e)
        };
    return lt.prototype = {
        update: function(t) {
            var n, o, a = this._settings,
                r = rt(t, a);
            (this.toLoadCount = r.length, !e && i) ? tt(a) ? nt(r, a, this) : (n = this._observer, o = r, function(t) { t.disconnect() }(n), function(t, n) { n.forEach((function(n) { t.observe(n) })) }(n, o)): this.loadAll(r)
        },
        destroy: function() { this._observer && this._observer.disconnect(), delete this._observer, delete this._settings, delete this.loadingCount, delete this.toLoadCount },
        loadAll: function(t) {
            var n = this,
                e = this._settings;
            rt(t, e).forEach((function(t) { K(t, e, n) }))
        },
        resetElementStatus: function(t) {! function(t, n) { p(t) && function(t) { t && (t.toLoadCount += 1) }(n), f(t, null) }(t, this) },
        load: function(t) { K(t, this._settings, this) }
    }, lt.load = function(t, n) {
        var e = c(n);
        K(t, e)
    }, n && function(t, n) {
        if (n)
            if (n.length)
                for (var e, i = 0; e = n[i]; i += 1) l(t, e);
            else l(t, n)
    }(lt, window.lazyLoadOptions), lt
}));