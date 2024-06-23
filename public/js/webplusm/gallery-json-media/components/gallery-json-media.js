function w(t) {
    return t ? t > 1e3 * 1e3 ? ((t / (1e3 * 1e3)).toFixed(1) + " Mb").replace(".", ",") : t > 1024 ? ((t / 1e3).toFixed(1) + " kb").replace(".", ",") : (t.toFixed(1) + " *kb").replace(".", ",") : "unknow size"
}

function m(t, s) {
    return t instanceof File ? {
        name: t.name,
        alt: t.name,
        size: t.size,
        mime_type: t.type,
        is_new: !0,
        is_success: !1,
        error: !1,
        filekey: s,
        progress: 0,
        url: URL.createObjectURL(t)
    } : !1
}

function F(t) {
    return {
        _minSize: null,
        _maxSize: null,
        _acceptedFileTypes: null,
        minSize(s) {
            return this._minSize = s, this
        },
        maxSize(s) {
            return this._maxSize = s, this
        },
        fileType(s) {
            return this._acceptedFileTypes = s, this
        },
        check() {
            return !Z(t, this._acceptedFileTypes) || !O(t, this._maxSize) || !I(t, this._minSize)
        }
    }
}

function v(t, s, c) {
    let h = t + c;
    return s ? h <= s : !0
}

function I(t, s) {
    return !(s && t.size > s)
}

function O(t, s) {
    return !(s && t.size > s * 1024)
}

function Z(t, s) {
    return s ? s.filter(h => h === t.type).length > 0 : !0
}

function x() {
    return ("10000000-1000-4000-8000" + -1e11).replace(/[018]/g, t => (t ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> t / 4).toString(16))
}

