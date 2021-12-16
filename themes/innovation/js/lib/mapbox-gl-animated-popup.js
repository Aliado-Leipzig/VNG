/*!
 * Mapbox GL JS Animated Popup v0.1.4
 * https://nagix.github.io/mapbox-gl-animated-popup
 * (c) 2020 Akihiko Kusanagi
 * Released under the MIT license
 */
! function(t, e) { "object" == typeof exports && "undefined" != typeof module ? module.exports = e(require("mapbox-gl")) : "function" == typeof define && define.amd ? define(["mapbox-gl"], e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).AnimatedPopup = e(t.mapboxgl) }(this, (function(t) {
    "use strict";

    function e(t) { return t && "object" == typeof t && "default" in t ? t : { default: t } }
    var n = e(t);
    const a = {
        linear: t => t,
        easeInQuad: t => t * t,
        easeOutQuad: t => -t * (t - 2),
        easeInOutQuad: t => (t /= .5) < 1 ? .5 * t * t : -.5 * (--t * (t - 2) - 1),
        easeInCubic: t => t * t * t,
        easeOutCubic: t => (t -= 1) * t * t + 1,
        easeInOutCubic: t => (t /= .5) < 1 ? .5 * t * t * t : .5 * ((t -= 2) * t * t + 2),
        easeInQuart: t => t * t * t * t,
        easeOutQuart: t => -((t -= 1) * t * t * t - 1),
        easeInOutQuart: t => (t /= .5) < 1 ? .5 * t * t * t * t : -.5 * ((t -= 2) * t * t * t - 2),
        easeInQuint: t => t * t * t * t * t,
        easeOutQuint: t => (t -= 1) * t * t * t * t + 1,
        easeInOutQuint: t => (t /= .5) < 1 ? .5 * t * t * t * t * t : .5 * ((t -= 2) * t * t * t * t + 2),
        easeInSine: t => 1 - Math.cos(t * (Math.PI / 2)),
        easeOutSine: t => Math.sin(t * (Math.PI / 2)),
        easeInOutSine: t => -.5 * (Math.cos(Math.PI * t) - 1),
        easeInExpo: t => 0 === t ? 0 : Math.pow(2, 10 * (t - 1)),
        easeOutExpo: t => 1 === t ? 1 : 1 - Math.pow(2, -10 * t),
        easeInOutExpo: t => 0 === t ? 0 : 1 === t ? 1 : (t /= .5) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) : .5 * (2 - Math.pow(2, -10 * --t)),
        easeInCirc: t => t >= 1 ? t : -(Math.sqrt(1 - t * t) - 1),
        easeOutCirc: t => Math.sqrt(1 - (t -= 1) * t),
        easeInOutCirc: t => (t /= .5) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1),
        easeInElastic(t) {
            let e = 1.70158,
                n = 0;
            return 0 === t ? 0 : 1 === t ? 1 : (n || (n = .3), e = n / (2 * Math.PI) * Math.asin(1), -1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - e) * (2 * Math.PI) / n))
        },
        easeOutElastic(t) {
            let e = 1.70158,
                n = 0;
            return 0 === t ? 0 : 1 === t ? 1 : (n || (n = .3), e = n / (2 * Math.PI) * Math.asin(1), 1 * Math.pow(2, -10 * t) * Math.sin((t - e) * (2 * Math.PI) / n) + 1)
        },
        easeInOutElastic(t) {
            let e = 1.70158,
                n = 0;
            return 0 === t ? 0 : 2 == (t /= .5) ? 1 : (n || (n = .45), e = n / (2 * Math.PI) * Math.asin(1), t < 1 ? 1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - e) * (2 * Math.PI) / n) * -.5 : 1 * Math.pow(2, -10 * (t -= 1)) * Math.sin((t - e) * (2 * Math.PI) / n) * .5 + 1)
        },
        easeInBack(t) { const e = 1.70158; return t * t * ((e + 1) * t - e) },
        easeOutBack(t) { const e = 1.70158; return (t -= 1) * t * ((e + 1) * t + e) + 1 },
        easeInOutBack(t) { let e = 1.70158; return (t /= .5) < 1 ? t * t * ((1 + (e *= 1.525)) * t - e) * .5 : .5 * ((t -= 2) * t * ((1 + (e *= 1.525)) * t + e) + 2) },
        easeInBounce: t => 1 - a.easeOutBounce(1 - t),
        easeOutBounce: t => t < 1 / 2.75 ? 7.5625 * t * t : t < 2 / 2.75 ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : t < 2.5 / 2.75 ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375,
        easeInOutBounce: t => t < .5 ? .5 * a.easeInBounce(2 * t) : .5 * a.easeOutBounce(2 * t - 1) + .5
    };

    function s(t, e, n, s, i) {
        let o;
        const r = performance.now(),
            c = () => {
                if (o) return;
                const u = performance.now() - r,
                    l = 0 === n ? 1 : Math.min(u / n, 1),
                    h = a[e](l);
                t.transform = `scale(${s?1-h:h})`, l < 1 ? requestAnimationFrame(c) : i && i()
            };
        return c(), () => { o = !0 }
    }

    function i(t, ...e) {
        for (const n of e)
            for (const e in n) "object" == typeof n[e] ? (t[e] || (t[e] = {}), i(t[e], n[e])) : t[e] = n[e];
        return t
    }
    const o = { openingAnimation: { duration: 1e3, easing: "easeOutElastic" }, closingAnimation: { duration: 300, easing: "easeInBack" } };
    return class extends n.default.Popup {
        constructor(t) { super(t), i(this.options, i({}, o, t)) }
        _call(t, ...e) { const n = this._container; return n && Object.defineProperty(n, "classList", { configurable: !0, get: () => this._innerContainer.classList }), super[t](...e), n && delete n.classList, this }
        addTo(...t) { return this._map && this._remove(), this._call("addTo", ...t) }
        _remove() {
            const t = this._container;
            this._cancelAnimation && this._cancelAnimation(), t.parentNode && t.parentNode.removeChild(t), this._container = this._innerContainer, delete this._innerContainer, super.remove()
        }
        remove() {
            if (this._removing) return this;
            const t = this._innerContainer;
            if (t) {
                const { easing: e, duration: n } = this.options.closingAnimation;
                this._cancelAnimation && this._cancelAnimation(), this._cancelAnimation = s(t.style, e, n, !0, (() => { this._remove(), delete this._removing }))
            } else super.remove();
            return this
        }
        setLngLat(...t) { return this._call("setLngLat", ...t) }
        trackPointer(...t) { return this._call("trackPointer", ...t) }
        getElement() { return this._innerContainer }
        getMaxWidth() { return this._innerContainer && this._innerContainer.style.maxWidth }
        setDOMContent(...t) { return this._call("setDOMContent", ...t) }
        addClassName(...t) { return this._call("addClassName", ...t) }
        removeClassName(...t) { return this._call("removeClassName", ...t) }
        toggleClassName(...t) { return this._call("toggleClassName", ...t) }
        _update(...t) {
            if (!this._map || !this._lngLat && !this._trackPointer || !this._content) return;
            let e = this._container;
            const n = this._container = this._innerContainer;
            if (n) {
                const t = n.style;
                let a = !1;
                Object.defineProperty(n, "style", { configurable: !0, get: () => !this.options.maxWidth || a && this.options.maxWidth === t.maxWidth ? e.style : (a = !0, t) })
            }
            if (super._update(...t), n) delete n.style;
            else {
                const { easing: t, duration: n } = this.options.openingAnimation;
                e = document.createElement("div"), e.className = "mapboxgl-popup-wrapper", e.style.position = "absolute", e.style.willChange = "transform", e.style.pointerEvents = "none", e.style.transform = this._container.style.transform, this._container.style.position = "relative", this._container.style.transform = "scale(0)", this._map.getContainer().appendChild(e), e.appendChild(this._container), this._cancelAnimation = s(this._container.style, t, n)
            }
            this._innerContainer = this._container, this._container = e, this._innerContainer.style.transformOrigin = function(t) { for (const e of t.values()) { const t = e.match(/mapboxgl-popup-anchor-(.+)/); if (t) return t[1].replace("-", " ") } }(this._innerContainer.classList)
        }
    }
}));
//# sourceMappingURL=mapbox-gl-animated-popup.min.js.map