<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/notes-svgrepo-com.svg') }}" type="image/x-icon">
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-slate-950 overflow-hidden">
    <div class="min-h-screen flex bg-gray-200 relative overflow-hidden">
        <div id="sidebar"
            class="w-64 absolute inset-y-0 left-0 transform translate-x-0 bg-slate-800 transition-transform duration-300 ease-in-out z-20">
            <div class="w-full py-[9.5px] border-b border-slate-50/15 h-max">
                <div class="flex items-center gap-x-2 px-3">
                    <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.8293 10.7154L20.3116 12.6473C19.7074 14.9024 19.4052 16.0299 18.7203 16.7612C18.1795 17.3386 17.4796 17.7427 16.7092 17.9223C16.6129 17.9448 16.5152 17.9621 16.415 17.9744C15.4999 18.0873 14.3834 17.7881 12.3508 17.2435C10.0957 16.6392 8.96815 16.3371 8.23687 15.6522C7.65945 15.1114 7.25537 14.4115 7.07573 13.641C6.84821 12.6652 7.15033 11.5377 7.75458 9.28263L8.27222 7.35077C8.3591 7.02654 8.43979 6.7254 8.51621 6.44561C8.97128 4.77957 9.27709 3.86298 9.86351 3.23687C10.4043 2.65945 11.1042 2.25537 11.8747 2.07573C12.8504 1.84821 13.978 2.15033 16.2331 2.75458C18.4881 3.35883 19.6157 3.66095 20.347 4.34587C20.9244 4.88668 21.3285 5.58657 21.5081 6.35703C21.7356 7.3328 21.4335 8.46034 20.8293 10.7154ZM11.0524 9.80589C11.1596 9.40579 11.5709 9.16835 11.971 9.27556L16.8006 10.5697C17.2007 10.6769 17.4381 11.0881 17.3309 11.4882C17.2237 11.8883 16.8125 12.1257 16.4124 12.0185L11.5827 10.7244C11.1826 10.6172 10.9452 10.206 11.0524 9.80589ZM10.2756 12.7033C10.3828 12.3032 10.794 12.0658 11.1941 12.173L14.0919 12.9495C14.492 13.0567 14.7294 13.4679 14.6222 13.868C14.515 14.2681 14.1038 14.5056 13.7037 14.3984L10.8059 13.6219C10.4058 13.5147 10.1683 13.1034 10.2756 12.7033Z"
                            fill="#FFF9D0" />
                        <path opacity="0.5"
                            d="M16.4149 17.9745C16.2064 18.6128 15.8398 19.1903 15.347 19.6519C14.6157 20.3368 13.4881 20.6389 11.2331 21.2432C8.97798 21.8474 7.85044 22.1496 6.87466 21.922C6.10421 21.7424 5.40432 21.3383 4.86351 20.7609C4.17859 20.0296 3.87647 18.9021 3.27222 16.647L2.75458 14.7152C2.15033 12.4601 1.84821 11.3325 2.07573 10.3568C2.25537 9.5863 2.65945 8.88641 3.23687 8.3456C3.96815 7.66068 5.09569 7.35856 7.35077 6.75431C7.7774 6.64 8.16369 6.53649 8.51621 6.44534C8.51618 6.44545 8.51624 6.44524 8.51621 6.44534C8.43979 6.72513 8.3591 7.02657 8.27222 7.35081L7.75458 9.28266C7.15033 11.5377 6.84821 12.6653 7.07573 13.6411C7.25537 14.4115 7.65945 15.1114 8.23687 15.6522C8.96815 16.3371 10.0957 16.6393 12.3508 17.2435C14.3833 17.7881 15.4999 18.0873 16.4149 17.9745Z"
                            fill="#FFF9D0" />
                    </svg>
                    <a href="{{ route('index') }}" class="text-white text-2xl font-bold">MindMap</a>
                </div>
            </div>
            <div class="overflow-x-hidden overflow-y-auto px-2">
                <ul class="mt-4">
                    <a href="{{ route('index') }}">
                        <x-sideList :title="__('My Tasks')" :active="request()->routeIs('index')">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon"
                                class="text-gray-300 h-5 w-5 flex-shrink-0 ltr:mr-3 rtl:ml-3" width="24"
                                height="24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z"
                                    stroke="#D1D5DB" fill="none" stroke-width="1.5px"></path>
                            </svg>
                        </x-sideList>
                    </a>
                    <a href="{{ route('projects') }}">
                        <x-sideList :title="__('Projects')" :active="request()->routeIs('projects')">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon"
                                class="text-gray-400 group-hover:text-gray-300 h-5 w-5 flex-shrink-0 ltr:mr-3 rtl:ml-3"
                                width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"
                                    stroke="#9CA3AF" fill="none" stroke-width="1.5px"></path>
                            </svg>
                        </x-sideList>
                    </a>

                    <x-sideList :title="__('Members')">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon"
                            class="text-gray-400 group-hover:text-gray-300 h-5 w-5 flex-shrink-0 ltr:mr-3 rtl:ml-3"
                            width="24" height="24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                                stroke="#9CA3AF" fill="none" stroke-width="1.5px"></path>
                        </svg>
                    </x-sideList>
                </ul>
                <div class="mt-12" x-data="{ show: true }">
                    <div class="flex items-center justify-between px-3">
                        <div class="flex items-center gap-x-3 cursor-pointer" @click="show= !show">
                            <span x-show='show'>
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-4 w-4 text-gray-500" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"
                                        stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                </svg>
                            </span>
                            <span x-show='!show' class="rotate-[-90deg]" style="display: none;">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-4 w-4 text-gray-500" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" stroke="#6B7280" fill="none"
                                        stroke-width="1.5px"></path>
                                </svg>
                            </span>
                            <span class="text-slate-400 font-bold text-sm">Projects</span>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <a href="{{ route('projects') }}">
                                <div class="cursor-pointer hover:bg-slate-100/15 p-1 rounded">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        aria-hidden="true" data-slot="icon" class="h-3.5 w-3.5" width="24"
                                        height="24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776"
                                            stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="cursor-pointer hover:bg-slate-100/15 p-1 rounded openProjectModal">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-4 w-4" width="24"
                                    height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"
                                        stroke="#6B7280" fill="none" stroke-width="1.5px"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 h-[360px] projectsContainer" x-show='show' x-transition id=""></div>
                </div>
            </div>
        </div>
        <div id="main-content"
            class="flex flex-col flex-1 bg-slate-100 transition-all duration-300 ease-in-out ml-64">

            <!--NavBar-->
            <div class="flex items-center justify-between bg-white px-3 py-3 shadow-md">
                <div class="flex" id="btn">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon"
                        class="ltr:block rtl:hidden h-5 w-5 cursor-pointer text-gray-500 hover:text-gray-700 ltr:mr-8 rtl:ml-8"
                        id="btn-right" width="34" height="34">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" stroke="#6B7280" fill="none"
                            stroke-width="1.5px"></path>
                    </svg>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon"
                        class="ltr:hidden rtl:block h-5 w-5 cursor-pointer text-gray-500 hover:text-gray-700 ltr:mr-8 rtl:ml-8 hidden"
                        id="btn-left" width="24" height="24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" stroke="#6B7280" fill="none"
                            stroke-width="1.5px"></path>
                    </svg>
                </div>
                <div class="flex items-center">
                    <x-navProfile>
                        <x-slot name="userPicture">
                            <x-userPicture class="w-6 h-6" :about="__(auth()->user()->userRole ? auth()->user()->userRole : 'User')" :user="__('https://i.pinimg.com/564x/41/95/7a/41957adcf44b1059bc46a0afda76418a.jpg')" />
                        </x-slot>

                        <x-slot name="userRole">
                            <span class="font-medium">{{ auth()->user()->name ? auth()->user()->name : 'User' }}</span>
                        </x-slot>

                        <div class="px-3 pb-1">
                            <span class="text-sm text-gray-600">Signed in as</span>
                            <span class="text-sm text-gray-700">{{ auth()->user()->email }}</span>
                        </div>
                    </x-navProfile>
                </div>
            </div>
            <div id="errorMessages" style="display: none;"
                class="transition-all duration-300 ease-in-out z-50 absolute bottom-10 right-12 px-4 py-2 bg-red-500 rounded-md text-white font-bold tetx-xl">
            </div>
            <!--Page Content-->
            {{ $slot }}
        </div>
    </div>
    <x-projectModal />
    <x-taskModal />

    <script>
        ! function() {
            var s, o;

            function n(t, e) {
                var n, r = {}.hasOwnProperty;
                for (n in e) r.call(e, n) && (t[n] = e[n]);
                return t
            }
            s = function(t, e, n) {
                var r;
                for (null == n && (n = document), r = t; r && r !== n;) r = r.parentNode;
                if (r !== n) return null;
                for (r = t; r && r !== n && r.matches && !r.matches(e);) r = r.parentNode;
                return r !== n || n.matches && n.matches(e) ? r : null
            }, (o = function(t) {
                var e;
                return null == t && (t = {}), this.evtHandler = {}, this.opt = n({
                        delay: 300,
                        autoZ: !0,
                        baseZ: 3e3,
                        escape: !0,
                        byDisplay: !0
                    }, t), t.zmgr && this.zmgr(t.zmgr), this.promises = [], this._r = t.root ? "string" == typeof t
                    .root ? document.querySelector(t.root) : t.root : ((e = document.createElement("div"))
                        .innerHTML = '<div class="base"></div>', e), this.cls = "string" == typeof t.type ? t.type
                    .split(" ") : t.type, this.resident = null != t.resident && t.resident, this.inPlace = null == t
                    .inPlace || t.inPlace, this.container = "string" == typeof t.container ? document.querySelector(
                        t.container) : t.container, this._r.content && this._r.content.nodeType === Element
                    .DOCUMENT_FRAGMENT_NODE || this.init(), this
            }).prototype = n(Object.create(Object.prototype), {
                root: function() {
                    return this.inited || this.init(), this._r
                },
                init: function() {
                    var t, r, i = this;
                    if (!this.inited) return this.inited = !0, this.inPlace || (this._r.parentNode.removeChild(
                            this._r), document.body.appendChild(this._r)), !this.resident && this._r
                        .parentNode && (this._c = document.createComment(" ldcover placeholder "), this._r
                            .parentNode.insertBefore(this._c, this._r), this._r.parentNode.removeChild(this
                                ._r)), this._r.content && this._r.content.nodeType === Element
                        .DOCUMENT_FRAGMENT_NODE && (this._r = this._r.content.cloneNode(!0).childNodes[0],
                            this._r.parentNode.removeChild(this._r)), (t = this._r.getAttribute(
                            "data-lock")) && "true" === t && (this.opt.lock = !0), this.inner = this._r
                        .querySelector(".inner"), this.base = this._r.querySelector(".base"), this._r
                        .classList.add.apply(this._r.classList, ["ldcv"].concat(this.cls || [])), this.opt
                        .byDisplay && (this._r.style.display = "none"), r = null, this._r.addEventListener(
                            "mousedown", this.el_md = function(t) {
                                return r = t.target
                            }), this._r.addEventListener("click", this.el_c = function(t) {
                            var e, n;
                            return r !== i._r || i.opt.lock ? s(t.target, "*[data-ldcv-cancel]", i._r) ?
                                (t.stopPropagation(), i.cancel()) : (e = s(t.target, "*[data-ldcv-set]",
                                    i._r)) && null != (n = e.getAttribute("data-ldcv-set")) && !s(e,
                                    ".disabled", i._r) ? (t.stopPropagation(), i.set(n)) : void 0 : (t
                                    .stopPropagation(), i.toggle(!1))
                        })
                },
                zmgr: function(t) {
                    return null != t ? this._zmgr = t : this._zmgr
                },
                append: function(t) {
                    var e = this._r.childNodes[0];
                    return (e && e.classList.contains("base") ? e : this._r).appendChild(t)
                },
                get: function(n) {
                    var r = this;
                    return new Promise(function(t, e) {
                        return r.promises.push({
                            res: t,
                            rej: e
                        }), r.toggle(!0, n)
                    })
                },
                cancel: function(e, t) {
                    if (null == t && (t = !0), this.promises.splice(0).map(function(t) {
                            return t.rej(e || ((t = new Error).name = "lderror", t.id = 999, t))
                        }), t) return this.toggle(!1)
                },
                set: function(e, t) {
                    if (null == t && (t = !0), this.promises.splice(0).map(function(t) {
                            return t.res(e)
                        }), t) return this.toggle(!1)
                },
                isOn: function() {
                    return this._r.classList.contains("active")
                },
                lock: function() {
                    return this.opt.lock = !0
                },
                toggle: function(r, i) {
                    var s = this;
                    return new Promise(function(e, t) {
                        var n;
                        return s.inited || s.init(), r && null != i && s.fire("data", i), null == r && s
                            ._r.classList.contains("running") || null != r && s._r.classList.contains(
                                "active") === !!r ? e() : ((n = null != r ? r : !s._r.classList
                                    .contains("active")) && !s._r.parentNode && (null == s.container &&
                                    s._c && s._c.parentNode ? s._c.parentNode.insertBefore(s._r, s._c) :
                                    (s.container || document.body).appendChild(s._r)), s._r.classList
                                .add("running"), s.opt.byDisplay && (s._r.style.display = "block"), s._r
                                .classList.contains("inline") && (n ? (s.el_h = function(t) {
                                    if (!s._r.contains(t.target)) return s.toggle(!1)
                                }, window.addEventListener("click", s.el_h)) : s.el_h && (window
                                    .removeEventListener("click", s.el_h), s.el_h = null)), !n && s
                                .el_esc && (document.removeEventListener("keyup", s.el_esc), s.el_esc =
                                    null), setTimeout(function() {
                                    var t;
                                    return s._r.classList.toggle("active", n), !s.opt.lock && s.opt
                                        .escape && n && !s.el_esc && (s.el_esc = function(t) {
                                            if (27 === t.keyCode && (t = o.popups)[t.length -
                                                    1] === s) return s.toggle(!1)
                                        }, document.addEventListener("keyup", s.el_esc)), s.opt
                                        .animation && s.inner && s.inner.classList[n ? "add" :
                                            "remove"].apply(s.inner.classList, s.opt.animation
                                            .split(" ")), n ? o.popups.push(s) : 0 <= (t = o.popups
                                            .indexOf(s)) && o.popups.splice(t, 1), s.opt.autoZ && (
                                            n ? s._r.style.zIndex = s.z = (s._zmgr || o._zmgr).add(s
                                                .opt.baseZ) : ((s._zmgr || o._zmgr).remove(s.z),
                                                delete s.z)), s.opt.transformFix && !n && s._r
                                        .classList.remove("shown"), setTimeout(function() {
                                            return s._r.classList.remove("running"), s.opt
                                                .transformFix && n && s._r.classList.add(
                                                    "shown"), !n && s.opt.byDisplay && (s._r
                                                    .style.display = "none"), n || !s._r
                                                .parentNode || s.resident || s._r.parentNode
                                                .removeChild(s._r), !n && s.opt.autoZ && (s._r
                                                    .style.zIndex = ""), s.fire("toggled." + (
                                                    n ? "on" : "off"))
                                        }, s.opt.delay), s.promises.length && !n && s.set(void 0, !
                                            1), s.fire("toggle." + (n ? "on" : "off")), e()
                                }, 50))
                    })
                },
                on: function(t, n) {
                    var r = this;
                    return (Array.isArray(t) ? t : [t]).map(function(t) {
                        var e;
                        return ((e = r.evtHandler)[t] || (e[t] = [])).push(n)
                    })
                },
                fire: function(t) {
                    for (var e, n, r, i, s = [], o = [], l = 1, c = arguments.length; l < c; ++l) o.push(
                        arguments[l]);
                    for (e = o, l = 0, r = (n = this.evtHandler[t] || []).length; l < r; ++l) i = n[l], s.push(i
                        .apply(this, e));
                    return s
                },
                destroy: function(t) {
                    var e = this;
                    return null == t && (t = {}), this.toggle(!1).then(function() {
                        return e._c && (t.removeNode || e._c.parentNode.insertBefore(e._r, e._c), e._c
                            .parentNode.removeChild(e._c)), e._r.removeEventListener("mousedown", e
                            .el_md), e._r.removeEventListener("click", e.el_c)
                    })
                }
            }), n(o, {
                popups: [],
                _zmgr: {
                    add: function(t) {
                        return (this.s || (this.s = [])).push(t = Math.max(t || 0, ((t = this.s)[t.length -
                            1] || 0) + 1)), t
                    },
                    remove: function(t) {
                        if (!((t = (this.s || (this.s = [])).indexOf(t)) < 0)) return this.s.splice(t, 1)
                    }
                },
                zmgr: function(t) {
                    return null != t ? this._zmgr = t : this._zmgr
                }
            }), "undefined" != typeof module && null !== module ? module.exports = o : window && (window.ldcover = o)
        }.call(this);
    </script>

    <script>
        // Task Modal
        let ldcvTaskModal;
        const taskModal = document.querySelector('#taskModal');
        let currentTaskId = null;
        if (taskModal) {
            ldcvTaskModal = new ldcover({
                root: taskModal
            });

            $(document).on('click', ".openModal", function(event) {
                const projectId = $(this).attr('project_id');
                const taskId = $(this).attr('task_id');
                const scheduleId = $(this).attr('schedule_id');
                currentTaskId = taskId
                fetchComments(currentTaskId);
                fetchCheckOut(currentTaskId);
                // fetchForTask(projectId, taskId, scheduleId);
                ldcvTaskModal.toggle();
            });
        }

        // function fetchForTask(projectId, taskId, scheduleId) {
        //     return $.ajax({
        //         type: "GET",
        //         url: "{{ route('project', ['id' => ':id']) }}".replace(':id', projectId),
        //         success: function(response) {
        //             $("#modalProjectName").text(response.project.name);
        //             const schedules = response.project.schedule;
        //             const schedule = schedules.find((schedule) => schedule.id == scheduleId);

        //             if (schedule) {
        //                 $("#currentSchedule").text(schedule.title)
        //                 $("#modalScheduleName").text(schedule.title);
        //             } else {
        //                 $("#modalScheduleName").text("No Schedule");
        //             }
        //             const task = schedule.task.find((task) => task.id == taskId);
        //             if (task) {
        //                 $("#modalTaskTitle").text(task.taskTitle);

        //                 function formatDate(dateString) {
        //                     const date = new Date(dateString);
        //                     return new Intl.DateTimeFormat('en-US', {
        //                         month: 'long',
        //                         day: 'numeric',
        //                         year: 'numeric'
        //                     }).format(date);
        //                 }

        //                 const modalDueDate = $("#modalDueDate");
        //                 if (task.description) {
        //                     $("#disSpan").text(task.description);
        //                     $("#modalTaskDescription").text(task.description);
        //                 }
        //                 if (task.dueDate) {
        //                     modalDueDate.text(formatDate(task.dueDate));
        //                 }
        //                 const scheduleList = $("#scheduleList");
        //                 scheduleList.empty();

        //                 if (schedules.length > 0) {
        //                     schedules.forEach((schedule) => {
        //                         scheduleList.attr('selectScheduleId', schedule.id).append(
        //                             '<div class="selectSchedule flex cursor-pointer items-center px-4 py-2 text-xs text-gray-600 hover:bg-gray-200">' +
        //                             schedule.title + '</div>');
        //                     });
        //                 }

        //                 if (task.checkout.length > 0) {
        //                     const checkoutToAdd = $("#checkoutToAdd");
        //                     checkoutToAdd.empty();
        //                     task.checkout.forEach((checkOut) => {
        //                         const checkOutContainer = $("<div>").addClass('flex items-center my-2');
        //                         const checkbox = $('<input>').attr('type', 'checkbox').addClass(
        //                             'ui-checkbox mx-2');

        //                         const checkoutContent = $('<div>').addClass('text-gray-500 text-sm')
        //                             .text(checkOut.checkoutName);
        //                         checkOutContainer.append(checkbox, checkoutContent);
        //                         checkoutToAdd.append(checkOutContainer);

        //                         // Check if checkout is completed
        //                         if (checkOut.completed === 1) {
        //                             checkbox.prop('checked', true);
        //                         }
        //                     });
        //                     const completedCheckout = task.checkout.filter((item) => item.completed === 1);
        //                     $("#totalCheckout").text(task.checkout.length);
        //                     $("#doneCheckout").text(completedCheckout.length);
        //                 }

        //                 if (task.comment.length > 0) {
        //                     $("#commentCount").text(task.comment.length > 0 ? task.comment.length : 0);
        //                     const commentContainer = $("#commentContainer");
        //                     // Function to format the date
        //                     function formatDateWithSec(dateString) {
        //                         const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        //                         const date = new Date(dateString);
        //                         const day = ("0" + date.getDate()).slice(-2);
        //                         const month = months[date.getMonth()];
        //                         const hours = ("0" + date.getHours()).slice(-2);
        //                         const minutes = ("0" + date.getMinutes()).slice(-2);
        //                         const seconds = ("0" + date.getSeconds()).slice(-2);
        //                         return `${day} ${month} - ${hours}:${minutes}:${seconds}`;
        //                     }
        //                     task.comment.forEach((commentItem) => {
        //                         const commentDiv = $("<div>").addClass('flex mt-2').append(
        //                             $("<div>").addClass('ml-4 flex-1')
        //                             .append(
        //                                 $("<div>").addClass('flex items-center justify-between')
        //                                 .append(
        //                                     $("<div>").addClass('flex items-center space-x-2')
        //                                     .append(
        //                                         $("<div>").addClass('text-gray-600 font-semibold')
        //                                         .text(commentItem.user.name),
        //                                         $("<div>").addClass('text-gray-500 text-xs mt-1')
        //                                         .text(formatDateWithSec(commentItem.created_at))
        //                                     ),
        //                                     $("<span>").addClass('cursor-pointer deleteComment')
        //                                     .attr('delCommentId', commentItem.id)
        //                                     .append(
        //                                         `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-3.5 w-3.5 ltr:mr-2 rtl:ml-2" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" stroke="#6B7280" fill="none" stroke-width="1.5px"></path></svg>`
        //                                     ),
        //                                     $("<div>").addClass(
        //                                         'flex items-center space-x-1 bg-white deleteC'
        //                                     ).css('display', 'none').append(
        //                                         $("<span>").addClass('text-sm text-gray-800').text(
        //                                             'Are you sure to delete?'),
        //                                         $("<span>").addClass('cursor-pointer yesDelete')
        //                                         .append(
        //                                             `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-5 w-5 cursor-pointer text-green-600 hover:text-green-800 ltr:mr-1 rtl:ml-1" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke="#16A34A" fill="none" stroke-width="1.5px"></path></svg>`
        //                                         ),
        //                                         $("<span>").addClass('cursor-pointer noDelete')
        //                                         .append(
        //                                             `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-5 w-5 cursor-pointer text-red-600 hover:text-red-800" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke="#DC2626" fill="none" stroke-width="1.5px"></path></svg>`
        //                                         )
        //                                     )
        //                                 ),
        //                                 $("<p>").addClass('pt-1 text-sm text-gray-500').text(
        //                                     commentItem.taskComment)
        //                             )
        //                         );
        //                         commentContainer.append(commentDiv);
        //                     });
        //                 }
        //             }
        //         }
        //     });
        // }

        function fetchCheckOut(taskId) {
            return $.ajax({
                type: "GET",
                url: "{{ route('task.show', ['id' => ':id']) }}".replace(':id', taskId),
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.checkout.length > 0) {
                        const checkoutToAdd = $("#checkoutToAdd");
                        checkoutToAdd.empty();
                        response.checkout.forEach((checkOut) => {
                            const checkOutContainer = $("<div>").addClass('flex items-center my-2');
                            const checkbox = $('<input>').attr('type', 'checkbox').addClass(
                                'ui-checkbox mx-2').data('checkBoxId', checkOut.id);

                            const checkoutContent = $('<div>').addClass('text-gray-500 text-sm')
                                .text(checkOut.checkoutName);
                            checkOutContainer.append(checkbox, checkoutContent);
                            checkoutToAdd.append(checkOutContainer);

                            // Check if checkout is completed
                            if (checkOut.completed === 1) {
                                checkbox.prop('checked', true);
                            }
                        });
                        const completedCheckout = response.checkout.filter((item) => item.completed === 1);
                        $("#totalCheckout").text(response.checkout.length);
                        $("#doneCheckout").text(completedCheckout.length);
                    } else {

                    }
                }
            });
        }

        $(document).on('click', '.ui-checkbox', function() {
            const checkOutId = $(this).data('checkBoxId');
            const isChecked = $(this).prop('checked');
            console.log(isChecked);
            if (isChecked) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('checkout.update', ['id' => ':id']) }}".replace(':id', checkOutId),
                    data: {
                        checked: 1,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                        fetchCheckOut(currentTaskId);
                        fetchSchedule();
                    }
                });
            } else {
                $.ajax({
                    type: "POST",
                    url: "{{ route('checkout.update', ['id' => ':id']) }}".replace(':id', checkOutId),
                    data: {
                        unChecked: 0,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                        fetchCheckOut(currentTaskId);
                        fetchSchedule();
                    }
                });
            }
        });

        $(document).on('click', '', function() {

        });


        function fetchComments(taskId) {
            return $.ajax({
                type: "GET",
                url: "{{ route('task.show', ['id' => ':id']) }}".replace(':id', taskId),
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.comment.length > 0) {
                        $("#commentCount").text(response.comment.length);
                        const commentContainer = $("#commentContainer");
                        commentContainer.empty(); // Clear the existing comments

                        // Function to format the date
                        function formatDateWithSec(dateString) {
                            const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep",
                                "Oct", "Nov", "Dec"
                            ];
                            const date = new Date(dateString);
                            const day = ("0" + date.getDate()).slice(-2);
                            const month = months[date.getMonth()];
                            const hours = ("0" + date.getHours()).slice(-2);
                            const minutes = ("0" + date.getMinutes()).slice(-2);
                            const seconds = ("0" + date.getSeconds()).slice(-2);
                            return `${day} ${month} - ${hours}:${minutes}:${seconds}`;
                        }
                        response.comment.forEach((commentItem) => {
                            const commentDiv = $("<div>").addClass('flex mt-2').append(
                                $("<div>").addClass('ml-4 flex-1').append(
                                    $("<div>").addClass('flex items-center justify-between')
                                    .append(
                                        $("<div>").addClass('flex items-center space-x-2')
                                        .append(
                                            $("<div>").addClass('text-gray-600 font-semibold')
                                            .text(
                                                commentItem.user.name),
                                            $("<div>").addClass('text-gray-500 text-xs mt-1')
                                            .text(
                                                formatDateWithSec(commentItem.created_at))
                                        ),
                                        $("<span>").addClass('cursor-pointer deleteComment')
                                        .attr(
                                            'delCommentId', commentItem.id).append(
                                            `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-3.5 w-3.5 ltr:mr-2 rtl:ml-2" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" stroke="#6B7280" fill="none" stroke-width="1.5px"></path></svg>`
                                        ),
                                        $("<div>").addClass(
                                            'flex items-center space-x-1 bg-white deleteC').css(
                                            'display', 'none').append(
                                            $("<span>").addClass('text-sm text-gray-800').text(
                                                'Are you sure to delete?'),
                                            $("<span>").addClass('cursor-pointer yesDelete')
                                            .append(
                                                `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-5 w-5 cursor-pointer text-green-600 hover:text-green-800 ltr:mr-1 rtl:ml-1" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke="#16A34A" fill="none" stroke-width="1.5px"></path></svg>`
                                            ),
                                            $("<span>").addClass('cursor-pointer noDelete')
                                            .append(
                                                `<svg xmlns:xlink="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-5 w-5 cursor-pointer text-red-600 hover:text-red-800" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke="#DC2626" fill="none" stroke-width="1.5px"></path></svg>`
                                            )
                                        )
                                    ),
                                    $("<p>").addClass('pt-1 text-sm text-gray-500').text(
                                        commentItem
                                        .taskComment)
                                )
                            );
                            commentContainer.append(commentDiv);
                        });
                    } else {
                        $("#commentCount").text(0);
                        const commentContainer = $("#commentContainer");
                        commentContainer.empty(); // Clear the existing comments
                    }
                }
            });
        }

        $(document).on('click', '.deleteComment', function() {
            const delCommentId = $(this).attr('delCommentId');
            $(document).off('click', '.yesDelete'); // Remove previous listeners to avoid duplicate triggers
            $(document).on('click', '.yesDelete', function() {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('comment.delete', ['id' => ':id']) }}".replace(':id',
                        delCommentId),
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                        fetchComments(currentTaskId);
                        fetchSchedule();
                    }
                });
            });
        });


        // Toggle visibility function

        function toggleVisibility(hideSelector, showSelector) {
            $(hideSelector).hide();
            $(showSelector).show();
        }

        $(document).on('click', '.deleteComment', function() {
            let index = $(".deleteComment").index(this);
            $(".deleteComment").eq(index).hide();
            $('.deleteC').eq(index).show();
        })



        $(document).on('click', '.noDelete', function() {
            let index = $(".noDelete").index(this);
            $(".deleteC").eq(index).hide();
            $('.deleteComment').eq(index).show();
        })



        // Delete Task

        $(document).on('click', '.openModal', function() {
            const taskId = $(this).attr('task_id');
            $(document).on('click', '.deleteTask', function() {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('task.delete', ['id' => ':id']) }}".replace(':id', taskId),
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                        ldcvTaskModal.toggle();
                        fetchSchedule();
                    }
                });
            });
        });
















        // Project Modal
        let ldcvProjectModal;

        const projectModal = document.querySelector('#projectModal');
        if (projectModal) {
            ldcvProjectModal = new ldcover({
                root: projectModal
            });
            const modals = document.querySelectorAll('.openProjectModal');
            if (modals) {
                modals.forEach(modal => {
                    modal.addEventListener('click', function() {
                        ldcvProjectModal.toggle();
                    });
                });
            }
        }


        function fetchSideProjects() {
            $.ajax({
                url: "{{ route('projects') }}",
                type: 'GET',
                success: function(data) {
                    let projectsContainer = $('.projectsContainer');
                    projectsContainer.empty();
                    if (data.length > 0) {
                        const currentUrl = window.location.href;
                        data.forEach(project => {
                            if (project.archived === 0) {
                                const projectUrl =
                                    `${new URL(window.location.href).origin}/project/${project.id}`;
                                const isActive = currentUrl === projectUrl;
                                let projectHtml = "";
                                if (isActive) {
                                    projectHtml +=
                                        `<a href="/project/${project.id}"><x-sideList :title="'${project.name}'" :active="true" :project="'true'"><div class="w-3 h-3 py-1 rounded-full" style="background-color: ${project.color};"></div></x-sideList></a>`;
                                } else {
                                    projectHtml +=
                                        `<a href="/project/${project.id}"><x-sideList :title="'${project.name}'" :active="false" :project="'true'"><div class="w-3 h-3 py-1 rounded-full" style="background-color: ${project.color};"></div></x-sideList></a>`;
                                }
                                projectsContainer.append(projectHtml);
                            }
                        });
                    } else {
                        projectsContainer.html(
                            '<div class="text-white ml-4 font-bold">No Projects</div>');
                    }
                },
                error: function(error) {
                    console.log('Error fetching projects:', error);
                }
            });
        }

        // Fetch projects on page load
        fetchSideProjects();

        function fetchProjects() {
            $.ajax({
                url: "{{ route('projects') }}",
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#projectListActive').empty();
                    $('#projectListArchived').empty();
                    let activeProjectCount = 0;
                    let archivedProjectCount = 0;
                    response.forEach(function(project) {
                        if (project.archived === 0) {
                            activeProjectCount++;
                            const projectDiv = $('<div>').addClass(
                                'flex items-center justify-between px-6 py-3 border-b');
                            const projectLink = $('<a>').attr('href',
                                "{{ route('project', '') }}/" + project.id).append(
                                // Project Color Dot
                                $('<div>').addClass('flex items-center').append(
                                    $('<div>').addClass('w-2.5 h-2.5 rounded-full').css(
                                        'background-color', project.color),
                                    // Project Name
                                    $('<div>').addClass(
                                        'pl-3 text-gray-600 hover:underline').text(project
                                        .name)
                                )
                            );

                            const iconSpan = $('<span>')
                                .addClass('cursor-pointer archivedIcon tooltip')
                                .attr('data-tippy', 'Archived')
                                .attr('id', project.id)
                                .append(`
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon" class="h-4 w-4 group-hover:text-gray-800"
                                width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"
                                    stroke="#4B5563" fill="none" stroke-width="1.5px"></path>
                            </svg>`);

                            projectDiv.append(projectLink, iconSpan);
                            $('#projectListActive').append(projectDiv);
                        } else {
                            archivedProjectCount++;
                            const projectDiv = $('<div>')
                                .addClass('flex items-center justify-between px-6 py-3 border-b');
                            const projectLink = $('<a>')
                                .attr('href', "{{ route('project', '') }}/" + project.id).append(
                                    // Project Color Dot
                                    $('<div>').addClass('flex items-center').append(
                                        $('<div>').addClass('w-2.5 h-2.5 rounded-full').css(
                                            'background-color', project.color),
                                        // Project Name
                                        $('<div>').addClass(
                                            'pl-3 text-gray-600 hover:underline').text(project
                                            .name)
                                    )
                                );

                            const iconSpan = $('<span>')
                                .addClass('cursor-pointer UnarchivedIcon tooltip')
                                .attr('data-tippy', 'Archived')
                                .attr('id', project.id)
                                .append(
                                    `<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-4 w-4 cursor-pointer text-gray-600 hover:text-gray-900" width="24"  height="24" ><path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" stroke="#4B5563" fill="none" stroke-width="1.5px"></path></svg>`
                                );

                            projectDiv.append(projectLink, iconSpan);
                            $('#projectListArchived').append(projectDiv);
                        }
                    });
                    if (activeProjectCount === 0) {
                        $('#projectListActive').append(
                            '<div class="pl-3 text-gray-600 my-4 font-bold text-center text-3xl">No Active Project</div>'
                        );
                    }
                    if (archivedProjectCount === 0) {
                        $('#projectListArchived').append(
                            '<div class="pl-3 text-gray-600 my-4 font-bold text-center text-3xl">No Archived Project</div>'
                        );
                    }
                },
                error: function(error) {
                    console.error('Error fetching projects:', error);
                }
            });
        }
        fetchProjects();

        // Event listener for color selection
        let selectedColor = null;
        $(document).on('click', '.color-label', function() {
            selectedColor = $(this).data("color");
        })

        // New Project Add
        $(document).on('click', '#addNewProject', function(e) {
            e.preventDefault();
            const projectName = $("#name").val();
            const projectColor = selectedColor;
            if (projectName.trim() === '') {
                $("#projectError").show()
                setTimeout(() => {
                    $("#projectError").hide()
                }, 1500);
            } else if (!selectedColor) {
                $("#projectError").show()
                setTimeout(() => {
                    $("#projectError").hide()
                }, 1500);
            } else {
                $.ajax({
                    url: "{{ route('project.create') }}",
                    type: "POST",
                    data: {
                        name: projectName,
                        color: projectColor,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        fetchProjects();
                        fetchSideProjects();
                        ldcvProjectModal.toggle();
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {
                            let response = JSON.parse(xhr.responseText);
                            let error = response.errors.name ? response.errors.name[0] :
                                'An error occurred';
                            $("#errorMessages").text(error).show();
                            setTimeout(() => {
                                $("#errorMessages").hide();
                            }, 2500);
                        }
                    }
                });

            }
        });
    </script>
</body>

</html>