function y(t) {
    return {
        xls() {
            return `<svg width="320" height="220" viewBox="0 0 320 220" fill="none" xmlns="http://www.w3.org/2000/svg" class="object-cover w-full">
                        <rect width="320" height="220" fill="white"/>
                        <path d="M137.669 100.925C137.385 100.566 137.031 100.267 136.629 100.047C136.227 99.8269 135.785 99.6892 135.329 99.6422C134.873 99.5953 134.412 99.6399 133.974 99.7737C133.535 99.9074 133.128 100.127 132.776 100.421C132.424 100.714 132.134 101.075 131.923 101.482C131.713 101.889 131.586 102.335 131.55 102.792C131.514 103.248 131.57 103.708 131.714 104.143C131.858 104.578 132.088 104.98 132.389 105.325L147.741 123.75L132.389 142.175C131.832 142.878 131.571 143.771 131.663 144.664C131.755 145.557 132.192 146.378 132.882 146.952C133.571 147.527 134.458 147.809 135.352 147.739C136.247 147.668 137.079 147.25 137.669 146.575L152.217 129.119L166.764 146.582C167.349 147.282 168.187 147.721 169.096 147.803C169.546 147.844 169.999 147.795 170.43 147.661C170.861 147.526 171.261 147.308 171.608 147.018C171.955 146.729 172.241 146.374 172.45 145.974C172.66 145.574 172.789 145.137 172.829 144.687C172.87 144.237 172.821 143.784 172.687 143.353C172.552 142.922 172.334 142.522 172.044 142.175L156.693 123.75L172.044 105.325C172.602 104.622 172.863 103.729 172.771 102.836C172.679 101.943 172.242 101.122 171.552 100.548C170.863 99.9731 169.976 99.691 169.082 99.7615C168.187 99.832 167.355 100.25 166.764 100.925L152.217 118.381L137.669 100.925Z" fill="#2BA720"/>
                        <path d="M201.25 151.25V85.9375L170.312 55H132.5C128.853 55 125.356 56.4487 122.777 59.0273C120.199 61.6059 118.75 65.1033 118.75 68.75V151.25C118.75 154.897 120.199 158.394 122.777 160.973C125.356 163.551 128.853 165 132.5 165H187.5C191.147 165 194.644 163.551 197.223 160.973C199.801 158.394 201.25 154.897 201.25 151.25ZM170.312 75.625C170.312 78.36 171.399 80.9831 173.333 82.917C175.267 84.851 177.89 85.9375 180.625 85.9375H194.375V151.25C194.375 153.073 193.651 154.822 192.361 156.111C191.072 157.401 189.323 158.125 187.5 158.125H132.5C130.677 158.125 128.928 157.401 127.639 156.111C126.349 154.822 125.625 153.073 125.625 151.25V68.75C125.625 66.9266 126.349 65.178 127.639 63.8886C128.928 62.5993 130.677 61.875 132.5 61.875H170.312V75.625Z" fill="#2BA720"/>
            </svg>`
        },
        word() {
            return `<svg width="320" height="220" viewBox="0 0 320 220" fill="none" xmlns="http://www.w3.org/2000/svg"  class="object-cover w-full">
                        <rect width="320" height="220" fill="white"/>
                        <path d="M144.25 149.4C143.35 149.4 142.617 149.183 142.05 148.75C141.517 148.317 141.083 147.633 140.75 146.7L130.3 117.15C129.933 116.083 130 115.183 130.5 114.45C131.033 113.717 131.917 113.35 133.15 113.35C134.05 113.35 134.75 113.567 135.25 114C135.75 114.4 136.15 115.05 136.45 115.95L145.45 142.65H143.45L152.85 116C153.183 115.1 153.6 114.433 154.1 114C154.6 113.567 155.25 113.35 156.05 113.35C156.85 113.35 157.483 113.567 157.95 114C158.417 114.433 158.817 115.117 159.15 116.05L168.25 142.65H166.5L175.65 115.95C175.95 115.083 176.35 114.433 176.85 114C177.35 113.567 178.033 113.35 178.9 113.35C179.967 113.35 180.75 113.717 181.25 114.45C181.75 115.183 181.817 116.083 181.45 117.15L170.9 146.75C170.567 147.65 170.133 148.317 169.6 148.75C169.067 149.183 168.35 149.4 167.45 149.4C166.55 149.4 165.833 149.183 165.3 148.75C164.767 148.317 164.333 147.633 164 146.7L155.3 121.9H156.45L147.65 146.75C147.317 147.65 146.883 148.317 146.35 148.75C145.85 149.183 145.15 149.4 144.25 149.4Z" fill="#248EDB"/>
                        <path d="M201.25 151.25V85.9375L170.312 55H132.5C128.853 55 125.356 56.4487 122.777 59.0273C120.199 61.6059 118.75 65.1033 118.75 68.75V151.25C118.75 154.897 120.199 158.394 122.777 160.973C125.356 163.551 128.853 165 132.5 165H187.5C191.147 165 194.644 163.551 197.223 160.973C199.801 158.394 201.25 154.897 201.25 151.25ZM170.312 75.625C170.312 78.36 171.399 80.9831 173.333 82.917C175.267 84.851 177.89 85.9375 180.625 85.9375H194.375V151.25C194.375 153.073 193.651 154.822 192.361 156.111C191.072 157.401 189.323 158.125 187.5 158.125H132.5C130.677 158.125 128.928 157.401 127.639 156.111C126.349 154.822 125.625 153.073 125.625 151.25V68.75C125.625 66.9266 126.349 65.178 127.639 63.8886C128.928 62.5993 130.677 61.875 132.5 61.875H170.312V75.625Z" fill="#248EDB"/>
                        </svg>`
        },
        pdf() {
            return `<svg width="320" height="220" viewBox="0 0 320 220" fill="none" xmlns="http://www.w3.org/2000/svg" class="object-cover w-full">
                    <rect width="320" height="220" fill="white"/>
                    <path d="M112 126C112 123.239 114.239 121 117 121H203C205.761 121 208 123.239 208 126V142C208 144.761 205.761 147 203 147H117C114.239 147 112 144.761 112 142V126Z" fill="#DB2F24"/>
                    <path d="M201.25 151.25V85.9375L170.312 55H132.5C128.853 55 125.356 56.4487 122.777 59.0273C120.199 61.6059 118.75 65.1033 118.75 68.75V151.25C118.75 154.897 120.199 158.394 122.777 160.973C125.356 163.551 128.853 165 132.5 165H187.5C191.147 165 194.644 163.551 197.223 160.973C199.801 158.394 201.25 154.897 201.25 151.25ZM170.312 75.625C170.312 78.36 171.399 80.9831 173.333 82.917C175.267 84.851 177.89 85.9375 180.625 85.9375H194.375V151.25C194.375 153.073 193.651 154.822 192.361 156.111C191.072 157.401 189.323 158.125 187.5 158.125H132.5C130.677 158.125 128.928 157.401 127.639 156.111C126.349 154.822 125.625 153.073 125.625 151.25V68.75C125.625 66.9266 126.349 65.178 127.639 63.8886C128.928 62.5993 130.677 61.875 132.5 61.875H170.312V75.625Z" fill="#DB2F24"/>
                    <path d="M139.384 143.192C138.888 143.192 138.504 143.056 138.232 142.784C137.976 142.496 137.848 142.104 137.848 141.608V127.64C137.848 127.128 137.984 126.744 138.256 126.488C138.528 126.216 138.912 126.08 139.408 126.08H145.192C147.048 126.08 148.48 126.544 149.488 127.472C150.496 128.4 151 129.696 151 131.36C151 133.024 150.496 134.328 149.488 135.272C148.48 136.2 147.048 136.664 145.192 136.664H140.92V141.608C140.92 142.104 140.792 142.496 140.536 142.784C140.28 143.056 139.896 143.192 139.384 143.192ZM140.92 134.24H144.712C145.8 134.24 146.624 134 147.184 133.52C147.744 133.024 148.024 132.304 148.024 131.36C148.024 130.416 147.744 129.704 147.184 129.224C146.624 128.744 145.8 128.504 144.712 128.504H140.92V134.24Z" fill="white"/>
                    <path d="M155.136 143C154.608 143 154.2 142.864 153.912 142.592C153.64 142.304 153.504 141.896 153.504 141.368V127.712C153.504 127.184 153.64 126.784 153.912 126.512C154.2 126.224 154.608 126.08 155.136 126.08H159.792C162.624 126.08 164.808 126.808 166.344 128.264C167.896 129.72 168.672 131.808 168.672 134.528C168.672 135.888 168.472 137.096 168.072 138.152C167.688 139.192 167.112 140.072 166.344 140.792C165.592 141.512 164.664 142.064 163.56 142.448C162.472 142.816 161.216 143 159.792 143H155.136ZM156.576 140.456H159.6C160.592 140.456 161.448 140.336 162.168 140.096C162.904 139.84 163.512 139.472 163.992 138.992C164.488 138.496 164.856 137.88 165.096 137.144C165.336 136.392 165.456 135.52 165.456 134.528C165.456 132.544 164.968 131.064 163.992 130.088C163.016 129.112 161.552 128.624 159.6 128.624H156.576V140.456Z" fill="white"/>
                    <path d="M173.369 143.192C172.873 143.192 172.482 143.056 172.194 142.784C171.922 142.496 171.785 142.088 171.785 141.56V127.712C171.785 127.184 171.922 126.784 172.194 126.512C172.482 126.224 172.889 126.08 173.417 126.08H181.794C182.21 126.08 182.521 126.184 182.729 126.392C182.937 126.6 183.042 126.896 183.042 127.28C183.042 127.68 182.937 127.992 182.729 128.216C182.521 128.424 182.21 128.528 181.794 128.528H174.858V133.304H181.289C181.689 133.304 181.993 133.408 182.201 133.616C182.425 133.824 182.537 134.12 182.537 134.504C182.537 134.904 182.425 135.216 182.201 135.44C181.993 135.648 181.689 135.752 181.289 135.752H174.858V141.56C174.858 142.648 174.361 143.192 173.369 143.192Z" fill="white"/>
          </svg>`
        },
        unKnown() {
            return `<svg width="320" height="220" viewBox="0 0 320 220" fill="none" xmlns="http://www.w3.org/2000/svg" class="object-cover w-full">
                        <rect width="320" height="220" fill="white"/>
                        <path d="M201.25 151.25V85.9375L170.312 55H132.5C128.853 55 125.356 56.4487 122.777 59.0273C120.199 61.6059 118.75 65.1033 118.75 68.75V151.25C118.75 154.897 120.199 158.394 122.777 160.973C125.356 163.551 128.853 165 132.5 165H187.5C191.147 165 194.644 163.551 197.223 160.973C199.801 158.394 201.25 154.897 201.25 151.25ZM170.312 75.625C170.312 78.36 171.399 80.9831 173.333 82.917C175.267 84.851 177.89 85.9375 180.625 85.9375H194.375V151.25C194.375 153.073 193.651 154.822 192.361 156.111C191.072 157.401 189.323 158.125 187.5 158.125H132.5C130.677 158.125 128.928 157.401 127.639 156.111C126.349 154.822 125.625 153.073 125.625 151.25V68.75C125.625 66.9266 126.349 65.178 127.639 63.8886C128.928 62.5993 130.677 61.875 132.5 61.875H170.312V75.625Z" fill="#BCBCBC"/>
                        <path d="M127 105C127 103.343 128.343 102 130 102H182C183.657 102 185 103.343 185 105V106C185 107.657 183.657 109 182 109H130C128.343 109 127 107.657 127 106V105Z" fill="#CBCBCB"/>
                        <path d="M127 122C127 120.343 128.343 119 130 119H176C177.657 119 179 120.343 179 122V123C179 124.657 177.657 126 176 126H130C128.343 126 127 124.657 127 123V122Z" fill="#CBCBCB"/>
                        <path d="M127 139C127 137.343 128.343 136 130 136H162C163.657 136 165 137.343 165 139V140C165 141.657 163.657 143 162 143H130C128.343 143 127 141.657 127 140V139Z" fill="#CBCBCB"/>
                    </svg>`
        },
        getFile() {
            try {
                if (t.mime_type.startsWith("image")) return `<img src="${t.url}" alt="${t.name}" class="object-cover w-full" loading="lazy">`;
                if (t.name.toLowerCase().endsWith(".pdf")) return this.pdf();
                if (t.name.toLowerCase().endsWith(".xls") || t.name.toLowerCase().endsWith(".xlsx")) return this.xls();
                if (t.name.toLowerCase().endsWith(".doc") || t.name.toLowerCase().endsWith(".docx")) return this.word()
            } catch {}
            return this.unKnown()
        }
    }
}

function N({
               state: t,
               statePath: s,
               minSize: c,
               maxSize: h,
               maxFiles: u,
               isMultiple: _,
               isDeletable: H,
               isDisabled: W,
               isDownloadable: E,
               uploadingMessage: L,
               changeNameToAlt: B,
               isReorderable: b,
               acceptedFileTypes: V,
               hasCustomPropertiesAction: D,
               deleteUploadedFileUsing: S,
               getUploadedFilesUsing: $,
               removeUploadedFileUsing: k,
               customPropertyActionName: M,
               reorderUploadedFilesUsing: z
           }) {
    return {
        state: t,
        statePath: s,
        customPropertyActionName: M,
        hasCustomPropertiesAction: D,
        isDeletable: H,
        isReorderable: b,
        lastState: null,
        uploadFiles: [],
        uploadedFileIndex: {},
        editingFile: {},
        startUpload: !1,
        fileKeyIndex: {},
        progress: 0,
        _startSwipeX: 0,
        stopDragging: !0,
        getHumanSize(e) {
            return w(e)
        },
        uploadUsing: (e, i, r, n, d, p) => {
            this.$wire.upload(`${s}.${e}`, i, g => {
                r(p)
            }, () => {
                n(p)
            }, g => {
                d(p, g)
            })
        },
        getFileName: function(e) {
            if (e.name.startsWith("blob:") || e.name.startsWith("livewire:")) return e.name;
            if (B) return e.alt;
            let i = e.name.lastIndexOf("/");
            return i !== -1 ? e.name.slice(i + 1) : e.name
        },
        getContentImage(e) {
            return y(e).getFile()
        },
        saveFilesUsing(e) {
            let i = this.$refs.galleryImages,
                r = function(l) {
                    let o = l.uploadFiles.filter(a => a.is_success === !1).length,
                        f = l.uploadFiles.filter(a => a.error === !0).length;
                    o - f === 0 && (l.dispatchFormEvent("form-processing-finished"), f && (l.uploadFiles = l.uploadFiles.filter(a => !a.error).map(a => (a.error = !1, a))), l.startUpload = !1)
                },
                n = l => {
                    this.uploadFiles[l].is_success = !0, this.uploadFiles[l].progress = 0, r(this)
                },
                d = l => {
                    this.uploadFiles[l].progress = 0, this.uploadFiles[l].error = !0, r(this)
                },
                p = (l, o) => {
                    this.uploadFiles[l].progress = o.detail.progress
                },
                g = e.length,
                U = this.uploadFiles.length,
                C = 0;
            if (g) {
                if (!v(U, u, g)) {
                    new FilamentNotification().title(`Max [${u}] Files reach `).danger().send();
                    return
                }
                this.startUpload || this.dispatchFormEvent("form-processing-started", {
                    message: L
                }), this.startUpload = !0;
                for (let l of Array.from(e)) {
                    if (F(l).fileType(V).maxSize(h).minSize(c).check()) {
                        new FilamentNotification().title(`File "${l.name}" invalid`).warning().send();
                        continue
                    }
                    let o = m(l, x());
                    o && (this.uploadFiles.push({
                        ...o
                    }), this.uploadUsing(o.filekey, l, n, d, p, this.uploadFiles.length - 1), C++)
                }
                setTimeout(() => {
                    i.scrollTo({
                        left: i.scrollWidth,
                        behavior: "smooth"
                    })
                }, 30), C === 0 && (this.startUpload = !1, this.dispatchFormEvent("form-processing-finished"))
            }
        },
        laFileInput: {
            async "@change"() {
                let e = this.$event.target.files;
                await this.saveFilesUsing(e)
            }
        },
        onScrolling: {
            "@wheel.stop"(e) {
                let i = Object.entries(this.uploadFiles).length,
                    r = this.$refs.galleryImages,
                    n = this.$refs.ulGalleryWrapper;
                if (i * 320 > r.clientWidth) {
                    let d = e.deltaY < 0 ? -280 : 280;
                    (e.deltaY > 0 && r.scrollLeft >= 0 && r.scrollLeft + r.clientWidth < n.clientWidth || e.deltaY < 0 && r.scrollLeft > 0) && (e.preventDefault(), r.scrollTo({
                        left: r.scrollLeft + d,
                        behavior: "smooth"
                    }))
                }
            }
        },
        pointerNone: {
            "@pointerenter"(e) {
                let i = this.$refs.galleryImages;
                i.style.pointerEvents = "none"
            },
            "@pointerleave"(e) {
                let i = this.$refs.galleryImages;
                i.style.pointerEvents = "auto"
            }
        },
        dropZone: {
            "@click.prevent.stop"() {
                this.$refs.laFileInput.click()
            },
            "@dragover.prevent.stop"() {
                this.$event.target.classList.contains("wm-json-media-dropzone")
            },
            async "@drop.prevent.stop"() {
                this.$event.target.classList.contains("wm-json-media-dropzone") && (await this.saveFilesUsing(this.$event.dataTransfer.files), this.$refs.dropzone.classList.remove("wm-dropzone"))
            },
            "@dragenter.prevent.stop"() {
                this.$refs.dropzone.classList.add("wm-dropzone")
            },
            "@dragleave.prevent.stop"() {
                return this.$event.target === this.$refs.dropzone && this.$refs.dropzone.classList.remove("wm-dropzone"), !1
            }
        },
        leftArrow: {
            "@click.stop"() {
                let e = this.$refs.galleryImages;
                e.scrollLeft - e.clientWidth < e.scrollWidth && e.scroll({
                    left: e.scrollLeft - 300,
                    behavior: "smooth"
                })
            }
        },
        rightArrow: {
            "@click.stop"() {
                let e = Object.entries(this.uploadFiles).length,
                    i = this.$refs.galleryImages;
                i.scrollLeft < 0 && i.scroll({
                    left: i.scrollLeft + 300,
                    behavior: "smooth"
                })
            }
        },
        removeUploadFile: async function(e, i) {
            await k(e), this.uploadFiles.splice(i, 1)
        },
        deleteUploadFile: async function(e, i) {
            await S(e), this.uploadFiles.splice(i, 1)
        },
        getImageWrapperElementFromKey(e) {
            return this.$refs.galleryImages.querySelector(`div[id="id_${e.replaceAll("-","")}"]`)
        },
        getUploadedFiles: async function() {
            let e = await $();
            this.fileKeyIndex = e ?? {}, this.uploadedFileIndex = Object.entries(this.fileKeyIndex).filter(([i, r]) => r?.url).reduce((i, [r, n]) => (i[n.url] = r, i), {})
        },
        async getFiles() {
            return await this.getUploadedFiles(), Object.entries(this.fileKeyIndex).reduce((e, [i, r]) => (r.error = !1, r.is_success = !0, r.is_new = !1, r.filekey = i, e.push({
                ...r
            }), e), [])
        },
        getUpdateFileEntries: function() {
            return Object.entries(this.state).map((e, i) => (delete e.deleted, {
                key: e
            }))
        },
        dispatchFormEvent: function(e, i = {}) {
            this.$el.closest("form")?.dispatchEvent(new CustomEvent(e, {
                composed: !0,
                cancelable: !0,
                detail: i
            }))
        },
        canUpload: function() {
            return u ? Object.entries(this.uploadFiles).length < u : !0
        },
        init() {
            this.$watch("state", async () => {
                if (this.state !== void 0) {
                    if (this.state !== null && Object.values(this.state).filter(e => e.file.startsWith("livewire-file:")).length) {
                        this.lastState = null;
                        return
                    }
                    JSON.stringify(this.getUpdateFileEntries()) !== this.lastState && (this.lastState = JSON.stringify(this.getUpdateFileEntries()), this.uploadFiles = await this.getFiles())
                }
            }), this.$watch("sortKeys", async () => {
                await z(this.sortKeys)
            }), this.$nextTick(async () => {
                this.uploadFiles = await this.getFiles()
            })
        },
        dropcheck: 0,
        usedKeyboard: !1,
        originalIndexBeingDragged: null,
        indexBeingDragged: null,
        indexBeingDraggedOver: null,
        preDragOrder: null,
        sortKeys: null,
        dragstart(e) {
            this.preDragOrder = [...this.uploadFiles], this.indexBeingDragged = e.target.getAttribute("x-ref"), this.originalIndexBeingDragged = e.target.getAttribute("x-ref"), e.dataTransfer.dropEffect = "copy"
        },
        updateListOrder(e) {
            if (this.indexBeingDragged) {
                this.indexBeingDraggedOver = e.target.getAttribute("x-ref");
                let i = this.indexBeingDragged,
                    r = this.indexBeingDraggedOver;
                if (this.indexBeingDragged === r || i === r) return;
                this.move(i, r), this.indexBeingDragged = r
            }
        },
        setParentDraggable(e) {
            e.target.closest("li").setAttribute("draggable", !0)
        },
        setParentNotDraggable(e) {
            e.target.closest("li").setAttribute("draggable", !1)
        },
        resetState() {
            this.dropcheck = 0, this.indexBeingDragged = null, this.preDragOrder = [...this.uploadFiles], this.indexBeingDraggedOver = null, this.originalIndexBeingDragged = null
        },
        revertState() {
            this.uploadFiles = this.preDragOrder.length ? this.preDragOrder : this.uploadFiles, this.resetState()
        },
        rePositionPlaceholder() {
            this.uploadFiles = [...this.preDragOrder], this.indexBeingDragged = this.originalIndexBeingDragged
        },
        move(e, i) {
            let r = this.uploadFiles;
            if (i >= r.length) {
                let n = i - r.length + 1;
                for (; n--;) r.push(void 0)
            }
            r.splice(i, 0, r.splice(e, 1)[0]), this.uploadFiles = r
        },
        getSort() {
            if (this.indexBeingDragged === this.originalIndexBeingDragged) return null;
            this.sortKeys = this.uploadFiles.map(e => e.filekey)
        }
    }
}
export {
    N as galleryFileUpload
};
