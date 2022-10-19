<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/scripts/dental/dental.css">
  <style>
      [_nghost-gep-c114] .dx-tab[_ngcontent-gep-c114] .dx-icon[_ngcontent-gep-c114] {
        display: block;
        margin: 0 auto;
        width: 25px;
        height: 25px;
        line-height: 25px;
        border-radius: 4px
      }

      [_nghost-gep-c114] .container[_ngcontent-gep-c114] {
        height: 100vh
      }

      [_nghost-gep-c114] .drawer-template[_ngcontent-gep-c114] {
        width: 70px;
        height: 100vh
      }

      [_nghost-gep-c114] .dx-menu-item[_ngcontent-gep-c114] {
        text-align: center;
        width: 70px;
        height: 70px;
        padding-top: 14px
      }

      [_nghost-gep-c114] .dx-menu-item[_ngcontent-gep-c114] i[_ngcontent-gep-c114],
      [_nghost-gep-c114] .dx-menu-item[_ngcontent-gep-c114] img[_ngcontent-gep-c114] {
        display: block;
        width: 22px;
        margin: 0 auto 4px;
        border-radius: 4px;
        height: 22px;
        line-height: 22px
      }

      [_nghost-gep-c114] .dx-menu-item[_ngcontent-gep-c114] img[_ngcontent-gep-c114] {
        margin-bottom: 0
      }

      [_nghost-gep-c114] .dx-menu-item[_ngcontent-gep-c114] i[_ngcontent-gep-c114] {
        background: var(--dx-color-light)
      }

      [_nghost-gep-c114] .dx-menu-item[_ngcontent-gep-c114] i.active[_ngcontent-gep-c114] {
        background: var(--dx-color-primary);
        color: var(--dx-color-primary-contrast)
      }

      [_nghost-gep-c114] .dx-menu-item[_ngcontent-gep-c114] span[_ngcontent-gep-c114] {
        font-weight: 700;
        font-size: .7rem
      }

      [_nghost-gep-c114] .user-actions[_ngcontent-gep-c114] {
        position: absolute;
        bottom: 3px;
        width: 100%
      }

      [_nghost-gep-c114] .user-actions[_ngcontent-gep-c114] .avatar[_ngcontent-gep-c114] {
        display: block;
        margin: 0 auto;
        width: 36px;
        height: 36px;
        cursor: pointer
      }
    </style>
    <style>
      [_nghost-gep-c27] {
        display: block;
      }
    </style>
    <style>
      [_nghost-gep-c107] .search-box[_ngcontent-gep-c107] {
        padding: 16px 16px 0
      }

      [_nghost-gep-c107] .sidebar-actions[_ngcontent-gep-c107] {
        background: #f7f7f7;
        padding: 16px;
        border-bottom: 1px solid var(--dx-color-light)
      }

      [_nghost-gep-c107] .patients[_ngcontent-gep-c107] {
        position: absolute;
        overflow: hidden;
        top: 0;
        z-index: 11;
        left: 70px;
        height: 100%;
        width: 100%;
        transition: all .2s;
        opacity: 0 !important
      }

      [_nghost-gep-c107] .patients__content[_ngcontent-gep-c107] {
        background: #fff;
        width: 550px;
        height: 100%;
        transition: all .2s;
        margin-inline-start: -550px;
        box-shadow: 0 0 8px -4px #000
      }

      [_nghost-gep-c107] .patients__bg[_ngcontent-gep-c107] {
        background: rgba(255, 255, 255, .8);
        width: 100%;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        left: 0;
        transition: all .2s
      }

      [_nghost-gep-c107] .patients--opened[_ngcontent-gep-c107] {
        opacity: 1 !important
      }

      [_nghost-gep-c107] .patients--opened[_ngcontent-gep-c107] .patients__content[_ngcontent-gep-c107] {
        margin-inline-start: 0
      }

      [_nghost-gep-c107] .patients--opened[_ngcontent-gep-c107] .patients__bg[_ngcontent-gep-c107] {
        left: 550px
      }

      [_nghost-gep-c107] .patients.dx-rtl[_ngcontent-gep-c107] {
        left: 0px !important;
        right: 70px
      }

      [_nghost-gep-c107] .patients.dx-rtl[_ngcontent-gep-c107] .patients__content[_ngcontent-gep-c107] {
        margin-inline-end: -550px;
        margin-inline-start: 70px !important;
        box-shadow: -2px 0 8px -4px #000 !important
      }

      [_nghost-gep-c107] .patients.dx-rtl.patients--opened[_ngcontent-gep-c107] .patients__bg[_ngcontent-gep-c107] {
        right: 620px
      }
    </style>
    <style>
      [_nghost-gep-c36] {
        display: block;
      }
    </style>
    <style>
      [_nghost-gep-c129] .day-cell-time[_ngcontent-gep-c129] {
        font-size: .7rem;
        color: #ccc
      }

      [_nghost-gep-c129] .day-cell-resource-begin[_ngcontent-gep-c129],
      [_nghost-gep-c129] .day-cell-resource-inner[_ngcontent-gep-c129],
      [_nghost-gep-c129] .day-cell-resource-end[_ngcontent-gep-c129] {
        position: relative;
        height: 100%;
        background: var(--dx-color-primary-shade)
      }

      [_nghost-gep-c129] .day-cell-resource-begin[_ngcontent-gep-c129]:hover,
      [_nghost-gep-c129] .day-cell-resource-inner[_ngcontent-gep-c129]:hover,
      [_nghost-gep-c129] .day-cell-resource-end[_ngcontent-gep-c129]:hover {
        background: var(--dx-color-primary) !important;
        cursor: pointer !important
      }

      [_nghost-gep-c129] #scroll[_ngcontent-gep-c129],
      [_nghost-gep-c129] #list[_ngcontent-gep-c129] {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 100%
      }

      [_nghost-gep-c129] .resource-cell[_ngcontent-gep-c129] {
        line-height: 48px
      }

      [_nghost-gep-c129] .resource-cell-name[_ngcontent-gep-c129] {
        font-size: 1rem
      }
    </style>
    <style>
      [_nghost-gep-c119] as-split-area[_ngcontent-gep-c119] {
        max-height: 100vh
      }

      [_nghost-gep-c119] as-split-area[_ngcontent-gep-c119] .as-split-area-container[_ngcontent-gep-c119] {
        position: relative;
        height: 100%
      }
    </style>
    <style>
      [_nghost-gep-c138] .dx-toolbar-wrapper[_ngcontent-gep-c138] {
        display: block;
        box-shadow: 0 7px 9px -11px #000;
        margin-bottom: 16px;
        padding-bottom: 8px
      }
    </style>
    <style>
      [_nghost-gep-c117] {
        align-items: stretch;
        display: flex;
        flex-wrap: nowrap;
        height: 100%;
        justify-content: flex-start;
        overflow: hidden;
        width: 100%
      }

      [_nghost-gep-c117]>.as-split-gutter[_ngcontent-gep-c117] {
        align-items: center;
        background-color: #eee;
        display: flex;
        flex-grow: 0;
        flex-shrink: 0;
        justify-content: center
      }

      [_nghost-gep-c117]>.as-split-gutter.as-split-gutter-collapsed[_ngcontent-gep-c117] {
        flex-basis: 1px !important;
        pointer-events: none
      }

      [_nghost-gep-c117]>.as-split-gutter[_ngcontent-gep-c117]>.as-split-gutter-icon[_ngcontent-gep-c117] {
        background-position: 50%;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%
      }

      [_nghost-gep-c117]>.as-split-area {
        flex-grow: 0;
        flex-shrink: 0;
        overflow-x: hidden;
        overflow-y: auto
      }

      [_nghost-gep-c117]>.as-split-area.as-hidden {
        flex: 0 1 0px !important;
        overflow-x: hidden;
        overflow-y: hidden
      }

      .as-horizontal[_nghost-gep-c117] {
        flex-direction: row
      }

      .as-horizontal[_nghost-gep-c117]>.as-split-gutter[_ngcontent-gep-c117] {
        cursor: col-resize;
        flex-direction: row;
        height: 100%
      }

      .as-horizontal[_nghost-gep-c117]>.as-split-gutter[_ngcontent-gep-c117]>.as-split-gutter-icon[_ngcontent-gep-c117] {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAeCAYAAADkftS9AAAAIklEQVQoU2M4c+bMfxAGAgYYmwGrIIiDjrELjpo5aiZeMwF+yNnOs5KSvgAAAABJRU5ErkJggg==")
      }

      .as-horizontal[_nghost-gep-c117]>.as-split-area {
        height: 100%
      }

      .as-vertical[_nghost-gep-c117] {
        flex-direction: column
      }

      .as-vertical[_nghost-gep-c117]>.as-split-gutter[_ngcontent-gep-c117] {
        cursor: row-resize;
        flex-direction: column;
        width: 100%
      }

      .as-vertical[_nghost-gep-c117]>.as-split-gutter[_ngcontent-gep-c117] .as-split-gutter-icon[_ngcontent-gep-c117] {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAFCAMAAABl/6zIAAAABlBMVEUAAADMzMzIT8AyAAAAAXRSTlMAQObYZgAAABRJREFUeAFjYGRkwIMJSeMHlBkOABP7AEGzSuPKAAAAAElFTkSuQmCC")
      }

      .as-vertical[_nghost-gep-c117]>.as-split-area {
        width: 100%
      }

      .as-vertical[_nghost-gep-c117]>.as-split-area.as-hidden {
        max-width: 0
      }

      .as-disabled[_nghost-gep-c117]>.as-split-gutter[_ngcontent-gep-c117] {
        cursor: default
      }

      .as-disabled[_nghost-gep-c117]>.as-split-gutter[_ngcontent-gep-c117] .as-split-gutter-icon[_ngcontent-gep-c117] {
        background-image: url()
      }

      .as-transition.as-init[_nghost-gep-c117]:not(.as-dragging)>.as-split-area,
      .as-transition.as-init[_nghost-gep-c117]:not(.as-dragging)>.as-split-gutter[_ngcontent-gep-c117] {
        transition: flex-basis .3s
      }
    </style>
    <style>
      [_nghost-gep-c180] .sidebar-actions[_ngcontent-gep-c180] {
        background: #f7f7f7;
        padding: 16px;
        border-bottom: 1px solid var(--dx-color-light)
      }
    </style>
    <style>
      [_nghost-gep-c185] .sidebar-actions[_ngcontent-gep-c185] {
        background: #f7f7f7;
        padding: 16px;
        border-bottom: 1px solid var(--dx-color-light)
      }
    </style>
    <style>
      [_nghost-gep-c219] .dxm-tabs[_ngcontent-gep-c219] .dx-tab {
        padding-inline-start: 16px;
        padding-inline-end: 16px
      }
    </style>
    <style>
      [_nghost-gep-c224] .analytics-box[_ngcontent-gep-c224] {
        display: grid;
        grid-auto-columns: 1fr;
        grid-auto-flow: column;
        border-bottom: 1px solid var(--dx-color-light)
      }

      [_nghost-gep-c224] .analytics-box-buttons[_ngcontent-gep-c224] section[_ngcontent-gep-c224]:hover {
        cursor: pointer;
        background: var(--dx-color-light-shade)
      }

      [_nghost-gep-c224] .analytics-box[_ngcontent-gep-c224] section[_ngcontent-gep-c224] {
        flex: 1;
        padding: 16px
      }

      [_nghost-gep-c224] .analytics-box[_ngcontent-gep-c224] section[_ngcontent-gep-c224]>div[_ngcontent-gep-c224] {
        align-items: flex-start
      }

      [_nghost-gep-c224] .analytics-box[_ngcontent-gep-c224] section[_ngcontent-gep-c224] span[_ngcontent-gep-c224] {
        display: block
      }

      [_nghost-gep-c224] .analytics-box[_ngcontent-gep-c224] section[_ngcontent-gep-c224]:not(:last-child) {
        border-inline-end: 1px solid var(--dx-color-light)
      }

      [_nghost-gep-c224] .analytics-box__title[_ngcontent-gep-c224] {
        font-weight: 500;
        margin-bottom: 16px
      }

      [_nghost-gep-c224] .analytics-box__value[_ngcontent-gep-c224] {
        font-weight: 800
      }

      [_nghost-gep-c224] .analytics-box__value--sub[_ngcontent-gep-c224] {
        font-size: .7rem;
        margin-top: 4px
      }

      [_nghost-gep-c224] .analytics-box[_ngcontent-gep-c224] i.open[_ngcontent-gep-c224] {
        margin-inline-start: auto;
        margin-top: 22px;
        font-size: 18px;
        color: var(--dx-color-primary)
      }

      [_nghost-gep-c224] .analytics-box__summary[_ngcontent-gep-c224] {
        display: flex;
        align-items: center;
        padding-top: 8px
      }

      [_nghost-gep-c224] .analytics-box__summary[_ngcontent-gep-c224] section[_ngcontent-gep-c224] {
        padding: 0 8px;
        width: 33.3%
      }

      [_nghost-gep-c224] .analytics-box__summary[_ngcontent-gep-c224] section[_ngcontent-gep-c224]:first-child {
        padding-inline-start: 0
      }

      [_nghost-gep-c224] .analytics-box__summary[_ngcontent-gep-c224] section[_ngcontent-gep-c224]:last-child {
        padding-inline-end: 0
      }

      [_nghost-gep-c224] .analytics-box__summary-value[_ngcontent-gep-c224],
      [_nghost-gep-c224] .analytics-box__summary-title[_ngcontent-gep-c224] {
        text-align: center
      }

      [_nghost-gep-c224] .analytics-box__summary-value[_ngcontent-gep-c224] {
        display: block;
        font-weight: 800;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
      }
    </style>
    <style>
      [_nghost-gep-c223] {
        display: block;
      }
    </style>
    <style>
      [_nghost-gep-c73] .avatar[_ngcontent-gep-c73] {
        background: #e7f3fc;
        text-align: center;
        border-radius: 130px;
        width: 50px;
        height: 50px;
        text-transform: uppercase;
        color: #000;
        background-size: cover !important
      }

      [_nghost-gep-c73] .pointer[_ngcontent-gep-c73] {
        cursor: pointer
      }

      [_nghost-gep-c73] .avatar--small[_ngcontent-gep-c73] {
        width: 36px;
        height: 36px;
        line-height: 36px
      }

      [_nghost-gep-c73] .avatar--small[_ngcontent-gep-c73] .avatar__letters[_ngcontent-gep-c73] {
        line-height: 36px;
        font-size: .7rem;
        font-weight: 500
      }

      [_nghost-gep-c73] .hoveredState[_ngcontent-gep-c73] {
        background: var(--ion-color-dark) !important
      }

      [_nghost-gep-c73] .hoveredState[_ngcontent-gep-c73] .avatar__letters[_ngcontent-gep-c73] {
        display: none
      }

      [_nghost-gep-c73] .hoveredState[_ngcontent-gep-c73] ion-icon[_ngcontent-gep-c73] {
        font-size: 13px;
        padding-top: 9px;
        color: #fff
      }

      [_nghost-gep-c73] .avatar--xsmall[_ngcontent-gep-c73] {
        width: 24px;
        height: 24px;
        line-height: 21px
      }

      [_nghost-gep-c73] .avatar--xsmall[_ngcontent-gep-c73] .avatar__letters[_ngcontent-gep-c73] {
        line-height: 21px;
        font-size: .7rem;
        font-weight: 500
      }

      [_nghost-gep-c73] .avatar--xlarge[_ngcontent-gep-c73] {
        display: inline-block;
        height: 0;
        width: 100%;
        padding-bottom: 100%
      }

      [_nghost-gep-c73] .avatar--large[_ngcontent-gep-c73] {
        width: 96px;
        height: 96px;
        line-height: 96px
      }

      [_nghost-gep-c73] .avatar--large[_ngcontent-gep-c73] .avatar__letters[_ngcontent-gep-c73] {
        line-height: 96px;
        font-size: .7rem;
        font-weight: 500
      }

      [_nghost-gep-c73] .avatar__letters[_ngcontent-gep-c73] {
        position: relative;
        line-height: 50px;
        font-weight: 500;
        font-size: 14px
      }

      [_nghost-gep-c73] .avatar__img[_ngcontent-gep-c73] {
        border-radius: 50px;
        overflow: hidden
      }
    </style>
    <style>
      [_nghost-gep-c230] {
        display: block;
        height: 100%;
        overflow: hidden
      }

      [_nghost-gep-c230] .wrapper[_ngcontent-gep-c230] {
        height: 65px;
        padding: 14px 16px;
        box-shadow: 0 0 14px -8px #000
      }

      [_nghost-gep-c230] .dxm-button-checkbox[_ngcontent-gep-c230] {
        border: 0;
        border-radius: 0;
        border-top: 1px solid var(--dx-color-light);
        height: 37px
      }

      [_nghost-gep-c230] .dxm-button-checkbox[_ngcontent-gep-c230] .dx-button-content {
        padding: 7px !important
      }

      [_nghost-gep-c230] .dxm-button-checkbox[_ngcontent-gep-c230] .dx-checkbox-text {
        padding-inline-start: 8px;
        font-weight: 700;
        color: var(--dx-color-primary)
      }
    </style>
    <style>
      [_nghost-gep-c172] .dxm-radio-tabs[_ngcontent-gep-c172] {
        height: 35px;
        border: 1px solid var(--dx-color-light);
        border-radius: 4px
      }

      [_nghost-gep-c172] .dxm-radio-tabs[_ngcontent-gep-c172] .dx-radiobutton {
        line-height: 33px !important;
        padding: 0 8px;
        margin: 0;
        height: 32px !important;
        font-size: .8rem
      }

      [_nghost-gep-c172] .dxm-radio-tabs[_ngcontent-gep-c172] .dx-radiobutton:last-child .dx-radiobutton-icon-dot {
        border-color: var(--dx-color-danger) !important;
        background: var(--dx-color-danger) !important
      }

      [_nghost-gep-c172] .dxm-radio-tabs[_ngcontent-gep-c172] .dx-radiobutton:not(:last-child) {
        border-inline-end: 1px solid var(--dx-color-light)
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] {
        border: 0
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions.planned[_ngcontent-gep-c172] .dx-tab-selected {
        box-shadow: inset 0 -5px 0 var(--dx-color-danger)
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions.confirmed[_ngcontent-gep-c172] .dx-tab-selected {
        box-shadow: inset 0 -5px 0 var(--dx-color-success)
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions.existing[_ngcontent-gep-c172] .dx-tab-selected {
        box-shadow: inset 0 -5px 0 var(--dx-color-secondary)
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab {
        background: transparent !important;
        border-radius: 0 !important
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab img,
      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab i.caret {
        opacity: .3
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab img {
        width: 24px;
        display: block
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab img.existing {
        filter: hue-rotate(-29deg) brightness(1.15)
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab img.confirmed {
        filter: hue-rotate(236deg) brightness(1.15)
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab img.planned {
        filter: hue-rotate(122deg) brightness(1.15)
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab img.diagnoses {
        filter: brightness(1) saturate(0)
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab span {
        display: block;
        padding: 0 8px
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab.dx-tab-selected img,
      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab.dx-tab-selected i.caret {
        opacity: 1 !important
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab.dx-tab-selected:after {
        display: none !important
      }

      [_nghost-gep-c172] .dxm-tabs-teeth-actions[_ngcontent-gep-c172] .dx-tab i.caret {
        position: absolute;
        background: #fff;
        width: 12px;
        height: 12px;
        line-height: 5px;
        margin-inline-start: 7px;
        border-radius: 4px;
        border: 1px solid var(--dx-color-dark);
        top: 10px
      }

      [_nghost-gep-c172] .button-all[_ngcontent-gep-c172] span.dx-button-text,
      [_nghost-gep-c172] .button-status[_ngcontent-gep-c172] span.dx-button-text {
        font-weight: 500 !important;
        font-size: .8rem !important
      }

      [_nghost-gep-c172] .button-status[_ngcontent-gep-c172] {
        height: 35px
      }

      [_nghost-gep-c172] .button-status[_ngcontent-gep-c172] .dx-button-content,
      [_nghost-gep-c172] .button-status[_ngcontent-gep-c172] .dx-button-text {
        display: flex;
        align-items: center
      }

      [_nghost-gep-c172] .button-status[_ngcontent-gep-c172] span.dx-button-text:before {
        display: block;
        width: 20px;
        height: 20px;
        background: var(--dx-color-danger);
        border: 1px solid var(--dx-color-medium-shade);
        border-radius: 4px;
        margin-inline-end: 8px;
        content: " "
      }

      [_nghost-gep-c172] .button-status.existing[_ngcontent-gep-c172] span.dx-button-text:before {
        background: var(--dx-color-secondary)
      }

      [_nghost-gep-c172] .button-status.confirmed[_ngcontent-gep-c172] span.dx-button-text:before {
        background: var(--dx-color-success)
      }
    </style>
    <style>
      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-m g#surface path#m {
        fill: null !important;
      }

      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-o g#surface path#o {
        fill: null !important;
      }

      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-d g#surface path#d {
        fill: null !important;
      }

      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-l g#surface path#l {
        fill: null !important;
      }

      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-b g#surface path#b {
        fill: null !important;
      }

      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-ml g#surface path#ml {
        fill: null !important;
      }

      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-mb g#surface path#mb {
        fill: null !important;
      }

      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-dl g#surface path#dl {
        fill: null !important;
      }

      .restoration-6cafdc4e-4c1d-4c3b-93ce-38893c1ea736-db g#surface path#db {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-m g#surface path#m {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-o g#surface path#o {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-d g#surface path#d {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-l g#surface path#l {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-b g#surface path#b {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-ml g#surface path#ml {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-mb g#surface path#mb {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-dl g#surface path#dl {
        fill: null !important;
      }

      .restoration-a6c626dd-ef62-4a03-8656-fbc2b5ebd5f9-db g#surface path#db {
        fill: null !important;
      }

      .rootcanal-c2f21c21-42bc-48f7-9b74-50922505e9dd-r1 g#root path#r1 {
        fill: null !important;
      }

      .rootcanal-c2f21c21-42bc-48f7-9b74-50922505e9dd-r2 g#root path#r2 {
        fill: null !important;
      }

      .rootcanal-c2f21c21-42bc-48f7-9b74-50922505e9dd-r3 g#root path#r3 {
        fill: null !important;
      }

      .rootcanal-c2f21c21-42bc-48f7-9b74-50922505e9dd-rb1 g#root path#rb1 {
        fill: null !important;
      }

      .rootcanal-c2f21c21-42bc-48f7-9b74-50922505e9dd-rb2 g#root path#rb2 {
        fill: null !important;
      }

      .rootcanal-c2f21c21-42bc-48f7-9b74-50922505e9dd-rb3 g#root path#rb3 {
        fill: null !important;
      }

      .rootcanal-c32be38d-8f85-40ef-a4c3-83c5dee18870-r1 g#root path#r1 {
        fill: null !important;
      }

      .rootcanal-c32be38d-8f85-40ef-a4c3-83c5dee18870-r2 g#root path#r2 {
        fill: null !important;
      }

      .rootcanal-c32be38d-8f85-40ef-a4c3-83c5dee18870-r3 g#root path#r3 {
        fill: null !important;
      }

      .rootcanal-c32be38d-8f85-40ef-a4c3-83c5dee18870-rb1 g#root path#rb1 {
        fill: null !important;
      }

      .rootcanal-c32be38d-8f85-40ef-a4c3-83c5dee18870-rb2 g#root path#rb2 {
        fill: null !important;
      }

      .rootcanal-c32be38d-8f85-40ef-a4c3-83c5dee18870-rb3 g#root path#rb3 {
        fill: null !important;
      }

      .crown-0e65fad8-ac90-4c6c-811a-5c023814756a g#crown path {
        fill: null !important;
      }

      .crown-5a77620c-c291-48c2-b6a2-dbb0c5601cfc g#crown path {
        fill: null !important;
      }
    </style>
    <style>
      [_nghost-gep-c159] {
        display: block
      }

      @media screen and (min-height: 600px) {
        [_nghost-gep-c159] {
          display: flex;
          height: 100%;
          align-items: center;
          justify-content: center
        }
      }

      [_nghost-gep-c159] .button[_ngcontent-gep-c159] {
        display: block;
        cursor: pointer;
        border: 1px solid var(--dx-color-light);
        background: #fff !important;
        font-family: "Manrope", sans-serif;
        border-radius: 4px
      }

      [_nghost-gep-c159] .button[_ngcontent-gep-c159]:hover {
        background: var(--dx-color-light-shade) !important
      }

      [_nghost-gep-c159] .teeth-child-switch[_ngcontent-gep-c159] {
        position: absolute;
        margin-top: 191px;
        height: 44px;
        padding: 0 8px;
        font-weight: 700
      }

      [_nghost-gep-c159] .teeth-toggle[_ngcontent-gep-c159] {
        margin-inline-start: -65px;
        width: 40px !important;
        margin-inline-end: 16px;
        height: 30px !important
      }

      [_nghost-gep-c159] .teeth-toggle[_ngcontent-gep-c159] img[_ngcontent-gep-c159] {
        width: 24px;
        margin-top: 3px
      }

      [_nghost-gep-c159] .teeth-toggle-top[_ngcontent-gep-c159] {
        margin-top: 180px
      }

      [_nghost-gep-c159] .teeth-toggle-bottom[_ngcontent-gep-c159] {
        margin-top: 4px
      }

      [_nghost-gep-c159] .teeth-toggle-bottom[_ngcontent-gep-c159] img[_ngcontent-gep-c159] {
        transform: scale(-1)
      }

      [_nghost-gep-c159] .dental-chart[_ngcontent-gep-c159] {
        zoom: .85;
        margin: 0 auto;
        width: 900px
      }

      [_nghost-gep-c159] .dental-chart--child[_ngcontent-gep-c159] {
        width: 540px
      }

      [_nghost-gep-c159] .dental-chart__top[_ngcontent-gep-c159],
      [_nghost-gep-c159] .dental-chart__bottom[_ngcontent-gep-c159] {
        display: flex
      }

      [_nghost-gep-c159] .dental-chart__bottom[_ngcontent-gep-c159]>section[_ngcontent-gep-c159] {
        align-items: flex-end
      }

      [_nghost-gep-c159] .dental-chart[_ngcontent-gep-c159] .tooth__number[_ngcontent-gep-c159] {
        font-size: 1rem;
        text-align: center;
        font-weight: 600;
        font-family: "Manrope", sans-serif
      }

      [_nghost-gep-c159] .dental-chart[_ngcontent-gep-c159] .tooth__number--selected[_ngcontent-gep-c159] {
        background: var(--dx-color-primary);
        color: #fff
      }

      [_nghost-gep-c159] .dental-chart__section[_ngcontent-gep-c159] {
        display: flex
      }

      [_nghost-gep-c159] .dental-chart__section[_ngcontent-gep-c159] section[_ngcontent-gep-c159] {
        cursor: pointer
      }

      [_nghost-gep-c159] .dental-chart__section[_ngcontent-gep-c159] section.tooth--selected[_ngcontent-gep-c159],
      [_nghost-gep-c159] .dental-chart__section[_ngcontent-gep-c159] section[_ngcontent-gep-c159]:hover {
        background: var(--dx-color-primary-shade) !important
      }

      [_nghost-gep-c159] .dental-chart__section[_ngcontent-gep-c159] section[_ngcontent-gep-c159]:hover .canals__item--add[_ngcontent-gep-c159] {
        visibility: visible
      }

      [_nghost-gep-c159] .dental-chart__section[_ngcontent-gep-c159] section[_ngcontent-gep-c159]:hover .tooth__number[_ngcontent-gep-c159] {
        background: var(--dx-color-primary);
        color: #fff
      }

      [_nghost-gep-c159] .dental-chart__section--right[_ngcontent-gep-c159] {
        transform: scaleX(-1)
      }

      [_nghost-gep-c159] .dental-chart__section--right[_ngcontent-gep-c159] .tooth__number[_ngcontent-gep-c159],
      [_nghost-gep-c159] .dental-chart__section--right[_ngcontent-gep-c159] .diagnoses[_ngcontent-gep-c159],
      [_nghost-gep-c159] .dental-chart__section--right[_ngcontent-gep-c159] .canals[_ngcontent-gep-c159] {
        transform: scaleX(-1)
      }

      [_nghost-gep-c159] .dental-chart__tooth[_ngcontent-gep-c159] {
        display: block
      }

      [_nghost-gep-c159] .dental-chart__tooth--selected[_ngcontent-gep-c159]:not(.crown) g#surface[_ngcontent-gep-c159] {
        stroke: var(--dx-color-primary);
        stroke-width: .5
      }

      [_nghost-gep-c159] .teeth-arch[_ngcontent-gep-c159] {
        position: absolute;
        right: 30px;
        top: 185px;
        border-radius: 4px
      }

      [_nghost-gep-c159] .teeth-arch[_ngcontent-gep-c159] ion-item[_ngcontent-gep-c159] {
        width: 57px;
        --padding-start: 12px;
        --ion-safe-area-right: -5px;
        border-radius: 4px;
        margin-bottom: 8px
      }

      [_nghost-gep-c159] .teeth-arch[_ngcontent-gep-c159] ion-item.teeth-arch__bottom[_ngcontent-gep-c159] {
        transform: rotate(180deg)
      }

      [_nghost-gep-c159] .teeth-arch[_ngcontent-gep-c159] ion-item.selected[_ngcontent-gep-c159] ion-img[_ngcontent-gep-c159] {
        filter: invert(100%)
      }

      [_nghost-gep-c159] .dental-chart__diagnoses-list[_ngcontent-gep-c159] ion-label[_ngcontent-gep-c159] {
        font-size: 20px
      }

      [_nghost-gep-c159] .dental-chart__top[_ngcontent-gep-c159] .diagnoses[_ngcontent-gep-c159] {
        margin-top: 5px
      }

      [_nghost-gep-c159] .dental-chart__bottom[_ngcontent-gep-c159] .diagnoses[_ngcontent-gep-c159] {
        margin-bottom: 5px
      }

      [_nghost-gep-c159] .diagnoses[_ngcontent-gep-c159] {
        display: flex;
        justify-content: center;
        height: 20px;
        display: none
      }

      [_nghost-gep-c159] .diagnoses__item[_ngcontent-gep-c159] {
        font-size: .7rem;
        width: 20px;
        height: 20px;
        background: #de2e57;
        border-radius: 30px;
        display: block;
        color: #fff;
        line-height: 20px;
        text-align: center;
        margin-right: 2px
      }

      [_nghost-gep-c159] .diagnoses__item[_ngcontent-gep-c159]:last-child {
        margin-right: 0
      }
    </style>

<app-dental-chart-new _ngcontent-gep-c173="" _nghost-gep-c161="">
                                                                <app-chart-resto _ngcontent-gep-c161="" _nghost-gep-c159="">
                                                                  <div _ngcontent-gep-c159="" class="dental-chart ltr" style="pointer-events: initial;">
                                                              
                                                                    <!---->
                                                                    <div _ngcontent-gep-c159="" class="dental-chart__top">
                                                                      <button _ngcontent-gep-c159="" class="button teeth-toggle teeth-toggle-top">
                                                                        <img _ngcontent-gep-c159="" src="<?php echo base_url()?>/assets/teeth-arch.svg" height="20px">
                                                                      </button>
                                                                      <!---->
                                                                      <section _ngcontent-gep-c159="" class="dental-chart__section">
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t8">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="56" height="187" viewBox="0 0 56 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top8" transform="translate(-2.5 79.917)">
                                                                                  <g id="crown">
                                                                                    <path id="p1" d="M8.738,4S-2.45,24.646.494,33.678,12.762,50.559,19.338,47.011s11.188,0,11.188,0,6.183,6.344,13.446,0S56.116,36.2,54.348,23.831C53.241,16.3,52.772,10.375,48.826,3.856A59.459,59.459,0,0,0,29.219,0C19.135,0,8.738,4,8.738,4Z" transform="translate(3)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(0 5.789)">
                                                                                    <path id="rb3" d="M496.167,323.884s-5.653-51.1-13.863-51.172,1.88,12.82-3.423,26.776c-3.4,8.725-5.536,14.244-11.356,21.866A57.74,57.74,0,0,1,481,320.97c7.186.68,9.153.546,15.171,2.915Z" transform="translate(-444.381 -325.919)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb2" d="M499.377,298.369a21.307,21.307,0,0,1,0,7.987c-.667,3.981-1.778,8.941-2.795,10.839a.83.83,0,0,1-.421.36c-1.638.185-7.683-8.539-9.891-18.5-.817-3.685-2.064-9.748,1.258-11.792a2.486,2.486,0,0,1,.9-.289C492.905,285.627,499.377,298.369,499.377,298.369Z" transform="translate(-463.512 -338.54)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M477.46,304.661s-4.822-4.154-7.612-14.258c-2.31-8.366-2.566-8.295-4.55-12.4-4.253-8.8-9.19-3.443-9.19,7.8s-.073,38.443-.073,38.443a31.506,31.506,0,0,1,4.855-1.489c2.878-.65,6.731-1.4,6.731-1.4a76.4,76.4,0,0,0,5.126-7.35A81.837,81.837,0,0,0,477.46,304.661Z" transform="translate(-444.381 -326.01)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M477.124,264.054c-1.36-1.675,1.964,11.376-.929,21.548s-5.336,10.686-4.705,13.648c.364,1.726,6.491,1.815,9.9,0,2.311-1.222.614-6.3,1.028-16.468S478.484,265.727,477.124,264.054Z" transform="translate(-437.903 -310.435)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M493.093,292.028c-.541,6.213-2.412,10.837-2.839,10.906-.677.109-3.177-5.034-4.09-10.906-.338-2.172-2.872-7.621-1.5-8.828a.848.848,0,0,1,.371-.171C486.889,282.237,493.3,289.649,493.093,292.028Z" transform="translate(-458.537 -331.032)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M463.762,280.241c-1.66-6.013-1.818-12.159-3.242-15.107-3.057-6.325-3.344,4.144-3.344,12.23s1.9,25.408,3.971,24.941,7.118-7.537,7.059-9.474C468.114,289.585,465.128,285.186,463.762,280.241Z" transform="translate(-441.491 -309.93)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(-373.5 -159.417)">
                                                                                    <path id="p2" d="M376,1283h56" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h56" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(1.844 47.041)">
                                                                                    <path id="shape" d="M29.052.1C7.672-1.325-4.8,12.485,1.745,36.974,4.762,48.282,14.739,55.492,26.314,53.619c10.027-1.622,16.669-7.2,19.8-21.866C49.056,18.006,51.559,1.59,29.052.1Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M1.721,18.929a22.222,22.222,0,0,0,10.18.641l2.918-.641,2.53-.87V1.906L9.42-.391l-8.071,2.3S1.129,18.727,1.721,18.929Z" transform="translate(21.562 24.194) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.614.1A36.606,36.606,0,0,0,.883,1.329a.588.588,0,0,0-.322.335v16.3L8.6,20.205l7.966-2.24V.357s.179.065-.293,0C15.644.269,14.655.169,13.614.1Z" transform="translate(55.621 24.981) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M45.034,36s1.368-5.065,2.11-9.575A71.392,71.392,0,0,0,48,17.966H32l-2.762,9.669L32,35.966Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.7,17.966s.092-.158,0,.233c-1.1,4.613-1.195,9.823.623,17.054.008.036.184.713.184.713H16l2.189-8.67L16,17.966Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,0,2.076,9.292,0,18l8.109-2.222,6.362,1.791L16,18,13.238,9.631,16,0,8.109,2.2Z" transform="translate(37.656 25.542) rotate(90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M1.449,35.966s.217.715.3,1.008A22.614,22.614,0,0,0,15.352,52.605c.062.024.648.213.648.213V35.966Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M32,52.172s0-.077.2-.155c5.6-2.2,9.848-6.736,12.638-15.381.009-.027.248-.671.248-.671H32Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M48,17.467c-.042-7.9-3.222-14.9-15.222-16.952-.042-.007-.774,0-.774,0v17.45H48S48,17.723,48,17.467Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.911,1.465s-.179.055-.567.18C8.322,3.87,3.01,9.23.825,17.482c.03-.12-.141.484-.141.484H16Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(3.645 4.46)">
                                                                                    <g id="plaque" transform="translate(-3.645 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(3.109 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M.22,33.695s.048.125.161.406C3,40.728,11.449,45.714,17.264,43.018c5.869-2.721,9.984,0,9.984,0s5.55,5.6,12.031.736c4.347-3.263,8.437-5.928,9.84-10.581-.026.095.045-.165.045-.165Z" transform="translate(-0.494 -33.06)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(8.654 -10.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847s6.636-3.18,13.615-6.18c2.025-.873,2.924-4.04,5.463-4.04,2.129,0,4.4,3.684,6.773,4.512,7.468,2.6,14.121,5.707,14.121,5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M658.578,1654.583a216.412,216.412,0,0,1-1.152-28.752c.235-6.9.17-8.964.942-12.866s2.693-7.148,4.645-6.438,4.231,5.548,4.231,5.548,1.443-6.238,4.991-3.932,8.159,9.466,8.159,9.466-1.777-6.644-.773-10.207c.548-1.971,3.779-2.611,5.741.346,4.809,7.247,10.044,42.151,10.439,48.9.008.135.5,1.349.5,1.349s10.97,22.844,2.472,32.529c-8.671,9.882-11.739,12.313-19.307,7.125s-11.43,0-11.43,0a14.531,14.531,0,0,1-15.244-7.125c-5.439-9.306-.74-19.221-.74-19.221Z" transform="translate(-647.988 -1606.121)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M27.83.094C7.349-1.246-4.6,11.741,1.672,34.772c2.89,10.634,12.448,17.414,23.536,15.653,9.6-1.526,15.968-6.774,18.967-20.564C46.992,16.934,49.39,1.5,27.83.094Z" transform="translate(53.024 103.381) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(0 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-3.645 6.04)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(0 -2)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1699.767l3.378-13.128,4.962,7.687,6.891-14.761" transform="translate(-638.994 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(-0.266 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a77.838,77.838,0,0,1,10.753-3.3A67.868,67.868,0,0,1,32.5,13.4c13.463,0,27.855,5.186,27.855,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M60.351,18.583S45.959,13.4,32.5,13.4s-26,5.186-26,5.186" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-3.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(-0.266 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a77.838,77.838,0,0,1,10.753-3.3A67.868,67.868,0,0,1,32.5,13.4c13.463,0,27.855,5.186,27.855,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M60.351,18.583S45.959,13.4,32.5,13.4s-26,5.186-26,5.186" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant">
                                                                                      <path id="p1-12" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-56)">
                                                                                      <path id="p2-6" data-name="p2" d="M6.5,0,8.093,6.435,13,11,6.5,9.13,0,11,4.908,6.435Z" transform="translate(76.855 14.123)"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-6.189 -6.751)">
                                                                                      <path id="p1-13" data-name="p1" d="M8.05,3.64S-2.258,22.429.455,30.648s11.3,15.362,17.362,12.133,10.308,0,10.308,0a8.852,8.852,0,0,0,12.388,0C47.2,37.008,51.7,32.94,50.073,21.687c-1.02-6.856-1.452-12.245-5.088-18.178A55.361,55.361,0,0,0,26.92,0C17.63,0,8.05,3.64,8.05,3.64Z" transform="translate(7.989 4.544)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(0 -2)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.446-12.931s.147,14.879,1.5,24.393,3.91,13.661,3.91,13.661h16s4.39-3.753,5.853-13.661,0-25.971,0-25.971l-10.1,3.5S27.738-2.96,26.855-3.041s-3.464-9.768-3.772-11.469c-.051-.329-2.165-5.428-2.165-5.428Z"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(0 -2)">
                                                                                      <path id="p1-15" data-name="p1" d="M.578,33.685a1.993,1.993,0,0,0,.139.642c2.963,8.586,12.13,16.186,18.621,12.684,6.576-3.548,11.188,0,11.188,0s6.183,6.344,13.446,0c1.431-1.25,2.769-2.427,4.2-3.822.275-.267.822-.959.822-.959s-3.15-2.288-13.5-4.9c-6.99-1.762-12.107,2.964-19.737,1.856C9.117,38.223.578,33.685.578,33.685Z" transform="translate(-0.645 -1.46)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(9.223 -61.398)">
                                                                                      <path id="p5" d="M806.3,381.864l-1.1,11.619s6.1,5.4,11.189,7.4,3.278,1.957,8.5,0,12.577-7.9,12.577-7.9l-.388-4.7Z" transform="translate(-803 -333.457)"></path>
                                                                                      <path id="p4" d="M808.83,365.231l-1.958,7.545L836,378.856l-1.657-8.133Z" transform="translate(-803 -327.766)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.451,348.775l-1.622,7.542,25,5.259-1.364-8.15Z" transform="translate(-803 -322.137)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M812.186,332.484l-1.207,7.445,20.74,4.168-1.659-7.839Z" transform="translate(-803 -316.563)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M829.419,324.23l-16.668-3.324s.528-14.042,8.635-13.322S829.419,324.23,829.419,324.23Z" transform="translate(-803 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(2 -9)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877h44" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877h44" transform="translate(2 4)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877h44" transform="translate(0 8)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877h44" transform="translate(2 11)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877h44" transform="translate(0 16)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877h44" transform="translate(2 20)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877h44" transform="translate(0 24)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877h44" transform="translate(2 27)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877h44" transform="translate(0 31)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877h44" transform="translate(2 35)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877h44" transform="translate(0 39)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877h44" transform="translate(2 42)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l48,32" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(13.801 11.408)">
                                                                                      <path id="p1-17" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 18 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t7">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="61" height="187" viewBox="0 0 61 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top7" transform="translate(-2.553 88.051)">
                                                                                  <g id="crown" transform="translate(0 -8)">
                                                                                    <path id="main" d="M7.28,2.856C6.548,6.058-4.356,28.983,1.96,36.77s8.444,12.3,13.364,11.5,8.511-7.351,17.154-.946,16.69-2.184,16.69-2.184,15.359-8.37,8.51-25.84S51.3,7.222,51.362,2.855,8.011-.347,7.28,2.856Z" transform="translate(3)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(0 2.561)">
                                                                                    <path id="rb3" d="M782.726,297.3s-.416-27.945-4.19-42.961-6.735-22.934-10.9-17.092c-2.306,3.231.4,14.811-1.468,25.466-1.442,8.2-6.254,21.33-6.254,21.33s-1.2,11.2,1.175,11.142A108.769,108.769,0,0,1,782.73,297.3Z" transform="translate(-728.368 -305.437)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb2" d="M793.2,256.519c3.874,9.709-.453,27.241-6,29.078s-9.375-31.548-7.874-38.817S789.324,246.81,793.2,256.519Z" transform="translate(-755.384 -311.723)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M741.007,247.352c-.541,11.736-2.034,44.218-2.307,50.159l-.028.6c7.1-1.217,10.1-1.959,17.649-2.2h4.408s-.636.585-.547-3.775,2.2-10.912.9-13.666c-2.372-5.051-7.863-17.327-9.2-22.7C748.1,240.606,741.6,234.469,741.007,247.352Z" transform="translate(-728.368 -306.17)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M455.733,308.876c1.291,2.037,9.37,2.181,10.18,0a83.3,83.3,0,0,0,0-16.082c-.637-7.1-1.5-14.675-1.929-17.836-.446-3.318-2.6-8.894-3.86-3.846-.709,2.831.87,13.1,0,22.705C459.479,300.936,455.166,307.981,455.733,308.876Z" transform="translate(-417.438 -327.421)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M493.093,293.518c-.541,7.407-2.412,12.919-2.839,13-.677.13-3.177-6-4.09-13-.338-2.589-1.745-11.345-.371-12.782a.8.8,0,0,1,.371-.2C488.016,279.586,493.3,290.685,493.093,293.518Z" transform="translate(-457.484 -341.846)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M461.563,284.058c-.811-10.385-3.291-13.988-4.388-12.762s0,11.992,0,22.053-1.071,17.348,0,18.19,10.838-.555,10.779-2.991c-.022-.991-.833-2.1-1.94-3.765a18.551,18.551,0,0,1-2.139-4.134C462.351,296.305,462.015,289.842,461.563,284.058Z" transform="translate(-440.438 -327.709)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(-373.447 -167.551)">
                                                                                    <path id="p2" d="M376,1283h61" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1" d="M376,1283h61" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(1.31 38.907)">
                                                                                    <path id="shape" d="M29.052.111C7.672-1.463-4.8,13.786,1.745,40.828,4.762,53.315,14.739,61.276,26.314,59.208c10.027-1.791,16.669-7.954,19.8-24.145C49.056,19.883,51.559,1.756,29.052.111Z" transform="translate(61.243 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412,21.334a20.214,20.214,0,0,0,10.18.707l2.918-.707,2.53-.961V2.537L8.111,0,.04,2.537S-.18,21.111.412,21.334Z" transform="translate(24.066 25.502) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052.11A33.31,33.31,0,0,0,.322,1.467C.1,1.537,0,1.837,0,1.837v18l8.034,2.474L16,19.838V.395s.179.072-.293,0C15.082.3,14.094.186,13.052.11Z" transform="translate(61.243 25.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,19.919s1.368-5.593,2.11-10.573A86.834,86.834,0,0,0,18.762,0h-16L0,10.677l2.762,9.2Z" transform="translate(41.405 38.78) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793.035S.885-.14.793.292C-.311,5.386-.4,11.139,1.416,19.124c.008.04.184.788.184.788H16.1l2.189-9.574L16.1.035Z" transform="translate(41.44 9.444) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,0,2.076,10.261,0,19.876l8.109-2.453L14.471,19.4,16,19.876l-2.762-9.241L16,0,8.109,2.432Z" transform="translate(41.405 25.542) rotate(90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,0S.217.789.3,1.114C2.266,9.267,7.2,15.491,13.9,18.374c.062.027.648.235.648.235V0Z" transform="translate(21.529 10.991) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,17.9s0-.085.2-.171C5.8,15.295,10.05,10.287,12.84.74c.009-.03.248-.74.248-.74H0Z" transform="translate(21.529 41.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,18.722C15.954,10,12.774,2.272.774,0,.732,0,0,0,0,0V19.273H16S16,19,16,18.722Z" transform="translate(60.678 41.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,0s-.179.061-.567.2C7.638,2.657,2.326,8.574.141,17.687c.03-.132-.141.534-.141.534H15.316Z" transform="translate(59.626 10.226) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(6.698 -3.674)">
                                                                                    <g id="plaque" transform="translate(-5.645 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(0.109 31.07)">
                                                                                      <path id="p1-2" data-name="p1" d="M.237,34.244s.048.125.161.406C3.014,41.277,8.9,47,14.713,44.308c5.869-2.721,2.745-3.64,8.579-3.235s6.838,7.067,14.756,4.853,14.582-9.4,15.985-14.051c-.026.095.045-.165.045-.165Z" transform="translate(-0.494 -33.06)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(5.654 -10.88)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654,1.847s6.636-3.18,13.615-6.18c2.025-.873,2.924-4.04,5.463-4.04,2.129,0,4.4,3.684,6.773,4.512,7.468,2.6,14.121,5.707,14.121,5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M656.831,1664.9s.845-20.772,1.4-37c.259-7.606.188-9.888,1.039-14.191s.356-6.92,2.509-6.137,7.329,11.829,7.329,11.829.484-16.627,4.4-14.084,10.059,13.514,10.059,13.514-.482-9.965.625-13.9c.6-2.174,4.168-2.88,6.332.381,5.3,7.994,9.6,49.13,10.037,56.579.009.149,0,4.918,0,4.918s12.42,23.366,3.047,34.049c-9.565,10.9-13.738,14.9-22.085,9.175s-12.657-.518-15.961-.427-7.254,1.517-13.254-8.748,0-22.8,0-22.8Z" transform="translate(-651.642 -1616.108)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M29.5.106C7.79-1.4-4.874,13.2,1.772,39.085,4.835,51.038,14.965,58.659,26.717,56.679c10.18-1.715,16.924-7.614,20.1-23.114C49.807,19.034,52.348,1.681,29.5.106Z" transform="translate(55.462 102.032) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(0 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-3.645 -5.96)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-1 -4)">
                                                                                      <path id="p1-7" data-name="p1" d="M664.635,1699.767l3.378-13.128,4.962,7.687,6.891-14.761" transform="translate(-638.994 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(-2.117 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a82.8,82.8,0,0,1,11.144-3.3,72.759,72.759,0,0,1,15.8-1.889c13.952,0,28.868,5.186,28.868,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M62.31,18.583S47.394,13.4,33.441,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-2.645 -3.46)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(-2.117 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a82.8,82.8,0,0,1,11.144-3.3,72.759,72.759,0,0,1,15.8-1.889c13.952,0,28.868,5.186,28.868,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M62.31,18.583S47.394,13.4,33.441,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-6.588 -5.903)">
                                                                                      <path id="p1-11" data-name="p1" d="M7.154,2.763S-2.433,22.458.248,30.683s9.584,15.36,15.573,12.129c2.156-1.163,4.781-2.882,7.415-2.756,3.85.178,7.323,3.055,7.323,3.055s7.362,5.479,13.976-.3,11.487-8.86,9.877-20.121C53.4,15.831,49.916,8.7,46.322,2.763c0,0-10.46-2.763-19.643-2.763S7.154,2.763,7.154,2.763Z" transform="translate(4.989 3.544)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-5.17 -3.117)">
                                                                                      <path id="p2-6" data-name="p2" d="M6.5,0,8.093,6.435,13,11,6.5,9.13,0,11,4.908,6.435Z" transform="translate(23.026 17.24)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(-4.113 -2)">
                                                                                      <path id="p1-12" data-name="p1" d="M13.547-13.025s-.1,1.891,0,5.244a167.533,167.533,0,0,0,1.619,19.243c1.552,9.514,4.486,13.661,4.486,13.661H38.01s5.037-3.753,6.716-13.661,1.8-26.893,1.8-26.893l-9.539,2.391s-7.141,10.081-8.153,10-3.486-4.936-3.839-6.637c-.058-.329-4.2-7.958-4.2-7.958Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-13" data-name="p1" d="M4.39,39.622s-.38-.136,1.5,2.17,2.812,4.133,5.686,6.666c3.188,2.819,5.9,1.219,9.826-.923,7.041-3.841,12,.923,12,.923a11.239,11.239,0,0,0,9.075,2.619c3.341-.591,6.088-2.738,8.507-4.672,1.044-.832,2.192-1.651,2.763-2.213.295-.289.881-.821.881-.821s-5.631-3-16.71-5.826c-7.484-1.908-12.963,3.209-21.133,2.009A38.743,38.743,0,0,0,4.39,39.622Z" transform="translate(-2.645 -1.46)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(9.223 -62.398)">
                                                                                      <path id="p5" d="M806.3,381.864l-1.119,11.074s6.117,5.945,11.21,7.942,3.278,1.957,8.5,0,12.506-7.434,12.506-7.434l-.317-5.166Z" transform="translate(-803 -333.457)"></path>
                                                                                      <path id="p4" d="M808.83,365.231l-1.958,7.545L836,378.856l-1.657-8.133Z" transform="translate(-803 -327.766)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.451,348.775l-1.622,7.542,25,5.259-1.364-8.15Z" transform="translate(-803 -322.137)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M812.186,332.484l-1.207,7.445,20.74,4.168-1.659-7.839Z" transform="translate(-803 -316.563)"></path>
                                                                                      <path id="p1-14" data-name="p1" d="M829.419,324.23l-16.668-3.324s.528-14.042,8.635-13.322S829.419,324.23,829.419,324.23Z" transform="translate(-803 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(2 -9)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877h44" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877h44" transform="translate(2 4)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877h44" transform="translate(0 8)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877h44" transform="translate(2 11)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877h44" transform="translate(0 16)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877h44" transform="translate(2 20)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877h44" transform="translate(0 24)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877h44" transform="translate(2 27)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877h44" transform="translate(0 31)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877h44" transform="translate(2 35)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877h44" transform="translate(0 39)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877h44" transform="translate(2 42)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l48,32" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(-2)">
                                                                                      <path id="p1-15" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(11.801 11.408)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 17 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t6">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="65" height="187" viewBox="0 0 65 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top6" transform="translate(1.875 82.01)">
                                                                                  <g id="crown" transform="translate(-1.366 -1.657)">
                                                                                    <path id="main" d="M60.625,4.143s3.912,7.98,3.158,24.879S52.6,49.578,50.475,49.722,37.895,49,32.891,44.422,22.231,48.085,17.633,49,1.563,42.187.448,32.654,3.81,2.664,3.81,2.664,6.548.577,13.5-.442A97.6,97.6,0,0,1,31.864-1.611,103.289,103.289,0,0,1,50.341.426C57.6,1.814,60.625,4.143,60.625,4.143Z" transform="translate(-0.27 1.657)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(0 27.884)">
                                                                                    <path id="rb3" d="M1076.01,280.246a93.241,93.241,0,0,1-3.125-34.465c1.794-19.556-17.173-30.828-18.062-30.718s-1.408,1.137-1.834,1.193a27.3,27.3,0,0,0,.325,6.259,35.268,35.268,0,0,1,1.223,7.264c.313,7.482-3.572,22.605-6.5,31.066s-5.213,2.775,0,14.744a146.481,146.481,0,0,1,16.282,1.543,69.26,69.26,0,0,1,11.691,3.114Z" transform="translate(-1016.563 -304.133)" fill="#f2ecbe" stroke="#707070" stroke-linecap="round" stroke-width="0.5"></path>
                                                                                    <path id="rb2" d="M1120.78,214.227a1.958,1.958,0,0,1,.23.459c.924,2.457-1.18-.495,1.355,10.72.608,2.69.481,12.507-1.586,22.82s-4.741,18.5-9.892,14.166-8.442-32.281-8.478-35.749c-.081-7.752,6.222-16.453,8.478-16.811S1119.28,212.074,1120.78,214.227Z" transform="translate(-1084.763 -303.193)" fill="#bcb57f" stroke="#707070" stroke-linecap="round" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M1033,225.448c-4.244-8.209-7.312-14.162-10.533-4.822s-5.082,16.854-2.958,26.61-1.119,32.256-1.119,32.256,3.013-2.5,15.615-3.305c2.877-.183,13.943-.334,13.943-.334l-2.689-6.782s2.046-2.267,1.085-4.639c-1.43-3.53-6.773-8.383-7.9-11.426C1034.68,242.829,1037.25,233.657,1033,225.448Z" transform="translate(-1016.563 -304.286)" fill="#f2ecbe" stroke="#707070" stroke-linecap="round" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M455.733,306.977c1.291,1.936,9.37,2.073,10.18,0a75.242,75.242,0,0,0,0-15.283c-.637-6.749.424-13.607,0-16.611-.446-3.153-2.6-8.452-3.86-3.655-.709,2.691-1.059,12.114-1.929,21.238C459.479,299.432,455.166,306.127,455.733,306.977Z" transform="translate(-417.076 -343.46)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M494.6,297c-.644,9.659-2.872,16.848-3.381,16.954-.807.169-3.783-7.828-4.87-16.954-.4-3.377,1.309-16.885,2.945-18.76a.945.945,0,0,1,.442-.266C491.94,276.745,494.845,293.308,494.6,297Z" transform="translate(-462.108 -364.94)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M460.616,282.775c-.811-9.869-2.344-12.662-3.441-11.5-.565.6-2.14,3.655-1.981,7.99.131,3.59,1.2,11.559,1.2,16.2,0,9.561-.284,13.259.787,14.058s10.838-.527,10.779-2.842c-.022-.942-.833-1.991-1.94-3.578a17.334,17.334,0,0,1-2.139-3.929,70.588,70.588,0,0,1-3.26-16.4Z" transform="translate(-448.062 -344.733)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(-377.875 -161.51)">
                                                                                    <path id="p2" d="M376,1283h65" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1" d="M376,1283h65" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(-2.566 44.948)">
                                                                                    <path id="shape" d="M29.052.115C7.672-1.523-4.8,14.352,1.745,42.506c3.017,13,12.995,21.288,24.569,19.135,10.027-1.865,16.669-8.281,19.8-25.138C49.056,20.7,51.559,1.828,29.052.115Z" transform="translate(63.69 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412,22.21a19.457,19.457,0,0,0,10.18.736l2.918-.736,2.53-1V2.641L8.111,0,.04,2.641S-.18,21.979.412,22.21Z" transform="translate(24.985 25.502) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052.115A32.067,32.067,0,0,0,.322,1.528C.1,1.6,0,1.912,0,1.912V20.653l8.034,2.576L16,20.653V.411s.179.075-.293,0C15.082.31,14.094.194,13.052.115Z" transform="translate(63.689 25.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,20.738s1.368-5.823,2.11-11.008A94.033,94.033,0,0,0,18.762,0h-16L0,11.116l2.762,9.577Z" transform="translate(43.037 38.78) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793.036S.885-.145.793.3C-.311,5.608-.4,11.6,1.416,19.909c.008.042.184.82.184.82H16.1l2.189-9.967L16.1.036Z" transform="translate(43.073 9.444) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,0,2.076,10.682,0,20.693l8.109-2.554L14.471,20.2,16,20.693l-2.762-9.62L16,0,8.109,2.532Z" transform="translate(43.037 25.542) rotate(90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,0S.217.822.3,1.159C2.266,9.648,7.2,16.128,13.9,19.129c.062.028.648.245.648.245V0Z" transform="translate(22.344 10.991) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,18.631s0-.089.2-.178C5.8,15.923,10.05,10.709,12.84.771c.009-.031.248-.771.248-.771H0Z" transform="translate(22.344 41.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,19.492C15.954,10.41,12.774,2.366.774,0,.732,0,0,0,0,0V20.065H16S16,19.786,16,19.492Z" transform="translate(63.102 41.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,0s-.179.063-.567.207C7.638,2.766,2.326,8.927.141,18.414c.03-.138-.141.556-.141.556H15.316Z" transform="translate(62.007 10.226) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(-0.523 -78.51)">
                                                                                    <g id="plaque" transform="translate(2.459 77.147)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712S18,16.868,26.807,14.4c3.81-1.067,7.526-7.231,17.08-7.654S65.02,12.712,65.02,12.712" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712S18,16.868,26.807,14.4c3.81-1.067,7.526-7.231,17.08-7.654S65.02,12.712,65.02,12.712" transform="translate(-8.424 -2.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712S18,16.868,26.807,14.4c3.81-1.067,7.526-7.231,17.08-7.654S65.02,12.712,65.02,12.712" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(1.031 111.86)">
                                                                                      <path id="p1-2" data-name="p1" d="M.212,34.244s-2.059.446-1.947.727C.846,41.6,8.844,49.724,14.585,47.028c5.793-2.721,6.363-5.95,12.122-5.545,2.131.15,2.733,1.778,5.4,3.274,3.822,2.147,9.976,4.452,14.963,3.222,7.916-1.953,9.922-9.652,11.307-14.306C58.347,33.767,53.363,31.709.212,34.244Z" transform="translate(1.74 -32.973)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(6.025 70.997)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654,1.847s8.226-3.18,16.878-6.18c2.51-.873,3.625-4.04,6.771-4.04,2.639,0,5.451,3.684,8.4,4.512,9.257,2.6,17.5,5.707,17.5,5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(0 14.218)">
                                                                                      <path id="p2-2" data-name="p2" d="M653.7,1669.857a119.246,119.246,0,0,0,1.84-21.178c-.1-7.372-2.5-14.706-1.84-20.589,1.572-13.974,2.72-11.391,3.635-15.794s.772-5.363,3.086-4.562,7.221,13.391,7.221,13.391,6.055-21.149,10.261-18.547a18.106,18.106,0,0,0,7.746,2.793s2.817,1.254,2.817,1.256,11.092,4.886,15.491,19.458c1.927,6.382.464,19.058,1.192,28.207.885,11.112,3.054,16.818,3.054,16.818s3.742,11.766,3.008,23.454-5.366,15.7-9.779,20.491a33.236,33.236,0,0,1-19.364-4.9c-8.972-5.856-13.143,8.309-21.107,3.432s-10.861-8.777-11.236-20.023c-.119-3.554,1-7.449,1.586-11.112C652.434,1675.465,653.7,1669.857,653.7,1669.857Z" transform="translate(-649.721 -1602.356)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M29.5.11C7.79-1.456-4.874,13.724,1.772,40.645,4.835,53.076,14.965,61,26.717,58.942c10.18-1.783,16.924-7.918,20.1-24.037C49.807,19.794,52.348,1.748,29.5.11Z" transform="translate(60.03 118.335) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(13.651 83)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(21.185 4)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(29.303 101.565)">
                                                                                      <path id="p1-7" data-name="p1" d="M664.635,1699.767l3.378-13.128,4.962,7.687,6.891-14.761" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(1.031 53)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a94.338,94.338,0,0,1,12-3.3A84.122,84.122,0,0,1,35.519,13.4c15.028,0,31.094,5.186,31.094,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M66.613,18.583S50.547,13.4,35.519,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(19.691)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(13.596 11.742) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(1.031 90.814)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a94.338,94.338,0,0,1,12-3.3A84.122,84.122,0,0,1,35.519,13.4c15.028,0,31.094,5.186,31.094,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M66.613,18.583S50.547,13.4,35.519,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(2.792 80.877)">
                                                                                      <path id="p1-11" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(2.994 80)">
                                                                                      <path id="p1-12" data-name="p1" d="M54.743,3.6s3.531,7.235,2.85,22.558S47.377,43.612,45.461,43.742s-12.151-1.7-16.667-5.851-9.621,3.321-13.771,4.151S.929,37.586-.077,28.943s2.6-27,2.6-27a38.75,38.75,0,0,1,9.686-2.5,87.694,87.694,0,0,1,16.576-1.06A92.811,92.811,0,0,1,45.461.232C52.01,1.49,54.743,3.6,54.743,3.6Z" transform="translate(-0.27 1.657)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(7.133 83.36)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(17.764 12.328)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(8.883 61.208)">
                                                                                      <path id="p1-13" data-name="p1" d="M13.558-13.025s-.123,1.891,0,5.244A134.341,134.341,0,0,0,15.59,11.462c1.947,9.514,5.631,13.661,5.631,13.661h23.04s6.321-3.753,8.428-13.661,2.293-26.815,2.293-26.815l-8.495,1.5S34.012-2.96,32.741-3.041s-4.018-3.1-6.781-6.26a30.684,30.684,0,0,1-4.274-6.368Z" transform="translate(-13.503 15.669)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(2.131 112.532)">
                                                                                      <path id="p1-14" data-name="p1" d="M3.97,42.792a35.169,35.169,0,0,0,5.1,5.6c2.614,2.149,5.916,3.959,8.781,3.733s8.557-4.865,8.557-4.865,3.528-1.306,4.725-.98A10.841,10.841,0,0,1,34.781,48.4a20.451,20.451,0,0,0,8.781,3.733c9.6,2.036,11.842-.992,14.622-3.168,1.2-.936,3.4-4.824,3.4-4.824S55.655,40.775,42.922,37.6c-8.6-2.146-14.9,3.609-24.289,2.26A23.6,23.6,0,0,0,3.97,42.792Z" transform="translate(-3.97 -37.115)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(14.186 19)">
                                                                                      <path id="p5" d="M806.3,381.864l-1.118,10.952s6.116,6.067,11.209,8.064,3.278,1.957,8.5,0,12.44-7.6,12.44-7.6l-.251-5Z" transform="translate(-805.182 -332.978)"></path>
                                                                                      <path id="p4" d="M808.83,365.231l-1.958,7.545L836,378.856l-1.657-8.133Z" transform="translate(-805.182 -327.288)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.451,348.775l-1.622,7.542,25,5.259-1.364-8.15Z" transform="translate(-805.182 -321.658)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M812.186,332.484l-1.207,7.445,20.74,4.168-1.659-7.839Z" transform="translate(-805.182 -316.084)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M829.419,324.23l-16.668-3.324s.528-14.042,8.635-13.322S829.419,324.23,829.419,324.23Z" transform="translate(-805.182 -307.556)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(4.011 14)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877h49.93" transform="translate(-2.855 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877h49.93" transform="translate(-0.55 62.487)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877h49.93" transform="translate(-2.855 67.097)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877h49.93" transform="translate(-0.55 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877h49.93" transform="translate(-2.855 76.317)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877h49.93" transform="translate(-0.55 80.927)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877h49.93" transform="translate(-2.855 85.537)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877h49.93" transform="translate(-0.55 88.994)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877h49.93" transform="translate(-2.855 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877h49.93" transform="translate(-0.55 98.214)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877h49.93" transform="translate(-2.855 102.824)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877h49.93" transform="translate(-0.55 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(1.802 28.194)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417,64.687-6.106" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(17.593 92.285)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 16 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t5">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="44.254" height="187" viewBox="0 0 44.254 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top5" transform="translate(-21.644 80.932)">
                                                                                  <g id="crown">
                                                                                    <path id="p1" d="M8.11,4.127C6.986,9.051-.43,18.593.02,30.288s-.337,11.8,11.237,15.7,8.652,4.822,14.158,2.77S45.079,38.9,43.056,26.7,36.764,10.18,36.089,4.127,9.235-.8,8.11,4.127Z" transform="translate(22)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(22 17.201)">
                                                                                    <path id="rb1" d="M1394.03,289.815s-8.513-71.485-19.21-70.693-8.608,70.887-8.608,70.887,1.616-1.764,7.127-2.4,11.093-.788,14.916-.138a12.777,12.777,0,0,1,5.775,2.342Z" transform="translate(-1358.081 -303.524)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M1358.42,214.808c-2.3.223,2.291,7.947,3.291,18.1,1.619,16.439,1.3,36.065,1.3,36.065s-.133.483,3.04,0,3.04-1.138,3.04-1.138,1.4-4.453,0-14.139-1.716-14.968-3.985-24.717S1359.29,214.721,1358.42,214.808Z" transform="translate(-1340.323 -291.166)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M1366.14,229.312c-6.158.6-2.883,44.317-2.883,44.317a23.794,23.794,0,0,0,4.238-.407c3.173-.483,3.1-.569,3.1-.569a154.4,154.4,0,0,0-3.1-16.014c-1.439-6.214-1.355-15.01-1.355-15.01S1367,229.228,1366.14,229.312Z" transform="translate(-1350.144 -292.389)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(-354.356 -160.432)">
                                                                                    <path id="p2" d="M376,1283h44" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h44" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(22.497 55.568)">
                                                                                    <path id="shape" d="M-52.017-82c3.286,2.459,6.792,3.838,8.568,7.043A21.184,21.184,0,0,1-41.277-63.84,34.68,34.68,0,0,1-43.741-52.4a20.573,20.573,0,0,1-6.81,9.581c-3.154,2.128-7.315,2.68-11.5,2.707-4.161.028-8.375-.442-11.847-2.377a20.376,20.376,0,0,1-8.11-9.092,22.321,22.321,0,0,1-2.28-11.936A25.759,25.759,0,0,1-80.1-74.487c2.1-3.283,3.1-3.2,6.2-5.792,3.075-2.6,8.216-7.911,11.823-7.829S-55.329-84.454-52.017-82Z" transform="translate(84.367 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M-54.677-72.112l-2.832,7.5,2.832,8.5-7.845-2.2-7.845,2.2,2.359-8.5-2.359-7.5,7.845,3.1Z" transform="translate(84.096 88.113)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M-78.434-46.175a40.3,40.3,0,0,1-3.577-5.407,22.321,22.321,0,0,1-2.28-11.936A25.759,25.759,0,0,1-80.1-74.487a13.25,13.25,0,0,1,4.45-4.424l5.014,6.8,2.373,7.565-2.373,8.435Z" transform="translate(84.367 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M-48.166-79.759c1.9,1.212,4,2.561,5.241,4.806A21.184,21.184,0,0,1-40.752-63.84,34.68,34.68,0,0,1-43.216-52.4a24.179,24.179,0,0,1-2.417,4.854l-8.79-8.615-2.848-8.412,2.848-7.542Z" transform="translate(83.842 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M-51.845-82c1.071.8,2.028,1.4,3.333,2.233l-6.264,7.68-7.845,3.065-7.845-3.065-5.027-6.8c.333-.24.942-.707,1.76-1.392,3.075-2.6,8.216-7.911,11.823-7.829S-55.157-84.454-51.845-82Z" transform="translate(84.195 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M-45.99-47.549a19.913,19.913,0,0,1-4.445,4.728c-3.154,2.128-7.315,2.68-11.5,2.707-4.161.028-8.375-.442-11.847-2.377a18.261,18.261,0,0,1-4.033-3.157c0,.005-.55-.465-.55-.465l7.845-10.041,7.845-2.158,7.845,2.158Z" transform="translate(84.251 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(15.789 3.445)">
                                                                                    <g id="plaque" transform="translate(1.263 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(0.109 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M-.828,33.278s.271,3.539,2.5,4.775c2.385,1.327,6.646,2.524,10,3.793,3.838,1.455,6.948,2.841,8.427,2.962a46.652,46.652,0,0,0,10.361-5.215c3.812-2.448,8.082-6.184,7.362-7C36.975,31.553,13.26,32.5-.828,33.278Z" transform="translate(8.509 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(13.601 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847S16.7-1.333,22-4.333c1.539-.873,2.222-4.04,4.15-4.04,1.617,0,3.341,3.684,5.146,4.512A113.011,113.011,0,0,1,42.025,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M661.667,1706.365a39.725,39.725,0,0,1-.624-17.805c.891-4.318,3.325-8.54,5.158-13.154.718-1.8,2.562-4.466,2.338-6.448-.9-7.97-.737-37.351,2.036-55.735,1.323-8.776,4.083-14.784,5.506-13.915,4.259,2.6,7.127,12.1,7.127,12.1l5.845,27.075,4.978,32.317s9.013,21.608,6.675,27.226c-1.531,3.68-5.452,8.284-10.031,11.69-2.027,1.512-4.078,3.149-6.693,3.361-.944.079-2.231,1.167-3.5,1.049-1.151-.106-1.8-1.165-3.213-1.495A66.321,66.321,0,0,1,661.667,1706.365Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M21.182.7C11.843.2,8.813,6.77,8.813,6.77S6.825,9.4,4.213,12.653c-2.014,2.5-4.692,5.484-4.3,8.6.252,2,4.638,7.127,4.638,7.127a27.568,27.568,0,0,0,7.618,8.564C15.882,39.7,21.888,42,26.876,41.35c7.292-.95,12.641-3.722,16.291-10.106.576-1,4.484-11.923.453-20.137C40.613,4.975,30.99,1.222,21.182.7Z" transform="translate(50.258 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(2 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-3.645 -5.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-0.379 -3)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1704.422l3.683-16.153,5.412,9.458,7.515-18.162" transform="translate(-638.994 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(6.977 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-2.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(6.977 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(4.134 2.639)">
                                                                                      <path id="p1-12" data-name="p1" d="M32.659,60.024s-19.653,3.9-18.612,8.571,22.775,6,22.775,10.122-22.775,6.367-22.775,6.367" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-13" data-name="p1" d="M7.105,3.616C6.121,7.93-.377,16.29.018,26.536s-.3,10.338,9.845,13.755,7.58,4.225,12.4,2.427S39.5,34.081,37.723,23.392,32.21,8.919,31.619,3.616,8.091-.7,7.105,3.616Z" transform="translate(10.894 1.566)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(24.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(4.943 -2)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.542-13.166s-.088,2.031,0,5.384c.128,4.9-3.068,13-2.193,19.011,1.384,9.514,2.192,13.76,2.192,13.76h16.37s1.066-3.36,2.563-13.268-1.731-27.391-1.731-27.391l-7.04.831s.044,11.789-.859,11.708-1.632-4.245-1.632-4.245l-1.766-7.859Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-15" data-name="p1" d="M7.474,39.247a7.939,7.939,0,0,0,2.47,6.266,12.288,12.288,0,0,0,2.234,1.178c2.441,1.293,6.97,2.382,10.888,3.9,2.382.923,3.877,2.46,6.561,2.133,2.154-.258,8.288-3.392,8.288-3.392s3.6-2.4,5.837-4.3a16.255,16.255,0,0,0,3.107-3.291s-3.841-4.158-12.169-3.713c-3.993.213-12.021,2.752-15.448,2.535C9.395,39.941,7.474,39.247,7.474,39.247Z" transform="translate(1.355 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(11.838 -70.25)">
                                                                                      <path id="p5" d="M806.154,381.864l-.639,11.043s4.984,5.976,9.41,7.973,2.849,1.957,7.388,0,10.847-7.831,10.847-7.831l-.253-4.77Z" transform="translate(-803 -322.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(13.801 11.408)">
                                                                                      <path id="p1-17" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 15 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t4">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="49.254" height="187" viewBox="0 0 49.254 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top4" transform="translate(-746.985 -115.867)">
                                                                                  <g id="crown" transform="translate(747.239 196.101)">
                                                                                    <path id="p1" d="M39.77,2.9s4.13,9.26,7.245,15.858a15.911,15.911,0,0,1,0,12.889S36.121,46.223,23.8,50.059.421,34.1.012,27.555,9.525,2.9,9.525,2.9A40.445,40.445,0,0,1,23.8,0C31.356,0,39.77,2.9,39.77,2.9Z" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(756.79 124.367)">
                                                                                    <path id="rb1" d="M922.656,160.509s-10.192-25.837-8.379-49.448.479-24.083-6.294-25.449a7.84,7.84,0,0,0-3.217.808,31.288,31.288,0,0,0-3.517,2.529c-2.441,2.157-4.143,12.9-6.32,23.936-2.057,10.424-.512,38.606-1.94,45.451-.032.164-.62,1.8-.62,1.8a48.538,48.538,0,0,1,14.188-2.122A73.186,73.186,0,0,1,922.656,160.509Z" transform="translate(-892.369 -85.612)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M904.089,137.553c2.137-.163-5.741-18.142-5.145-35.02s-.011-17.6-1.444-16.964-3.574,11.611-4.29,19.494c-.676,7.451-1.265,30.736-.628,32.489S901.953,137.716,904.089,137.553Z" transform="translate(-880.035 -69.513)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M900.953,100.521c.784-16.874,3.2-24.6,1.317-23.968s-5.142,16.082-6.084,23.968c-.889,7.451-1.626,22.107-1.909,28.783s2.057,6.012,4.158,6.006C901.71,135.377,900.169,117.4,900.953,100.521Z" transform="translate(-890.011 -66.684)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(371.239 36.367)">
                                                                                    <path id="p2" d="M376,1283h49" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h49" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(749.238 252.367)">
                                                                                    <path id="shape" d="M-50.252-82c3.466,2.459,7.163,3.838,9.035,7.043A20.253,20.253,0,0,1-38.926-63.84a33.157,33.157,0,0,1-2.6,11.438,20.645,20.645,0,0,1-7.182,9.581c-3.326,2.128-7.714,2.68-12.13,2.707-4.388.028-8.832-.442-12.494-2.377a20.8,20.8,0,0,1-8.552-9.092,21.335,21.335,0,0,1-2.4-11.936,24.977,24.977,0,0,1,4.416-10.969c2.212-3.283,3.27-3.2,6.535-5.792,3.243-2.6,8.664-7.911,12.468-7.829S-53.745-84.454-50.252-82Z" transform="translate(84.367 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M-53.821-72.112l-2.986,7.5,2.986,8.5-8.273-2.2-8.273,2.2,2.488-8.5-2.488-7.5,8.273,3.1Z" transform="translate(84.845 88.113)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M-78.111-46.175a40.229,40.229,0,0,1-3.772-5.407,21.335,21.335,0,0,1-2.4-11.936,24.977,24.977,0,0,1,4.416-10.969,13.651,13.651,0,0,1,4.693-4.424l5.288,6.8,2.5,7.565-2.5,8.435Z" transform="translate(84.367 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M-47.669-79.759c2.008,1.212,4.215,2.561,5.527,4.806A20.253,20.253,0,0,1-39.85-63.84,33.157,33.157,0,0,1-42.45-52.4,23.7,23.7,0,0,1-45-47.548l-9.269-8.615-3-8.412,3-7.542Z" transform="translate(85.292 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M-50.555-82c1.13.8,2.138,1.4,3.514,2.233l-6.606,7.68-8.273,3.065-8.273-3.065-5.3-6.8c.351-.24.993-.707,1.856-1.392,3.243-2.6,8.664-7.911,12.468-7.829S-54.048-84.454-50.555-82Z" transform="translate(84.67 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M-44.224-47.549a20.389,20.389,0,0,1-4.688,4.728c-3.326,2.128-7.714,2.68-12.13,2.707-4.388.028-8.832-.442-12.494-2.377a19.161,19.161,0,0,1-4.253-3.157c0,.005-.58-.465-.58-.465l8.273-10.041,8.273-2.158,8.273,2.158Z" transform="translate(84.572 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(744.383 200.244)">
                                                                                    <g id="plaque" transform="translate(1.263 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(0.109 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M.021,33.727s4.243,6.657,6.471,7.893c2.385,1.327,7.15,3.458,8.628,3.579a68.581,68.581,0,0,0,12.55-6.226,34.466,34.466,0,0,0,6.618-5.695S14.11,32.949.021,33.727Z" transform="translate(8.509 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(12.601 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847S16.7-1.333,22-4.333c1.539-.873,2.222-4.04,4.15-4.04,1.617,0,3.341,3.684,5.146,4.512A113.011,113.011,0,0,1,42.025,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M657.425,1689.713c.569-2.755,3.728-10.529,6.537-16.683,1.391-3.045,3.494-7.616,3.494-7.616s.263-10.35.574-19.246c.257-7.354-.35-16.132.956-24.791,1.323-8.776,4.38-21.954,8.285-25.746s8.858,1.336,8.858,1.338.269,4.738,0,12.555c-.289,8.388-1.386,16.585.892,31.864a112.341,112.341,0,0,0,6.437,25.046s3.476,7.174,6.309,14.339c2.1,5.309,4.354,8.977,2.231,13.829-1.246,2.847-4.914,6.556-7.3,8.973a50.567,50.567,0,0,1-10.37,7.919c-4.327,2.63-5.449,2.05-6.939,2.6-2.108.781-7.713-1.284-12.595-6.562C660.247,1702.625,656.443,1694.469,657.425,1689.713Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M21.182.7C11.843.167,8.813,7.161,8.813,7.161s-1.989,2.8-4.6,6.26C2.2,16.084-.48,19.257-.086,22.57c.252,2.133,4.638,7.584,4.638,7.584a28.973,28.973,0,0,0,7.618,9.113c3.711,2.94,9.718,5.382,14.706,4.69C34.168,42.946,39.517,40,43.166,33.2c.576-1.068,4.484-12.688.453-21.428C40.613,5.251,30.99,1.257,21.182.7Z" transform="translate(50.888 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(2 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-0.645 -10.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-3.491 -3)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1705.177l4.374-16.644,6.426,9.745,8.923-18.714" transform="translate(-638.994 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(6.977 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(0.355 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(6.977 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(4.134 2.639)">
                                                                                      <path id="p1-12" data-name="p1" d="M32.659,60.024s-19.653,3.9-18.612,8.571,22.775,6,22.775,10.122-22.775,6.367-22.775,6.367" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-13" data-name="p1" d="M34.393,2.508s3.572,8.008,6.265,13.714a13.76,13.76,0,0,1,0,11.146S31.237,39.974,20.582,43.291.364,29.49.01,23.83,8.237,2.508,8.237,2.508A34.977,34.977,0,0,1,20.582,0,49.893,49.893,0,0,1,34.393,2.508Z" transform="translate(8.211 1.302)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(24.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(2.834 -2)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.77-13.166a35.46,35.46,0,0,0-.2,5.445c.14,4.9-3.164,12.938-2.2,18.95,1.518,9.514,2.405,13.76,2.405,13.76H31.732s1.169-3.36,2.812-13.268c.815-4.914.5-11.591-.409-17.377a63.255,63.255,0,0,0-2.3-9.579l-10.187.369.1,8.786.288,4.669c-.99-.081-1.791-4.245-1.791-4.245l.2-9.307Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-15" data-name="p1" d="M6.566,40.566s.653.931,1.83,2.629a19.714,19.714,0,0,0,1.83,2.454c1.1,1.266,2.566,2.611,2.566,2.611a26.371,26.371,0,0,0,6.069,3.793,11.777,11.777,0,0,0,6.6.536c1.906-.258,7.988-3.659,7.988-3.659a42.884,42.884,0,0,0,5.489-4.106c1.979-1.9,3.392-3.08,3.392-3.08s-3.4-4.158-10.772-3.713c-3.535.213-10.641,2.752-13.674,2.535C9.173,39.941,6.566,40.566,6.566,40.566Z" transform="translate(2.898 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(11.838 -71.25)">
                                                                                      <path id="p5" d="M806.154,381.864l-.523,11.178s4.867,5.841,9.294,7.838,2.849,1.957,7.388,0,10.094-7.254,10.094-7.254l.5-5.346Z" transform="translate(-803 -323.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(13.801 11.408)">
                                                                                      <path id="p1-17" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 14 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t3">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="46" height="187" viewBox="0 0 46 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top3" transform="translate(-808.5 -114.589)">
                                                                                  <g id="crown" transform="translate(808.825 196.033)">
                                                                                    <path id="p1" d="M34.051.152s13.989,23.034,10.734,31.5S26.965,49.965,22.626,50.427.192,41.2.346,32.121c.048-2.833-.113-7.445.671-10.187C2.487,16.79,5.58,14.263,5.58,10.874,5.58,8.774,3.526,1.88,9.5.152,17.47-2.152,34.051.152,34.051.152Z" transform="translate(0.001)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(813.733 126.83)">
                                                                                    <path id="rb1" d="M1147.78,130.5s-9.409-28.467-6.822-46.115,7.381-19.283-4.174-23.879-18.893,43.829-18.206,59.784c.243,5.617.723,12.9.723,12.9a6.014,6.014,0,0,1,3.657-2.69c1.845-.534,2.963-.659,12.773-.652S1147.78,130.5,1147.78,130.5Z" transform="translate(-1118.534 -60.208)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M1128.55,112.709c3.283.452-3.222-21.261-2.336-34.441s2.527-14.4-1.429-17.834-6.469,32.734-6.234,44.651c.083,4.195-1.151,7.862,1.091,7.35S1125.27,112.257,1128.55,112.709Z" transform="translate(-1110.302 -48.227)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(432.5 35.089)">
                                                                                    <path id="p2" d="M376,1283h46" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h46" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface">
                                                                                    <path id="shape" d="M949.874,1755.918c-9.477,0-23.606-30.316-18.839-40.421s33.2-10.105,37.908,0S959.351,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1755.918c-3.645,0-7.977-4.484-11.928-11.038-.1-.166-.6-1.022-.6-1.022l12.523-11.623,12.214,12.277s-.119.2-.337.574C958.239,1751.056,953.67,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1743.861s-.225-.4-.475-.849c-5.045-9.1-8.6-21.678-5.842-27.515,1.156-2.45,3.7-4.306,7.474-5.753l.434-.156,10.89,22.579Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1709.211s.378.106.861.254c3.579,1.076,6.87,3.14,8.218,6.032,2.722,5.841-.907,18.434-6.429,28.277-.091.162-.428.75-.428.75l-12.2-12.339Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1709.6s.395-.155.711-.262c5.432-1.876,13.191-2.02,19.748-.293l.51.158-1.268,2.8-18.379.29Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1732l-9.543-19.754,18.42-.29Z" transform="translate(-117.586 -1456.829)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(805.645 198.966)">
                                                                                    <g id="plaque" transform="translate(-1.737 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(0.109 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M-.3,33.285s7.2,7.191,9.63,8.549c2.6,1.459,8.308,4.132,9.92,4.264.335.027,3.709-1.536,8.035-4.264.808-.509,1.741-1.538,2.9-2.29A31.38,31.38,0,0,0,37.3,32.928S15.075,32.429-.3,33.285Z" transform="translate(6.294 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(8.601 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847S16.7-1.333,22-4.333c1.539-.873,2.222-4.04,4.15-4.04,1.617,0,3.341,3.684,5.146,4.512A113.011,113.011,0,0,1,42.025,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M662.715,1669.036s-.827-21.056.479-29.715c.733-4.862,2.426-15.19,4.789-24.285,1.777-6.841,4.119-12.951,5.86-14.643a8.425,8.425,0,0,1,3.643-2.138c1.487-.358,3.043.465,4.74,1.508,1.283.771,2.639,1.22,3.292,4.9.137.771-.98,4.751-.98,4.751s-4.406,13.848-2.312,27.89a296.722,296.722,0,0,0,7.365,32.823,23.47,23.47,0,0,1,5.128,7.127c2.109,4.509,4.979,10.715,5.091,17.346a10.135,10.135,0,0,1-4.642,9.178s-5.183,5.36-9.51,7.991a30.435,30.435,0,0,1-7.01,3.481c-1.2.446-8.537-2.541-14.118-7.01-3.8-3.039-6.668-7.429-6.961-9.9-.474-3.992.282-7.831,1.569-12.795s3.408-5.541,3.579-7.059A54.936,54.936,0,0,0,662.715,1669.036Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M12.058,4.6C2.72,4.067.33,11.916-.235,21.23S1.423,40.253,9.342,41.95s39.705-11.565,35.674-20.3c-1.491-3.236-5.727-6.862-12.557-10.521C26.08,7.705,17,4.881,12.058,4.6Z" transform="translate(50.888 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(-1 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-2.645 -10.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-3.491 -3)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1705.468l4.433-16.833,6.513,9.856,9.044-18.926" transform="translate(-639.262 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(3.977 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-1.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(3.977 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-12" data-name="p1" d="M29.745.021s12.2,20.091,9.363,27.476S23.564,43.47,19.779,43.873.212,35.826.346,27.906c.042-2.471-.1-6.494.586-8.885,1.282-4.487,3.979-6.691,3.979-9.647C4.911,7.542,3.12,1.528,8.33.021,15.282-1.988,29.745.021,29.745.021Z" transform="translate(8.455 2.728)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(24.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(-6.166 -2)">
                                                                                      <path id="p1-13" data-name="p1" d="M39.975,25.773c1.332,0-3.775-20.148-3.775-20.148S35.039.131,34.135-5.655c-.82-5.254-1.512-9.19-1.512-9.19l-10.406-.019-.466,8.786.288,4.669S19.034,23.763,20.926,24.5,38.643,25.773,39.975,25.773Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-14" data-name="p1" d="M6.05,42.731a28.123,28.123,0,0,0,5.624,5.126,42.241,42.241,0,0,0,8.789,4.989,8.223,8.223,0,0,0,6.854.544c1.8-.543,6.848-3.539,10.67-6.8,2.653-2.263,4.688-4.43,4.688-4.43a13.625,13.625,0,0,0-11.112-4.13c-3.535.213-10.641,2.752-13.674,2.535C9.173,39.941,6.05,42.731,6.05,42.731Z" transform="translate(2.898 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(6.838 -71.25)">
                                                                                      <path id="p5" d="M806.154,381.864l.286,12.458s4.058,4.562,8.485,6.558,2.849,1.957,7.388,0,10.08-7.793,10.08-7.793l.515-4.808Z" transform="translate(-803 -323.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(3.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-7.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(12.801 11.408)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 13 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t2">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="43" height="187" viewBox="0 0 43 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top2" transform="translate(-849.5 -116.079)">
                                                                                  <g id="crown" transform="translate(850.144 193.658)">
                                                                                    <path id="p1" d="M36.9,3.723S37.83,22.8,40.619,36.05,36.59,52.134,30.856,54.184,1.56,49.611-.144,39.2,6.389,5.451,6.389,5.451s1.68-3.575,2.683-3.907C11.789.642,15.766-.3,22.649.287A60.433,60.433,0,0,1,36.9,3.723Z" transform="translate(0.067 -0.105)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(857.411 124.579)">
                                                                                    <path id="rb1" d="M1391.27,234.14s.05.033,0-.437c-.447-4.177-5.266-48.787-6.667-60.7-1.475-12.539-8.892-10.078-8.892-10.078s-5.693-7.935-7.986,11.28c-2.1,17.615-6.353,60.325-6.353,60.325s.6-1.054,3.848-1.585a48.26,48.26,0,0,1,9.762-.591,111.541,111.541,0,0,1,16.288,1.789Z" transform="translate(-1361.576 -161.302)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M1369.22,168.642c-.489-9.024-3.806-12.408-5.2-12.192s.367-.766-.394,13.057c-.7,12.675-2.78,42.8-1.7,42.423s6.82-.1,7.906,0C1372.34,212.016,1369.7,177.663,1369.22,168.642Z" transform="translate(-1351.648 -148.82)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(473.5 36.579)">
                                                                                    <path id="p2" d="M376,1283h43" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h43" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(38 1.49)">
                                                                                    <path id="shape" d="M949.874,1755.918c-9.477,0-23.606-30.316-18.839-40.421s33.2-10.105,37.908,0S959.351,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1755.918c-3.645,0-7.977-4.484-11.928-11.038-.1-.166-.6-1.022-.6-1.022l12.523-11.623,12.214,12.277s-.119.2-.337.574C958.239,1751.056,953.67,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1743.861s-.225-.4-.475-.849c-5.045-9.1-8.6-21.678-5.842-27.515,1.156-2.45,3.7-4.306,7.474-5.753l.434-.156,10.89,22.579Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1709.211s.378.106.861.254c3.579,1.076,6.87,3.14,8.218,6.032,2.722,5.841-.907,18.434-6.429,28.277-.091.162-.428.75-.428.75l-12.2-12.339Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1709.6s.395-.155.711-.262c5.432-1.876,13.191-2.02,19.748-.293l.51.158-1.268,2.8-18.379.29Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1732l-9.543-19.754,18.42-.29Z" transform="translate(-117.586 -1456.829)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(846.645 200.456)">
                                                                                    <g id="plaque" transform="translate(-1.737 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-0.891 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M2.848,32.478c-.929.3-3.328.236-3.205,1.659s1.39,2.132,3.7,4.035a32.074,32.074,0,0,0,5.77,3.281c2.6,1.459,11.548,4.016,13.161,4.148.178.015,6.391,1.364,11.162-2.112a13.877,13.877,0,0,0,3.96-4.3,14.889,14.889,0,0,0,.98-3.922,4.369,4.369,0,0,0-.453-2.791S9.994,30.139,2.848,32.478Z" transform="translate(6.294 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(9.601 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847S16.7-1.333,22-4.333c1.539-.873,2.222-4.04,4.15-4.04,1.617,0,3.341,3.684,5.146,4.512A113.011,113.011,0,0,1,42.025,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M664.528,1666.723l1.6-13.383,5.687-52.209s1.623-6.207,2.99-6.52c.569-.137,1.75,1.047,3.235,1.618,1.647.628,3.135.092,4.182.735,1.283.771,2.639,4.02,3.292,7.7.137.771,6.448,62.057,6.448,62.057s.706,10.411,1.961,20.589c.823,6.673,2.307,13.334,2.353,16.079.112,6.631-2.362,8.2-6.689,10.834s-19.937-.678-25.519-5.147c-3.8-3.039-6.276-5.37-6.569-7.844-.474-3.992.331-10.969,1.618-15.932S664.528,1666.723,664.528,1666.723Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M12.058,4.6C2.72,4.067.33,11.916-.235,21.23S1.423,40.253,9.342,41.95s39.705-11.565,35.674-20.3c-1.491-3.236-5.727-6.862-12.557-10.521C26.08,7.705,17,4.881,12.058,4.6Z" transform="translate(47.888 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(-2 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-2.645 -10.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-9.491 -6)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1705.756l4.433-17.02,6.513,9.966,9.044-19.137" transform="translate(-639.262 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(4.277 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a46.651,46.651,0,0,1,7.852-3.3A37.031,37.031,0,0,1,25.482,13.4c9.83,0,20.339,5.186,20.339,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M45.821,18.583S35.312,13.4,25.482,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-1.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(4.277 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a46.651,46.651,0,0,1,7.852-3.3A37.031,37.031,0,0,1,25.482,13.4c9.83,0,20.339,5.186,20.339,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M45.821,18.583S35.312,13.4,25.482,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-12" data-name="p1" d="M31.761,3.224s.8,16.447,3.206,27.87S31.494,44.961,26.55,46.729,1.293,42.786-.176,33.81s5.632-29.1,5.632-29.1S6.9,1.632,7.77,1.346C10.112.568,13.541-.244,19.475.262A52.1,52.1,0,0,1,31.761,3.224Z" transform="translate(8.837 -0.732)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(20.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(-2.166 -2)">
                                                                                      <path id="p1-13" data-name="p1" d="M36.2,26.027c1.332,0-1.041-19.138-1.041-19.138A108.036,108.036,0,0,0,34.135-5.655c-.82-5.254-1.753-9.19-1.753-9.19H22.718l-.967,8.766L21-.146s-5.739,24.163-3.847,24.9S34.868,26.027,36.2,26.027Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-14" data-name="p1" d="M2.724,36.2A9.937,9.937,0,0,0,3.78,41.475C5.3,44.3,8.974,46.654,11.057,48.112c3.6,2.524,10.9,4.45,10.9,4.45S29.757,54.9,33,53.92a18.982,18.982,0,0,0,8.409-4.3c2.653-2.263,2.866-8.145,2.866-8.145s-1.554-1.723-8.926-1.279c-3.535.213-6.523,3.6-13.4,2.6S10.783,37.3,7.852,36.2A8.469,8.469,0,0,0,2.724,36.2Z" transform="translate(2.898 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(9.838 -73.25)">
                                                                                      <path id="p5" d="M806.154,381.864l.387,11.122s3.957,5.9,8.384,7.894,2.849,1.957,7.388,0,9.353-7.242,9.353-7.242l1.241-5.358Z" transform="translate(-803 -323.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(7.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(10.801 11.408)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 12 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t1">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="49.393" height="187" viewBox="0 0 49.393 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top1" transform="translate(-893.635 -109.975)">
                                                                                  <g id="crown" transform="translate(893.789 188.862)">
                                                                                    <path id="p1" d="M1571.82,569.007s4.878,24.457,7.215,35.725S1575.86,620.9,1564,620.849s-32.42-.267-32.42-13,3.812-35.353,9.368-39.027S1571.82,569.007,1571.82,569.007Z" transform="translate(-1531.323 -567.236)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(900.95 118.475)">
                                                                                    <path id="rb1" d="M1617.19,208.818s-.369-44.8-12.375-65.052c-3.89-6.561-5.7-7.874-7.843-8-3.5-.259-4.508,8-4.508,8l-2.24,23.447-6.473,43.589s.376-3.292,9.143-3.5S1617.19,208.818,1617.19,208.818Z" transform="translate(-1583.751 -135.762)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M1594.28,188.023c.754-1.2-.116-32.053-3.9-46.531-1.227-4.693-1.8-5.633-2.473-5.721-1.1-.186-1.422,5.721-1.422,5.721l-.706,16.772s-2.762,27.337-1.909,29.16c.341.729,2.477-.2,4.563,0C1591,187.674,1593.83,188.745,1594.28,188.023Z" transform="translate(-1572.4 -121.37)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(518.028 30.475)">
                                                                                    <path id="p2" d="M376,1283h49" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h49" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(86.528 -4.614)">
                                                                                    <path id="shape" d="M949.874,1755.918c-9.477,0-23.606-30.316-18.839-40.421s33.2-10.105,37.908,0S959.351,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1755.918c-3.645,0-7.977-4.484-11.928-11.038-.1-.166-.6-1.022-.6-1.022l12.523-11.623,12.214,12.277s-.119.2-.337.574C958.239,1751.056,953.67,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1743.861s-.225-.4-.475-.849c-5.045-9.1-8.6-21.678-5.842-27.515,1.156-2.45,3.7-4.306,7.474-5.753l.434-.156,10.89,22.579Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1709.211s.378.106.861.254c3.579,1.076,6.87,3.14,8.218,6.032,2.722,5.841-.907,18.434-6.429,28.277-.091.162-.428.75-.428.75l-12.2-12.339Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1709.6s.395-.155.711-.262c5.432-1.876,13.191-2.02,19.748-.293l.51.158-1.268,2.8-18.379.29Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1732l-9.543-19.754,18.42-.29Z" transform="translate(-117.586 -1456.829)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(895.172 194.352)">
                                                                                    <g id="plaque" transform="translate(-3.737 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-0.891 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M3.414,32.549c-1.093.325-3.914.252-3.77,1.774s1.058,5.206,3.77,7.24c2.321,1.741,5.5,2.855,6.787,3.507,3.062,1.56,14.16,1.366,16.057,1.507.209.016,8.671,1.64,14.283-2.076a40.97,40.97,0,0,0,4.657-4.6,17.8,17.8,0,0,1,0-4.374,4.319,4.319,0,0,0-.532-2.983S11.82,30.049,3.414,32.549Z" transform="translate(1.168 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(6.708 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847s5.523-3.18,11.33-6.18c1.685-.873,2.434-4.04,4.546-4.04,1.771,0,3.659,3.684,5.637,4.512A127.973,127.973,0,0,1,44.918,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M660.661,1666.723v-4.26l6.223-39.806,1.848-20.7s.877-6.175,2.64-7.24,2.926,2.408,4.412,2.979c.367.14,2.644,2.915,4.978,8.221a113.272,113.272,0,0,1,6.147,20.7c3.832,18.343,3.91,40.105,3.91,40.105l3.109,15.292s4.3,18.132,4.347,20.878c.112,6.631-.02,8.554-4.347,11.185s-30.667,2.315-36.248-2.154c-3.8-3.039-4.346-3.657-4.64-6.131-.474-3.992,2.11-24.448,3.4-29.411A39.986,39.986,0,0,1,660.661,1666.723Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M12.058,4.6C2.72,4.067.33,11.916-.235,21.23S1.423,40.253,9.342,41.95s39.705-11.565,35.674-20.3c-1.491-3.236-5.727-6.862-12.557-10.521C26.08,7.705,17,4.881,12.058,4.6Z" transform="translate(47.888 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(-4 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-4.645 -10.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-9.491 -6)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1709.176l4.433-19.243,6.513,11.267,9.044-21.636" transform="translate(-639.262 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(0.245 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a55.755,55.755,0,0,1,8.8-3.3A46.061,46.061,0,0,1,27.777,13.4c11.019,0,22.8,5.186,22.8,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M50.575,18.583S38.8,13.4,27.777,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-3.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(0.245 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a55.755,55.755,0,0,1,8.8-3.3A46.061,46.061,0,0,1,27.777,13.4c11.019,0,22.8,5.186,22.8,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M50.575,18.583S38.8,13.4,27.777,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-12" data-name="p1" d="M1566.17,568.758s4.193,21.023,6.2,30.71-2.729,13.9-12.924,13.854-27.869-.229-27.869-11.175,3.277-30.39,8.053-33.548S1566.17,568.758,1566.17,568.758Z" transform="translate(-1527.329 -566.06)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(20.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(-5.166 -2)">
                                                                                      <path id="p1-13" data-name="p1" d="M36.2,26.027c1.332,0-1.041-19.138-1.041-19.138A108.036,108.036,0,0,0,34.135-5.655c-.82-5.254-1.047-8.873-1.047-8.873H22.341l-.589,8.449L21-.146s-5.739,24.163-3.847,24.9S34.868,26.027,36.2,26.027Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-14" data-name="p1" d="M-1.552,37.735s-.781,5.049.59,7.589c1.522,2.822,2.521,5.518,11.792,7.753s22.223,1.975,25.47,1c1.8-.543,5.907-1.041,8.334-4.51S46.006,40.2,46.006,40.2a62.349,62.349,0,0,0-10.652,0c-3.535.213-6.523,3.6-13.4,2.6S10.783,37.3,7.852,36.2C5.4,35.27-1.552,37.735-1.552,37.735Z" transform="translate(2.898 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(6.838 -73.25)">
                                                                                      <path id="p5" d="M806.154,381.864l.387,11.122s3.957,5.9,8.384,7.894,2.849,1.957,7.388,0,9.353-7.242,9.353-7.242l1.241-5.358Z" transform="translate(-803 -323.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(5.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-4.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(9.801 11.408)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 11 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <!---->
                                                                      </section>
                                                                      <section _ngcontent-gep-c159="" class="dental-chart__section dental-chart__section--right">
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t8">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="56" height="187" viewBox="0 0 56 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top8" transform="translate(-2.5 79.917)">
                                                                                  <g id="crown">
                                                                                    <path id="p1" d="M8.738,4S-2.45,24.646.494,33.678,12.762,50.559,19.338,47.011s11.188,0,11.188,0,6.183,6.344,13.446,0S56.116,36.2,54.348,23.831C53.241,16.3,52.772,10.375,48.826,3.856A59.459,59.459,0,0,0,29.219,0C19.135,0,8.738,4,8.738,4Z" transform="translate(3)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(0 5.789)">
                                                                                    <path id="rb3" d="M496.167,323.884s-5.653-51.1-13.863-51.172,1.88,12.82-3.423,26.776c-3.4,8.725-5.536,14.244-11.356,21.866A57.74,57.74,0,0,1,481,320.97c7.186.68,9.153.546,15.171,2.915Z" transform="translate(-444.381 -325.919)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb2" d="M499.377,298.369a21.307,21.307,0,0,1,0,7.987c-.667,3.981-1.778,8.941-2.795,10.839a.83.83,0,0,1-.421.36c-1.638.185-7.683-8.539-9.891-18.5-.817-3.685-2.064-9.748,1.258-11.792a2.486,2.486,0,0,1,.9-.289C492.905,285.627,499.377,298.369,499.377,298.369Z" transform="translate(-463.512 -338.54)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M477.46,304.661s-4.822-4.154-7.612-14.258c-2.31-8.366-2.566-8.295-4.55-12.4-4.253-8.8-9.19-3.443-9.19,7.8s-.073,38.443-.073,38.443a31.506,31.506,0,0,1,4.855-1.489c2.878-.65,6.731-1.4,6.731-1.4a76.4,76.4,0,0,0,5.126-7.35A81.837,81.837,0,0,0,477.46,304.661Z" transform="translate(-444.381 -326.01)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M477.124,264.054c-1.36-1.675,1.964,11.376-.929,21.548s-5.336,10.686-4.705,13.648c.364,1.726,6.491,1.815,9.9,0,2.311-1.222.614-6.3,1.028-16.468S478.484,265.727,477.124,264.054Z" transform="translate(-437.903 -310.435)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M493.093,292.028c-.541,6.213-2.412,10.837-2.839,10.906-.677.109-3.177-5.034-4.09-10.906-.338-2.172-2.872-7.621-1.5-8.828a.848.848,0,0,1,.371-.171C486.889,282.237,493.3,289.649,493.093,292.028Z" transform="translate(-458.537 -331.032)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M463.762,280.241c-1.66-6.013-1.818-12.159-3.242-15.107-3.057-6.325-3.344,4.144-3.344,12.23s1.9,25.408,3.971,24.941,7.118-7.537,7.059-9.474C468.114,289.585,465.128,285.186,463.762,280.241Z" transform="translate(-441.491 -309.93)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(-373.5 -159.417)">
                                                                                    <path id="p2" d="M376,1283h56" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h56" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(1.844 47.041)">
                                                                                    <path id="shape" d="M29.052.1C7.672-1.325-4.8,12.485,1.745,36.974,4.762,48.282,14.739,55.492,26.314,53.619c10.027-1.622,16.669-7.2,19.8-21.866C49.056,18.006,51.559,1.59,29.052.1Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M1.721,18.929a22.222,22.222,0,0,0,10.18.641l2.918-.641,2.53-.87V1.906L9.42-.391l-8.071,2.3S1.129,18.727,1.721,18.929Z" transform="translate(21.562 24.194) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.614.1A36.606,36.606,0,0,0,.883,1.329a.588.588,0,0,0-.322.335v16.3L8.6,20.205l7.966-2.24V.357s.179.065-.293,0C15.644.269,14.655.169,13.614.1Z" transform="translate(55.621 24.981) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M45.034,36s1.368-5.065,2.11-9.575A71.392,71.392,0,0,0,48,17.966H32l-2.762,9.669L32,35.966Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.7,17.966s.092-.158,0,.233c-1.1,4.613-1.195,9.823.623,17.054.008.036.184.713.184.713H16l2.189-8.67L16,17.966Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,0,2.076,9.292,0,18l8.109-2.222,6.362,1.791L16,18,13.238,9.631,16,0,8.109,2.2Z" transform="translate(37.656 25.542) rotate(90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M1.449,35.966s.217.715.3,1.008A22.614,22.614,0,0,0,15.352,52.605c.062.024.648.213.648.213V35.966Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M32,52.172s0-.077.2-.155c5.6-2.2,9.848-6.736,12.638-15.381.009-.027.248-.671.248-.671H32Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M48,17.467c-.042-7.9-3.222-14.9-15.222-16.952-.042-.007-.774,0-.774,0v17.45H48S48,17.723,48,17.467Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.911,1.465s-.179.055-.567.18C8.322,3.87,3.01,9.23.825,17.482c.03-.12-.141.484-.141.484H16Z" transform="translate(55.622 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(3.645 4.46)">
                                                                                    <g id="plaque" transform="translate(-3.645 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(3.109 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M.22,33.695s.048.125.161.406C3,40.728,11.449,45.714,17.264,43.018c5.869-2.721,9.984,0,9.984,0s5.55,5.6,12.031.736c4.347-3.263,8.437-5.928,9.84-10.581-.026.095.045-.165.045-.165Z" transform="translate(-0.494 -33.06)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(8.654 -10.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847s6.636-3.18,13.615-6.18c2.025-.873,2.924-4.04,5.463-4.04,2.129,0,4.4,3.684,6.773,4.512,7.468,2.6,14.121,5.707,14.121,5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M658.578,1654.583a216.412,216.412,0,0,1-1.152-28.752c.235-6.9.17-8.964.942-12.866s2.693-7.148,4.645-6.438,4.231,5.548,4.231,5.548,1.443-6.238,4.991-3.932,8.159,9.466,8.159,9.466-1.777-6.644-.773-10.207c.548-1.971,3.779-2.611,5.741.346,4.809,7.247,10.044,42.151,10.439,48.9.008.135.5,1.349.5,1.349s10.97,22.844,2.472,32.529c-8.671,9.882-11.739,12.313-19.307,7.125s-11.43,0-11.43,0a14.531,14.531,0,0,1-15.244-7.125c-5.439-9.306-.74-19.221-.74-19.221Z" transform="translate(-647.988 -1606.121)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M27.83.094C7.349-1.246-4.6,11.741,1.672,34.772c2.89,10.634,12.448,17.414,23.536,15.653,9.6-1.526,15.968-6.774,18.967-20.564C46.992,16.934,49.39,1.5,27.83.094Z" transform="translate(53.024 103.381) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(0 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-3.645 6.04)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(0 -2)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1699.767l3.378-13.128,4.962,7.687,6.891-14.761" transform="translate(-638.994 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(-0.266 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a77.838,77.838,0,0,1,10.753-3.3A67.868,67.868,0,0,1,32.5,13.4c13.463,0,27.855,5.186,27.855,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M60.351,18.583S45.959,13.4,32.5,13.4s-26,5.186-26,5.186" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-3.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(-0.266 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a77.838,77.838,0,0,1,10.753-3.3A67.868,67.868,0,0,1,32.5,13.4c13.463,0,27.855,5.186,27.855,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M60.351,18.583S45.959,13.4,32.5,13.4s-26,5.186-26,5.186" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant">
                                                                                      <path id="p1-12" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-56)">
                                                                                      <path id="p2-6" data-name="p2" d="M6.5,0,8.093,6.435,13,11,6.5,9.13,0,11,4.908,6.435Z" transform="translate(76.855 14.123)"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-6.189 -6.751)">
                                                                                      <path id="p1-13" data-name="p1" d="M8.05,3.64S-2.258,22.429.455,30.648s11.3,15.362,17.362,12.133,10.308,0,10.308,0a8.852,8.852,0,0,0,12.388,0C47.2,37.008,51.7,32.94,50.073,21.687c-1.02-6.856-1.452-12.245-5.088-18.178A55.361,55.361,0,0,0,26.92,0C17.63,0,8.05,3.64,8.05,3.64Z" transform="translate(7.989 4.544)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(0 -2)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.446-12.931s.147,14.879,1.5,24.393,3.91,13.661,3.91,13.661h16s4.39-3.753,5.853-13.661,0-25.971,0-25.971l-10.1,3.5S27.738-2.96,26.855-3.041s-3.464-9.768-3.772-11.469c-.051-.329-2.165-5.428-2.165-5.428Z"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(0 -2)">
                                                                                      <path id="p1-15" data-name="p1" d="M.578,33.685a1.993,1.993,0,0,0,.139.642c2.963,8.586,12.13,16.186,18.621,12.684,6.576-3.548,11.188,0,11.188,0s6.183,6.344,13.446,0c1.431-1.25,2.769-2.427,4.2-3.822.275-.267.822-.959.822-.959s-3.15-2.288-13.5-4.9c-6.99-1.762-12.107,2.964-19.737,1.856C9.117,38.223.578,33.685.578,33.685Z" transform="translate(-0.645 -1.46)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(9.223 -61.398)">
                                                                                      <path id="p5" d="M806.3,381.864l-1.1,11.619s6.1,5.4,11.189,7.4,3.278,1.957,8.5,0,12.577-7.9,12.577-7.9l-.388-4.7Z" transform="translate(-803 -333.457)"></path>
                                                                                      <path id="p4" d="M808.83,365.231l-1.958,7.545L836,378.856l-1.657-8.133Z" transform="translate(-803 -327.766)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.451,348.775l-1.622,7.542,25,5.259-1.364-8.15Z" transform="translate(-803 -322.137)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M812.186,332.484l-1.207,7.445,20.74,4.168-1.659-7.839Z" transform="translate(-803 -316.563)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M829.419,324.23l-16.668-3.324s.528-14.042,8.635-13.322S829.419,324.23,829.419,324.23Z" transform="translate(-803 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(2 -9)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877h44" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877h44" transform="translate(2 4)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877h44" transform="translate(0 8)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877h44" transform="translate(2 11)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877h44" transform="translate(0 16)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877h44" transform="translate(2 20)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877h44" transform="translate(0 24)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877h44" transform="translate(2 27)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877h44" transform="translate(0 31)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877h44" transform="translate(2 35)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877h44" transform="translate(0 39)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877h44" transform="translate(2 42)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l48,32" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(13.801 11.408)">
                                                                                      <path id="p1-17" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 28 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t7">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="61" height="187" viewBox="0 0 61 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top7" transform="translate(-2.553 88.051)">
                                                                                  <g id="crown" transform="translate(0 -8)">
                                                                                    <path id="main" d="M7.28,2.856C6.548,6.058-4.356,28.983,1.96,36.77s8.444,12.3,13.364,11.5,8.511-7.351,17.154-.946,16.69-2.184,16.69-2.184,15.359-8.37,8.51-25.84S51.3,7.222,51.362,2.855,8.011-.347,7.28,2.856Z" transform="translate(3)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(0 2.561)">
                                                                                    <path id="rb3" d="M782.726,297.3s-.416-27.945-4.19-42.961-6.735-22.934-10.9-17.092c-2.306,3.231.4,14.811-1.468,25.466-1.442,8.2-6.254,21.33-6.254,21.33s-1.2,11.2,1.175,11.142A108.769,108.769,0,0,1,782.73,297.3Z" transform="translate(-728.368 -305.437)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb2" d="M793.2,256.519c3.874,9.709-.453,27.241-6,29.078s-9.375-31.548-7.874-38.817S789.324,246.81,793.2,256.519Z" transform="translate(-755.384 -311.723)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M741.007,247.352c-.541,11.736-2.034,44.218-2.307,50.159l-.028.6c7.1-1.217,10.1-1.959,17.649-2.2h4.408s-.636.585-.547-3.775,2.2-10.912.9-13.666c-2.372-5.051-7.863-17.327-9.2-22.7C748.1,240.606,741.6,234.469,741.007,247.352Z" transform="translate(-728.368 -306.17)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M455.733,308.876c1.291,2.037,9.37,2.181,10.18,0a83.3,83.3,0,0,0,0-16.082c-.637-7.1-1.5-14.675-1.929-17.836-.446-3.318-2.6-8.894-3.86-3.846-.709,2.831.87,13.1,0,22.705C459.479,300.936,455.166,307.981,455.733,308.876Z" transform="translate(-417.438 -327.421)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M493.093,293.518c-.541,7.407-2.412,12.919-2.839,13-.677.13-3.177-6-4.09-13-.338-2.589-1.745-11.345-.371-12.782a.8.8,0,0,1,.371-.2C488.016,279.586,493.3,290.685,493.093,293.518Z" transform="translate(-457.484 -341.846)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M461.563,284.058c-.811-10.385-3.291-13.988-4.388-12.762s0,11.992,0,22.053-1.071,17.348,0,18.19,10.838-.555,10.779-2.991c-.022-.991-.833-2.1-1.94-3.765a18.551,18.551,0,0,1-2.139-4.134C462.351,296.305,462.015,289.842,461.563,284.058Z" transform="translate(-440.438 -327.709)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(-373.447 -167.551)">
                                                                                    <path id="p2" d="M376,1283h61" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1" d="M376,1283h61" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(1.31 38.907)">
                                                                                    <path id="shape" d="M29.052.111C7.672-1.463-4.8,13.786,1.745,40.828,4.762,53.315,14.739,61.276,26.314,59.208c10.027-1.791,16.669-7.954,19.8-24.145C49.056,19.883,51.559,1.756,29.052.111Z" transform="translate(61.243 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412,21.334a20.214,20.214,0,0,0,10.18.707l2.918-.707,2.53-.961V2.537L8.111,0,.04,2.537S-.18,21.111.412,21.334Z" transform="translate(24.066 25.502) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052.11A33.31,33.31,0,0,0,.322,1.467C.1,1.537,0,1.837,0,1.837v18l8.034,2.474L16,19.838V.395s.179.072-.293,0C15.082.3,14.094.186,13.052.11Z" transform="translate(61.243 25.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,19.919s1.368-5.593,2.11-10.573A86.834,86.834,0,0,0,18.762,0h-16L0,10.677l2.762,9.2Z" transform="translate(41.405 38.78) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793.035S.885-.14.793.292C-.311,5.386-.4,11.139,1.416,19.124c.008.04.184.788.184.788H16.1l2.189-9.574L16.1.035Z" transform="translate(41.44 9.444) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,0,2.076,10.261,0,19.876l8.109-2.453L14.471,19.4,16,19.876l-2.762-9.241L16,0,8.109,2.432Z" transform="translate(41.405 25.542) rotate(90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,0S.217.789.3,1.114C2.266,9.267,7.2,15.491,13.9,18.374c.062.027.648.235.648.235V0Z" transform="translate(21.529 10.991) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,17.9s0-.085.2-.171C5.8,15.295,10.05,10.287,12.84.74c.009-.03.248-.74.248-.74H0Z" transform="translate(21.529 41.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,18.722C15.954,10,12.774,2.272.774,0,.732,0,0,0,0,0V19.273H16S16,19,16,18.722Z" transform="translate(60.678 41.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,0s-.179.061-.567.2C7.638,2.657,2.326,8.574.141,17.687c.03-.132-.141.534-.141.534H15.316Z" transform="translate(59.626 10.226) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(6.698 -3.674)">
                                                                                    <g id="plaque" transform="translate(-5.645 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s8.121,4.156,15.591,1.691C27.246,13.336,30.4,7.173,38.5,6.75s17.924,5.962,17.924,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(0.109 31.07)">
                                                                                      <path id="p1-2" data-name="p1" d="M.237,34.244s.048.125.161.406C3.014,41.277,8.9,47,14.713,44.308c5.869-2.721,2.745-3.64,8.579-3.235s6.838,7.067,14.756,4.853,14.582-9.4,15.985-14.051c-.026.095.045-.165.045-.165Z" transform="translate(-0.494 -33.06)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(5.654 -10.88)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654,1.847s6.636-3.18,13.615-6.18c2.025-.873,2.924-4.04,5.463-4.04,2.129,0,4.4,3.684,6.773,4.512,7.468,2.6,14.121,5.707,14.121,5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M656.831,1664.9s.845-20.772,1.4-37c.259-7.606.188-9.888,1.039-14.191s.356-6.92,2.509-6.137,7.329,11.829,7.329,11.829.484-16.627,4.4-14.084,10.059,13.514,10.059,13.514-.482-9.965.625-13.9c.6-2.174,4.168-2.88,6.332.381,5.3,7.994,9.6,49.13,10.037,56.579.009.149,0,4.918,0,4.918s12.42,23.366,3.047,34.049c-9.565,10.9-13.738,14.9-22.085,9.175s-12.657-.518-15.961-.427-7.254,1.517-13.254-8.748,0-22.8,0-22.8Z" transform="translate(-651.642 -1616.108)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M29.5.106C7.79-1.4-4.874,13.2,1.772,39.085,4.835,51.038,14.965,58.659,26.717,56.679c10.18-1.715,16.924-7.614,20.1-23.114C49.807,19.034,52.348,1.681,29.5.106Z" transform="translate(55.462 102.032) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(0 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-3.645 -5.96)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-1 -4)">
                                                                                      <path id="p1-7" data-name="p1" d="M664.635,1699.767l3.378-13.128,4.962,7.687,6.891-14.761" transform="translate(-638.994 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(-2.117 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a82.8,82.8,0,0,1,11.144-3.3,72.759,72.759,0,0,1,15.8-1.889c13.952,0,28.868,5.186,28.868,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M62.31,18.583S47.394,13.4,33.441,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-2.645 -3.46)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(-2.117 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a82.8,82.8,0,0,1,11.144-3.3,72.759,72.759,0,0,1,15.8-1.889c13.952,0,28.868,5.186,28.868,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M62.31,18.583S47.394,13.4,33.441,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-6.588 -5.903)">
                                                                                      <path id="p1-11" data-name="p1" d="M7.154,2.763S-2.433,22.458.248,30.683s9.584,15.36,15.573,12.129c2.156-1.163,4.781-2.882,7.415-2.756,3.85.178,7.323,3.055,7.323,3.055s7.362,5.479,13.976-.3,11.487-8.86,9.877-20.121C53.4,15.831,49.916,8.7,46.322,2.763c0,0-10.46-2.763-19.643-2.763S7.154,2.763,7.154,2.763Z" transform="translate(4.989 3.544)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-5.17 -3.117)">
                                                                                      <path id="p2-6" data-name="p2" d="M6.5,0,8.093,6.435,13,11,6.5,9.13,0,11,4.908,6.435Z" transform="translate(23.026 17.24)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(-4.113 -2)">
                                                                                      <path id="p1-12" data-name="p1" d="M13.547-13.025s-.1,1.891,0,5.244a167.533,167.533,0,0,0,1.619,19.243c1.552,9.514,4.486,13.661,4.486,13.661H38.01s5.037-3.753,6.716-13.661,1.8-26.893,1.8-26.893l-9.539,2.391s-7.141,10.081-8.153,10-3.486-4.936-3.839-6.637c-.058-.329-4.2-7.958-4.2-7.958Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-13" data-name="p1" d="M4.39,39.622s-.38-.136,1.5,2.17,2.812,4.133,5.686,6.666c3.188,2.819,5.9,1.219,9.826-.923,7.041-3.841,12,.923,12,.923a11.239,11.239,0,0,0,9.075,2.619c3.341-.591,6.088-2.738,8.507-4.672,1.044-.832,2.192-1.651,2.763-2.213.295-.289.881-.821.881-.821s-5.631-3-16.71-5.826c-7.484-1.908-12.963,3.209-21.133,2.009A38.743,38.743,0,0,0,4.39,39.622Z" transform="translate(-2.645 -1.46)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(9.223 -62.398)">
                                                                                      <path id="p5" d="M806.3,381.864l-1.119,11.074s6.117,5.945,11.21,7.942,3.278,1.957,8.5,0,12.506-7.434,12.506-7.434l-.317-5.166Z" transform="translate(-803 -333.457)"></path>
                                                                                      <path id="p4" d="M808.83,365.231l-1.958,7.545L836,378.856l-1.657-8.133Z" transform="translate(-803 -327.766)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.451,348.775l-1.622,7.542,25,5.259-1.364-8.15Z" transform="translate(-803 -322.137)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M812.186,332.484l-1.207,7.445,20.74,4.168-1.659-7.839Z" transform="translate(-803 -316.563)"></path>
                                                                                      <path id="p1-14" data-name="p1" d="M829.419,324.23l-16.668-3.324s.528-14.042,8.635-13.322S829.419,324.23,829.419,324.23Z" transform="translate(-803 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(2 -9)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877h44" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877h44" transform="translate(2 4)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877h44" transform="translate(0 8)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877h44" transform="translate(2 11)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877h44" transform="translate(0 16)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877h44" transform="translate(2 20)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877h44" transform="translate(0 24)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877h44" transform="translate(2 27)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877h44" transform="translate(0 31)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877h44" transform="translate(2 35)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877h44" transform="translate(0 39)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877h44" transform="translate(2 42)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l48,32" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(-2)">
                                                                                      <path id="p1-15" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(11.801 11.408)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 27 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t6">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="65" height="187" viewBox="0 0 65 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top6" transform="translate(1.875 82.01)">
                                                                                  <g id="crown" transform="translate(-1.366 -1.657)">
                                                                                    <path id="main" d="M60.625,4.143s3.912,7.98,3.158,24.879S52.6,49.578,50.475,49.722,37.895,49,32.891,44.422,22.231,48.085,17.633,49,1.563,42.187.448,32.654,3.81,2.664,3.81,2.664,6.548.577,13.5-.442A97.6,97.6,0,0,1,31.864-1.611,103.289,103.289,0,0,1,50.341.426C57.6,1.814,60.625,4.143,60.625,4.143Z" transform="translate(-0.27 1.657)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(0 27.884)">
                                                                                    <path id="rb3" d="M1076.01,280.246a93.241,93.241,0,0,1-3.125-34.465c1.794-19.556-17.173-30.828-18.062-30.718s-1.408,1.137-1.834,1.193a27.3,27.3,0,0,0,.325,6.259,35.268,35.268,0,0,1,1.223,7.264c.313,7.482-3.572,22.605-6.5,31.066s-5.213,2.775,0,14.744a146.481,146.481,0,0,1,16.282,1.543,69.26,69.26,0,0,1,11.691,3.114Z" transform="translate(-1016.563 -304.133)" fill="#f2ecbe" stroke="#707070" stroke-linecap="round" stroke-width="0.5"></path>
                                                                                    <path id="rb2" d="M1120.78,214.227a1.958,1.958,0,0,1,.23.459c.924,2.457-1.18-.495,1.355,10.72.608,2.69.481,12.507-1.586,22.82s-4.741,18.5-9.892,14.166-8.442-32.281-8.478-35.749c-.081-7.752,6.222-16.453,8.478-16.811S1119.28,212.074,1120.78,214.227Z" transform="translate(-1084.763 -303.193)" fill="#bcb57f" stroke="#707070" stroke-linecap="round" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M1033,225.448c-4.244-8.209-7.312-14.162-10.533-4.822s-5.082,16.854-2.958,26.61-1.119,32.256-1.119,32.256,3.013-2.5,15.615-3.305c2.877-.183,13.943-.334,13.943-.334l-2.689-6.782s2.046-2.267,1.085-4.639c-1.43-3.53-6.773-8.383-7.9-11.426C1034.68,242.829,1037.25,233.657,1033,225.448Z" transform="translate(-1016.563 -304.286)" fill="#f2ecbe" stroke="#707070" stroke-linecap="round" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M455.733,306.977c1.291,1.936,9.37,2.073,10.18,0a75.242,75.242,0,0,0,0-15.283c-.637-6.749.424-13.607,0-16.611-.446-3.153-2.6-8.452-3.86-3.655-.709,2.691-1.059,12.114-1.929,21.238C459.479,299.432,455.166,306.127,455.733,306.977Z" transform="translate(-417.076 -343.46)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M494.6,297c-.644,9.659-2.872,16.848-3.381,16.954-.807.169-3.783-7.828-4.87-16.954-.4-3.377,1.309-16.885,2.945-18.76a.945.945,0,0,1,.442-.266C491.94,276.745,494.845,293.308,494.6,297Z" transform="translate(-462.108 -364.94)" fill="#bcb57f" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M460.616,282.775c-.811-9.869-2.344-12.662-3.441-11.5-.565.6-2.14,3.655-1.981,7.99.131,3.59,1.2,11.559,1.2,16.2,0,9.561-.284,13.259.787,14.058s10.838-.527,10.779-2.842c-.022-.942-.833-1.991-1.94-3.578a17.334,17.334,0,0,1-2.139-3.929,70.588,70.588,0,0,1-3.26-16.4Z" transform="translate(-448.062 -344.733)" fill="none" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(-377.875 -161.51)">
                                                                                    <path id="p2" d="M376,1283h65" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1" d="M376,1283h65" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(-2.566 44.948)">
                                                                                    <path id="shape" d="M29.052.115C7.672-1.523-4.8,14.352,1.745,42.506c3.017,13,12.995,21.288,24.569,19.135,10.027-1.865,16.669-8.281,19.8-25.138C49.056,20.7,51.559,1.828,29.052.115Z" transform="translate(63.69 9.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412,22.21a19.457,19.457,0,0,0,10.18.736l2.918-.736,2.53-1V2.641L8.111,0,.04,2.641S-.18,21.979.412,22.21Z" transform="translate(24.985 25.502) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052.115A32.067,32.067,0,0,0,.322,1.528C.1,1.6,0,1.912,0,1.912V20.653l8.034,2.576L16,20.653V.411s.179.075-.293,0C15.082.31,14.094.194,13.052.115Z" transform="translate(63.689 25.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,20.738s1.368-5.823,2.11-11.008A94.033,94.033,0,0,0,18.762,0h-16L0,11.116l2.762,9.577Z" transform="translate(43.037 38.78) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793.036S.885-.145.793.3C-.311,5.608-.4,11.6,1.416,19.909c.008.042.184.82.184.82H16.1l2.189-9.967L16.1.036Z" transform="translate(43.073 9.444) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,0,2.076,10.682,0,20.693l8.109-2.554L14.471,20.2,16,20.693l-2.762-9.62L16,0,8.109,2.532Z" transform="translate(43.037 25.542) rotate(90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,0S.217.822.3,1.159C2.266,9.648,7.2,16.128,13.9,19.129c.062.028.648.245.648.245V0Z" transform="translate(22.344 10.991) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,18.631s0-.089.2-.178C5.8,15.923,10.05,10.709,12.84.771c.009-.031.248-.771.248-.771H0Z" transform="translate(22.344 41.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,19.492C15.954,10.41,12.774,2.366.774,0,.732,0,0,0,0,0V20.065H16S16,19.786,16,19.492Z" transform="translate(63.102 41.542) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,0s-.179.063-.567.207C7.638,2.766,2.326,8.927.141,18.414c.03-.138-.141.556-.141.556H15.316Z" transform="translate(62.007 10.226) rotate(90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(-0.523 -78.51)">
                                                                                    <g id="plaque" transform="translate(2.459 77.147)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712S18,16.868,26.807,14.4c3.81-1.067,7.526-7.231,17.08-7.654S65.02,12.712,65.02,12.712" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712S18,16.868,26.807,14.4c3.81-1.067,7.526-7.231,17.08-7.654S65.02,12.712,65.02,12.712" transform="translate(-8.424 -2.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712S18,16.868,26.807,14.4c3.81-1.067,7.526-7.231,17.08-7.654S65.02,12.712,65.02,12.712" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(1.031 111.86)">
                                                                                      <path id="p1-2" data-name="p1" d="M.212,34.244s-2.059.446-1.947.727C.846,41.6,8.844,49.724,14.585,47.028c5.793-2.721,6.363-5.95,12.122-5.545,2.131.15,2.733,1.778,5.4,3.274,3.822,2.147,9.976,4.452,14.963,3.222,7.916-1.953,9.922-9.652,11.307-14.306C58.347,33.767,53.363,31.709.212,34.244Z" transform="translate(1.74 -32.973)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(6.025 70.997)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654,1.847s8.226-3.18,16.878-6.18c2.51-.873,3.625-4.04,6.771-4.04,2.639,0,5.451,3.684,8.4,4.512,9.257,2.6,17.5,5.707,17.5,5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(0 14.218)">
                                                                                      <path id="p2-2" data-name="p2" d="M653.7,1669.857a119.246,119.246,0,0,0,1.84-21.178c-.1-7.372-2.5-14.706-1.84-20.589,1.572-13.974,2.72-11.391,3.635-15.794s.772-5.363,3.086-4.562,7.221,13.391,7.221,13.391,6.055-21.149,10.261-18.547a18.106,18.106,0,0,0,7.746,2.793s2.817,1.254,2.817,1.256,11.092,4.886,15.491,19.458c1.927,6.382.464,19.058,1.192,28.207.885,11.112,3.054,16.818,3.054,16.818s3.742,11.766,3.008,23.454-5.366,15.7-9.779,20.491a33.236,33.236,0,0,1-19.364-4.9c-8.972-5.856-13.143,8.309-21.107,3.432s-10.861-8.777-11.236-20.023c-.119-3.554,1-7.449,1.586-11.112C652.434,1675.465,653.7,1669.857,653.7,1669.857Z" transform="translate(-649.721 -1602.356)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M29.5.11C7.79-1.456-4.874,13.724,1.772,40.645,4.835,53.076,14.965,61,26.717,58.942c10.18-1.783,16.924-7.918,20.1-24.037C49.807,19.794,52.348,1.748,29.5.11Z" transform="translate(60.03 118.335) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(13.651 83)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(21.185 4)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(29.303 101.565)">
                                                                                      <path id="p1-7" data-name="p1" d="M664.635,1699.767l3.378-13.128,4.962,7.687,6.891-14.761" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(1.031 53)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a94.338,94.338,0,0,1,12-3.3A84.122,84.122,0,0,1,35.519,13.4c15.028,0,31.094,5.186,31.094,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M66.613,18.583S50.547,13.4,35.519,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(19.691)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(13.596 11.742) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(1.031 90.814)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a94.338,94.338,0,0,1,12-3.3A84.122,84.122,0,0,1,35.519,13.4c15.028,0,31.094,5.186,31.094,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M66.613,18.583S50.547,13.4,35.519,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(2.792 80.877)">
                                                                                      <path id="p1-11" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(2.994 80)">
                                                                                      <path id="p1-12" data-name="p1" d="M54.743,3.6s3.531,7.235,2.85,22.558S47.377,43.612,45.461,43.742s-12.151-1.7-16.667-5.851-9.621,3.321-13.771,4.151S.929,37.586-.077,28.943s2.6-27,2.6-27a38.75,38.75,0,0,1,9.686-2.5,87.694,87.694,0,0,1,16.576-1.06A92.811,92.811,0,0,1,45.461.232C52.01,1.49,54.743,3.6,54.743,3.6Z" transform="translate(-0.27 1.657)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(7.133 83.36)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(17.764 12.328)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(8.883 61.208)">
                                                                                      <path id="p1-13" data-name="p1" d="M13.558-13.025s-.123,1.891,0,5.244A134.341,134.341,0,0,0,15.59,11.462c1.947,9.514,5.631,13.661,5.631,13.661h23.04s6.321-3.753,8.428-13.661,2.293-26.815,2.293-26.815l-8.495,1.5S34.012-2.96,32.741-3.041s-4.018-3.1-6.781-6.26a30.684,30.684,0,0,1-4.274-6.368Z" transform="translate(-13.503 15.669)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(2.131 112.532)">
                                                                                      <path id="p1-14" data-name="p1" d="M3.97,42.792a35.169,35.169,0,0,0,5.1,5.6c2.614,2.149,5.916,3.959,8.781,3.733s8.557-4.865,8.557-4.865,3.528-1.306,4.725-.98A10.841,10.841,0,0,1,34.781,48.4a20.451,20.451,0,0,0,8.781,3.733c9.6,2.036,11.842-.992,14.622-3.168,1.2-.936,3.4-4.824,3.4-4.824S55.655,40.775,42.922,37.6c-8.6-2.146-14.9,3.609-24.289,2.26A23.6,23.6,0,0,0,3.97,42.792Z" transform="translate(-3.97 -37.115)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(14.186 19)">
                                                                                      <path id="p5" d="M806.3,381.864l-1.118,10.952s6.116,6.067,11.209,8.064,3.278,1.957,8.5,0,12.44-7.6,12.44-7.6l-.251-5Z" transform="translate(-805.182 -332.978)"></path>
                                                                                      <path id="p4" d="M808.83,365.231l-1.958,7.545L836,378.856l-1.657-8.133Z" transform="translate(-805.182 -327.288)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.451,348.775l-1.622,7.542,25,5.259-1.364-8.15Z" transform="translate(-805.182 -321.658)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M812.186,332.484l-1.207,7.445,20.74,4.168-1.659-7.839Z" transform="translate(-805.182 -316.084)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M829.419,324.23l-16.668-3.324s.528-14.042,8.635-13.322S829.419,324.23,829.419,324.23Z" transform="translate(-805.182 -307.556)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(4.011 14)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877h49.93" transform="translate(-2.855 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877h49.93" transform="translate(-0.55 62.487)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877h49.93" transform="translate(-2.855 67.097)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877h49.93" transform="translate(-0.55 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877h49.93" transform="translate(-2.855 76.317)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877h49.93" transform="translate(-0.55 80.927)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877h49.93" transform="translate(-2.855 85.537)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877h49.93" transform="translate(-0.55 88.994)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877h49.93" transform="translate(-2.855 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877h49.93" transform="translate(-0.55 98.214)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877h49.93" transform="translate(-2.855 102.824)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877h49.93" transform="translate(-0.55 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(1.802 28.194)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417,64.687-6.106" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(17.593 92.285)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 26 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t5">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="44.254" height="187" viewBox="0 0 44.254 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top5" transform="translate(-21.644 80.932)">
                                                                                  <g id="crown">
                                                                                    <path id="p1" d="M8.11,4.127C6.986,9.051-.43,18.593.02,30.288s-.337,11.8,11.237,15.7,8.652,4.822,14.158,2.77S45.079,38.9,43.056,26.7,36.764,10.18,36.089,4.127,9.235-.8,8.11,4.127Z" transform="translate(22)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(22 17.201)">
                                                                                    <path id="rb1" d="M1394.03,289.815s-8.513-71.485-19.21-70.693-8.608,70.887-8.608,70.887,1.616-1.764,7.127-2.4,11.093-.788,14.916-.138a12.777,12.777,0,0,1,5.775,2.342Z" transform="translate(-1358.081 -303.524)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M1358.42,214.808c-2.3.223,2.291,7.947,3.291,18.1,1.619,16.439,1.3,36.065,1.3,36.065s-.133.483,3.04,0,3.04-1.138,3.04-1.138,1.4-4.453,0-14.139-1.716-14.968-3.985-24.717S1359.29,214.721,1358.42,214.808Z" transform="translate(-1340.323 -291.166)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M1366.14,229.312c-6.158.6-2.883,44.317-2.883,44.317a23.794,23.794,0,0,0,4.238-.407c3.173-.483,3.1-.569,3.1-.569a154.4,154.4,0,0,0-3.1-16.014c-1.439-6.214-1.355-15.01-1.355-15.01S1367,229.228,1366.14,229.312Z" transform="translate(-1350.144 -292.389)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(-354.356 -160.432)">
                                                                                    <path id="p2" d="M376,1283h44" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h44" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(22.497 55.568)">
                                                                                    <path id="shape" d="M-52.017-82c3.286,2.459,6.792,3.838,8.568,7.043A21.184,21.184,0,0,1-41.277-63.84,34.68,34.68,0,0,1-43.741-52.4a20.573,20.573,0,0,1-6.81,9.581c-3.154,2.128-7.315,2.68-11.5,2.707-4.161.028-8.375-.442-11.847-2.377a20.376,20.376,0,0,1-8.11-9.092,22.321,22.321,0,0,1-2.28-11.936A25.759,25.759,0,0,1-80.1-74.487c2.1-3.283,3.1-3.2,6.2-5.792,3.075-2.6,8.216-7.911,11.823-7.829S-55.329-84.454-52.017-82Z" transform="translate(84.367 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M-54.677-72.112l-2.832,7.5,2.832,8.5-7.845-2.2-7.845,2.2,2.359-8.5-2.359-7.5,7.845,3.1Z" transform="translate(84.096 88.113)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M-78.434-46.175a40.3,40.3,0,0,1-3.577-5.407,22.321,22.321,0,0,1-2.28-11.936A25.759,25.759,0,0,1-80.1-74.487a13.25,13.25,0,0,1,4.45-4.424l5.014,6.8,2.373,7.565-2.373,8.435Z" transform="translate(84.367 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M-48.166-79.759c1.9,1.212,4,2.561,5.241,4.806A21.184,21.184,0,0,1-40.752-63.84,34.68,34.68,0,0,1-43.216-52.4a24.179,24.179,0,0,1-2.417,4.854l-8.79-8.615-2.848-8.412,2.848-7.542Z" transform="translate(83.842 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M-51.845-82c1.071.8,2.028,1.4,3.333,2.233l-6.264,7.68-7.845,3.065-7.845-3.065-5.027-6.8c.333-.24.942-.707,1.76-1.392,3.075-2.6,8.216-7.911,11.823-7.829S-55.157-84.454-51.845-82Z" transform="translate(84.195 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M-45.99-47.549a19.913,19.913,0,0,1-4.445,4.728c-3.154,2.128-7.315,2.68-11.5,2.707-4.161.028-8.375-.442-11.847-2.377a18.261,18.261,0,0,1-4.033-3.157c0,.005-.55-.465-.55-.465l7.845-10.041,7.845-2.158,7.845,2.158Z" transform="translate(84.251 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(15.789 3.445)">
                                                                                    <g id="plaque" transform="translate(1.263 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(0.109 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M-.828,33.278s.271,3.539,2.5,4.775c2.385,1.327,6.646,2.524,10,3.793,3.838,1.455,6.948,2.841,8.427,2.962a46.652,46.652,0,0,0,10.361-5.215c3.812-2.448,8.082-6.184,7.362-7C36.975,31.553,13.26,32.5-.828,33.278Z" transform="translate(8.509 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(13.601 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847S16.7-1.333,22-4.333c1.539-.873,2.222-4.04,4.15-4.04,1.617,0,3.341,3.684,5.146,4.512A113.011,113.011,0,0,1,42.025,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M661.667,1706.365a39.725,39.725,0,0,1-.624-17.805c.891-4.318,3.325-8.54,5.158-13.154.718-1.8,2.562-4.466,2.338-6.448-.9-7.97-.737-37.351,2.036-55.735,1.323-8.776,4.083-14.784,5.506-13.915,4.259,2.6,7.127,12.1,7.127,12.1l5.845,27.075,4.978,32.317s9.013,21.608,6.675,27.226c-1.531,3.68-5.452,8.284-10.031,11.69-2.027,1.512-4.078,3.149-6.693,3.361-.944.079-2.231,1.167-3.5,1.049-1.151-.106-1.8-1.165-3.213-1.495A66.321,66.321,0,0,1,661.667,1706.365Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M21.182.7C11.843.2,8.813,6.77,8.813,6.77S6.825,9.4,4.213,12.653c-2.014,2.5-4.692,5.484-4.3,8.6.252,2,4.638,7.127,4.638,7.127a27.568,27.568,0,0,0,7.618,8.564C15.882,39.7,21.888,42,26.876,41.35c7.292-.95,12.641-3.722,16.291-10.106.576-1,4.484-11.923.453-20.137C40.613,4.975,30.99,1.222,21.182.7Z" transform="translate(50.258 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(2 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-3.645 -5.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-0.379 -3)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1704.422l3.683-16.153,5.412,9.458,7.515-18.162" transform="translate(-638.994 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(6.977 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-2.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(6.977 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(4.134 2.639)">
                                                                                      <path id="p1-12" data-name="p1" d="M32.659,60.024s-19.653,3.9-18.612,8.571,22.775,6,22.775,10.122-22.775,6.367-22.775,6.367" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-13" data-name="p1" d="M7.105,3.616C6.121,7.93-.377,16.29.018,26.536s-.3,10.338,9.845,13.755,7.58,4.225,12.4,2.427S39.5,34.081,37.723,23.392,32.21,8.919,31.619,3.616,8.091-.7,7.105,3.616Z" transform="translate(10.894 1.566)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(24.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(4.943 -2)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.542-13.166s-.088,2.031,0,5.384c.128,4.9-3.068,13-2.193,19.011,1.384,9.514,2.192,13.76,2.192,13.76h16.37s1.066-3.36,2.563-13.268-1.731-27.391-1.731-27.391l-7.04.831s.044,11.789-.859,11.708-1.632-4.245-1.632-4.245l-1.766-7.859Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-15" data-name="p1" d="M7.474,39.247a7.939,7.939,0,0,0,2.47,6.266,12.288,12.288,0,0,0,2.234,1.178c2.441,1.293,6.97,2.382,10.888,3.9,2.382.923,3.877,2.46,6.561,2.133,2.154-.258,8.288-3.392,8.288-3.392s3.6-2.4,5.837-4.3a16.255,16.255,0,0,0,3.107-3.291s-3.841-4.158-12.169-3.713c-3.993.213-12.021,2.752-15.448,2.535C9.395,39.941,7.474,39.247,7.474,39.247Z" transform="translate(1.355 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(11.838 -70.25)">
                                                                                      <path id="p5" d="M806.154,381.864l-.639,11.043s4.984,5.976,9.41,7.973,2.849,1.957,7.388,0,10.847-7.831,10.847-7.831l-.253-4.77Z" transform="translate(-803 -322.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(13.801 11.408)">
                                                                                      <path id="p1-17" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 25 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t4">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="49.254" height="187" viewBox="0 0 49.254 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top4" transform="translate(-746.985 -115.867)">
                                                                                  <g id="crown" transform="translate(747.239 196.101)">
                                                                                    <path id="p1" d="M39.77,2.9s4.13,9.26,7.245,15.858a15.911,15.911,0,0,1,0,12.889S36.121,46.223,23.8,50.059.421,34.1.012,27.555,9.525,2.9,9.525,2.9A40.445,40.445,0,0,1,23.8,0C31.356,0,39.77,2.9,39.77,2.9Z" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(756.79 124.367)">
                                                                                    <path id="rb1" d="M922.656,160.509s-10.192-25.837-8.379-49.448.479-24.083-6.294-25.449a7.84,7.84,0,0,0-3.217.808,31.288,31.288,0,0,0-3.517,2.529c-2.441,2.157-4.143,12.9-6.32,23.936-2.057,10.424-.512,38.606-1.94,45.451-.032.164-.62,1.8-.62,1.8a48.538,48.538,0,0,1,14.188-2.122A73.186,73.186,0,0,1,922.656,160.509Z" transform="translate(-892.369 -85.612)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M904.089,137.553c2.137-.163-5.741-18.142-5.145-35.02s-.011-17.6-1.444-16.964-3.574,11.611-4.29,19.494c-.676,7.451-1.265,30.736-.628,32.489S901.953,137.716,904.089,137.553Z" transform="translate(-880.035 -69.513)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M900.953,100.521c.784-16.874,3.2-24.6,1.317-23.968s-5.142,16.082-6.084,23.968c-.889,7.451-1.626,22.107-1.909,28.783s2.057,6.012,4.158,6.006C901.71,135.377,900.169,117.4,900.953,100.521Z" transform="translate(-890.011 -66.684)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(371.239 36.367)">
                                                                                    <path id="p2" d="M376,1283h49" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h49" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(749.238 252.367)">
                                                                                    <path id="shape" d="M-50.252-82c3.466,2.459,7.163,3.838,9.035,7.043A20.253,20.253,0,0,1-38.926-63.84a33.157,33.157,0,0,1-2.6,11.438,20.645,20.645,0,0,1-7.182,9.581c-3.326,2.128-7.714,2.68-12.13,2.707-4.388.028-8.832-.442-12.494-2.377a20.8,20.8,0,0,1-8.552-9.092,21.335,21.335,0,0,1-2.4-11.936,24.977,24.977,0,0,1,4.416-10.969c2.212-3.283,3.27-3.2,6.535-5.792,3.243-2.6,8.664-7.911,12.468-7.829S-53.745-84.454-50.252-82Z" transform="translate(84.367 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M-53.821-72.112l-2.986,7.5,2.986,8.5-8.273-2.2-8.273,2.2,2.488-8.5-2.488-7.5,8.273,3.1Z" transform="translate(84.845 88.113)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M-78.111-46.175a40.229,40.229,0,0,1-3.772-5.407,21.335,21.335,0,0,1-2.4-11.936,24.977,24.977,0,0,1,4.416-10.969,13.651,13.651,0,0,1,4.693-4.424l5.288,6.8,2.5,7.565-2.5,8.435Z" transform="translate(84.367 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M-47.669-79.759c2.008,1.212,4.215,2.561,5.527,4.806A20.253,20.253,0,0,1-39.85-63.84,33.157,33.157,0,0,1-42.45-52.4,23.7,23.7,0,0,1-45-47.548l-9.269-8.615-3-8.412,3-7.542Z" transform="translate(85.292 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M-50.555-82c1.13.8,2.138,1.4,3.514,2.233l-6.606,7.68-8.273,3.065-8.273-3.065-5.3-6.8c.351-.24.993-.707,1.856-1.392,3.243-2.6,8.664-7.911,12.468-7.829S-54.048-84.454-50.555-82Z" transform="translate(84.67 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M-44.224-47.549a20.389,20.389,0,0,1-4.688,4.728c-3.326,2.128-7.714,2.68-12.13,2.707-4.388.028-8.832-.442-12.494-2.377a19.161,19.161,0,0,1-4.253-3.157c0,.005-.58-.465-.58-.465l8.273-10.041,8.273-2.158,8.273,2.158Z" transform="translate(84.572 88.113)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(744.383 200.244)">
                                                                                    <g id="plaque" transform="translate(1.263 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(0.109 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M.021,33.727s4.243,6.657,6.471,7.893c2.385,1.327,7.15,3.458,8.628,3.579a68.581,68.581,0,0,0,12.55-6.226,34.466,34.466,0,0,0,6.618-5.695S14.11,32.949.021,33.727Z" transform="translate(8.509 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(12.601 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847S16.7-1.333,22-4.333c1.539-.873,2.222-4.04,4.15-4.04,1.617,0,3.341,3.684,5.146,4.512A113.011,113.011,0,0,1,42.025,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M657.425,1689.713c.569-2.755,3.728-10.529,6.537-16.683,1.391-3.045,3.494-7.616,3.494-7.616s.263-10.35.574-19.246c.257-7.354-.35-16.132.956-24.791,1.323-8.776,4.38-21.954,8.285-25.746s8.858,1.336,8.858,1.338.269,4.738,0,12.555c-.289,8.388-1.386,16.585.892,31.864a112.341,112.341,0,0,0,6.437,25.046s3.476,7.174,6.309,14.339c2.1,5.309,4.354,8.977,2.231,13.829-1.246,2.847-4.914,6.556-7.3,8.973a50.567,50.567,0,0,1-10.37,7.919c-4.327,2.63-5.449,2.05-6.939,2.6-2.108.781-7.713-1.284-12.595-6.562C660.247,1702.625,656.443,1694.469,657.425,1689.713Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M21.182.7C11.843.167,8.813,7.161,8.813,7.161s-1.989,2.8-4.6,6.26C2.2,16.084-.48,19.257-.086,22.57c.252,2.133,4.638,7.584,4.638,7.584a28.973,28.973,0,0,0,7.618,9.113c3.711,2.94,9.718,5.382,14.706,4.69C34.168,42.946,39.517,40,43.166,33.2c.576-1.068,4.484-12.688.453-21.428C40.613,5.251,30.99,1.257,21.182.7Z" transform="translate(50.888 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(2 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-0.645 -10.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-3.491 -3)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1705.177l4.374-16.644,6.426,9.745,8.923-18.714" transform="translate(-638.994 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(6.977 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(0.355 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(6.977 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(4.134 2.639)">
                                                                                      <path id="p1-12" data-name="p1" d="M32.659,60.024s-19.653,3.9-18.612,8.571,22.775,6,22.775,10.122-22.775,6.367-22.775,6.367" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-13" data-name="p1" d="M34.393,2.508s3.572,8.008,6.265,13.714a13.76,13.76,0,0,1,0,11.146S31.237,39.974,20.582,43.291.364,29.49.01,23.83,8.237,2.508,8.237,2.508A34.977,34.977,0,0,1,20.582,0,49.893,49.893,0,0,1,34.393,2.508Z" transform="translate(8.211 1.302)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(24.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(2.834 -2)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.77-13.166a35.46,35.46,0,0,0-.2,5.445c.14,4.9-3.164,12.938-2.2,18.95,1.518,9.514,2.405,13.76,2.405,13.76H31.732s1.169-3.36,2.812-13.268c.815-4.914.5-11.591-.409-17.377a63.255,63.255,0,0,0-2.3-9.579l-10.187.369.1,8.786.288,4.669c-.99-.081-1.791-4.245-1.791-4.245l.2-9.307Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-15" data-name="p1" d="M6.566,40.566s.653.931,1.83,2.629a19.714,19.714,0,0,0,1.83,2.454c1.1,1.266,2.566,2.611,2.566,2.611a26.371,26.371,0,0,0,6.069,3.793,11.777,11.777,0,0,0,6.6.536c1.906-.258,7.988-3.659,7.988-3.659a42.884,42.884,0,0,0,5.489-4.106c1.979-1.9,3.392-3.08,3.392-3.08s-3.4-4.158-10.772-3.713c-3.535.213-10.641,2.752-13.674,2.535C9.173,39.941,6.566,40.566,6.566,40.566Z" transform="translate(2.898 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(11.838 -71.25)">
                                                                                      <path id="p5" d="M806.154,381.864l-.523,11.178s4.867,5.841,9.294,7.838,2.849,1.957,7.388,0,10.094-7.254,10.094-7.254l.5-5.346Z" transform="translate(-803 -323.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(13.801 11.408)">
                                                                                      <path id="p1-17" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 24 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t3">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="46" height="187" viewBox="0 0 46 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top3" transform="translate(-808.5 -114.589)">
                                                                                  <g id="crown" transform="translate(808.825 196.033)">
                                                                                    <path id="p1" d="M34.051.152s13.989,23.034,10.734,31.5S26.965,49.965,22.626,50.427.192,41.2.346,32.121c.048-2.833-.113-7.445.671-10.187C2.487,16.79,5.58,14.263,5.58,10.874,5.58,8.774,3.526,1.88,9.5.152,17.47-2.152,34.051.152,34.051.152Z" transform="translate(0.001)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(813.733 126.83)">
                                                                                    <path id="rb1" d="M1147.78,130.5s-9.409-28.467-6.822-46.115,7.381-19.283-4.174-23.879-18.893,43.829-18.206,59.784c.243,5.617.723,12.9.723,12.9a6.014,6.014,0,0,1,3.657-2.69c1.845-.534,2.963-.659,12.773-.652S1147.78,130.5,1147.78,130.5Z" transform="translate(-1118.534 -60.208)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M1128.55,112.709c3.283.452-3.222-21.261-2.336-34.441s2.527-14.4-1.429-17.834-6.469,32.734-6.234,44.651c.083,4.195-1.151,7.862,1.091,7.35S1125.27,112.257,1128.55,112.709Z" transform="translate(-1110.302 -48.227)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(432.5 35.089)">
                                                                                    <path id="p2" d="M376,1283h46" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h46" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface">
                                                                                    <path id="shape" d="M949.874,1755.918c-9.477,0-23.606-30.316-18.839-40.421s33.2-10.105,37.908,0S959.351,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1755.918c-3.645,0-7.977-4.484-11.928-11.038-.1-.166-.6-1.022-.6-1.022l12.523-11.623,12.214,12.277s-.119.2-.337.574C958.239,1751.056,953.67,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1743.861s-.225-.4-.475-.849c-5.045-9.1-8.6-21.678-5.842-27.515,1.156-2.45,3.7-4.306,7.474-5.753l.434-.156,10.89,22.579Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1709.211s.378.106.861.254c3.579,1.076,6.87,3.14,8.218,6.032,2.722,5.841-.907,18.434-6.429,28.277-.091.162-.428.75-.428.75l-12.2-12.339Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1709.6s.395-.155.711-.262c5.432-1.876,13.191-2.02,19.748-.293l.51.158-1.268,2.8-18.379.29Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1732l-9.543-19.754,18.42-.29Z" transform="translate(-117.586 -1456.829)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(805.645 198.966)">
                                                                                    <g id="plaque" transform="translate(-1.737 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(0.109 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M-.3,33.285s7.2,7.191,9.63,8.549c2.6,1.459,8.308,4.132,9.92,4.264.335.027,3.709-1.536,8.035-4.264.808-.509,1.741-1.538,2.9-2.29A31.38,31.38,0,0,0,37.3,32.928S15.075,32.429-.3,33.285Z" transform="translate(6.294 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(8.601 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847S16.7-1.333,22-4.333c1.539-.873,2.222-4.04,4.15-4.04,1.617,0,3.341,3.684,5.146,4.512A113.011,113.011,0,0,1,42.025,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M662.715,1669.036s-.827-21.056.479-29.715c.733-4.862,2.426-15.19,4.789-24.285,1.777-6.841,4.119-12.951,5.86-14.643a8.425,8.425,0,0,1,3.643-2.138c1.487-.358,3.043.465,4.74,1.508,1.283.771,2.639,1.22,3.292,4.9.137.771-.98,4.751-.98,4.751s-4.406,13.848-2.312,27.89a296.722,296.722,0,0,0,7.365,32.823,23.47,23.47,0,0,1,5.128,7.127c2.109,4.509,4.979,10.715,5.091,17.346a10.135,10.135,0,0,1-4.642,9.178s-5.183,5.36-9.51,7.991a30.435,30.435,0,0,1-7.01,3.481c-1.2.446-8.537-2.541-14.118-7.01-3.8-3.039-6.668-7.429-6.961-9.9-.474-3.992.282-7.831,1.569-12.795s3.408-5.541,3.579-7.059A54.936,54.936,0,0,0,662.715,1669.036Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M12.058,4.6C2.72,4.067.33,11.916-.235,21.23S1.423,40.253,9.342,41.95s39.705-11.565,35.674-20.3c-1.491-3.236-5.727-6.862-12.557-10.521C26.08,7.705,17,4.881,12.058,4.6Z" transform="translate(50.888 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(-1 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-2.645 -10.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-3.491 -3)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1705.468l4.433-16.833,6.513,9.856,9.044-18.926" transform="translate(-639.262 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(3.977 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-1.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(3.977 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a50.7,50.7,0,0,1,8.288-3.3A41.055,41.055,0,0,1,26.537,13.4c10.377,0,21.47,5.186,21.47,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M48.007,18.583S36.913,13.4,26.537,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-12" data-name="p1" d="M29.745.021s12.2,20.091,9.363,27.476S23.564,43.47,19.779,43.873.212,35.826.346,27.906c.042-2.471-.1-6.494.586-8.885,1.282-4.487,3.979-6.691,3.979-9.647C4.911,7.542,3.12,1.528,8.33.021,15.282-1.988,29.745.021,29.745.021Z" transform="translate(8.455 2.728)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(24.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(-6.166 -2)">
                                                                                      <path id="p1-13" data-name="p1" d="M39.975,25.773c1.332,0-3.775-20.148-3.775-20.148S35.039.131,34.135-5.655c-.82-5.254-1.512-9.19-1.512-9.19l-10.406-.019-.466,8.786.288,4.669S19.034,23.763,20.926,24.5,38.643,25.773,39.975,25.773Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-14" data-name="p1" d="M6.05,42.731a28.123,28.123,0,0,0,5.624,5.126,42.241,42.241,0,0,0,8.789,4.989,8.223,8.223,0,0,0,6.854.544c1.8-.543,6.848-3.539,10.67-6.8,2.653-2.263,4.688-4.43,4.688-4.43a13.625,13.625,0,0,0-11.112-4.13c-3.535.213-10.641,2.752-13.674,2.535C9.173,39.941,6.05,42.731,6.05,42.731Z" transform="translate(2.898 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(6.838 -71.25)">
                                                                                      <path id="p5" d="M806.154,381.864l.286,12.458s4.058,4.562,8.485,6.558,2.849,1.957,7.388,0,10.08-7.793,10.08-7.793l.515-4.808Z" transform="translate(-803 -323.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(3.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-7.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(12.801 11.408)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 23 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t2">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="43" height="187" viewBox="0 0 43 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top2" transform="translate(-849.5 -116.079)">
                                                                                  <g id="crown" transform="translate(850.144 193.658)">
                                                                                    <path id="p1" d="M36.9,3.723S37.83,22.8,40.619,36.05,36.59,52.134,30.856,54.184,1.56,49.611-.144,39.2,6.389,5.451,6.389,5.451s1.68-3.575,2.683-3.907C11.789.642,15.766-.3,22.649.287A60.433,60.433,0,0,1,36.9,3.723Z" transform="translate(0.067 -0.105)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(857.411 124.579)">
                                                                                    <path id="rb1" d="M1391.27,234.14s.05.033,0-.437c-.447-4.177-5.266-48.787-6.667-60.7-1.475-12.539-8.892-10.078-8.892-10.078s-5.693-7.935-7.986,11.28c-2.1,17.615-6.353,60.325-6.353,60.325s.6-1.054,3.848-1.585a48.26,48.26,0,0,1,9.762-.591,111.541,111.541,0,0,1,16.288,1.789Z" transform="translate(-1361.576 -161.302)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M1369.22,168.642c-.489-9.024-3.806-12.408-5.2-12.192s.367-.766-.394,13.057c-.7,12.675-2.78,42.8-1.7,42.423s6.82-.1,7.906,0C1372.34,212.016,1369.7,177.663,1369.22,168.642Z" transform="translate(-1351.648 -148.82)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(473.5 36.579)">
                                                                                    <path id="p2" d="M376,1283h43" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h43" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(38 1.49)">
                                                                                    <path id="shape" d="M949.874,1755.918c-9.477,0-23.606-30.316-18.839-40.421s33.2-10.105,37.908,0S959.351,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1755.918c-3.645,0-7.977-4.484-11.928-11.038-.1-.166-.6-1.022-.6-1.022l12.523-11.623,12.214,12.277s-.119.2-.337.574C958.239,1751.056,953.67,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1743.861s-.225-.4-.475-.849c-5.045-9.1-8.6-21.678-5.842-27.515,1.156-2.45,3.7-4.306,7.474-5.753l.434-.156,10.89,22.579Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1709.211s.378.106.861.254c3.579,1.076,6.87,3.14,8.218,6.032,2.722,5.841-.907,18.434-6.429,28.277-.091.162-.428.75-.428.75l-12.2-12.339Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1709.6s.395-.155.711-.262c5.432-1.876,13.191-2.02,19.748-.293l.51.158-1.268,2.8-18.379.29Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1732l-9.543-19.754,18.42-.29Z" transform="translate(-117.586 -1456.829)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(846.645 200.456)">
                                                                                    <g id="plaque" transform="translate(-1.737 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-0.891 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M2.848,32.478c-.929.3-3.328.236-3.205,1.659s1.39,2.132,3.7,4.035a32.074,32.074,0,0,0,5.77,3.281c2.6,1.459,11.548,4.016,13.161,4.148.178.015,6.391,1.364,11.162-2.112a13.877,13.877,0,0,0,3.96-4.3,14.889,14.889,0,0,0,.98-3.922,4.369,4.369,0,0,0-.453-2.791S9.994,30.139,2.848,32.478Z" transform="translate(6.294 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(9.601 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847S16.7-1.333,22-4.333c1.539-.873,2.222-4.04,4.15-4.04,1.617,0,3.341,3.684,5.146,4.512A113.011,113.011,0,0,1,42.025,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M664.528,1666.723l1.6-13.383,5.687-52.209s1.623-6.207,2.99-6.52c.569-.137,1.75,1.047,3.235,1.618,1.647.628,3.135.092,4.182.735,1.283.771,2.639,4.02,3.292,7.7.137.771,6.448,62.057,6.448,62.057s.706,10.411,1.961,20.589c.823,6.673,2.307,13.334,2.353,16.079.112,6.631-2.362,8.2-6.689,10.834s-19.937-.678-25.519-5.147c-3.8-3.039-6.276-5.37-6.569-7.844-.474-3.992.331-10.969,1.618-15.932S664.528,1666.723,664.528,1666.723Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M12.058,4.6C2.72,4.067.33,11.916-.235,21.23S1.423,40.253,9.342,41.95s39.705-11.565,35.674-20.3c-1.491-3.236-5.727-6.862-12.557-10.521C26.08,7.705,17,4.881,12.058,4.6Z" transform="translate(47.888 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(-2 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-2.645 -10.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-9.491 -6)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1705.756l4.433-17.02,6.513,9.966,9.044-19.137" transform="translate(-639.262 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(4.277 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a46.651,46.651,0,0,1,7.852-3.3A37.031,37.031,0,0,1,25.482,13.4c9.83,0,20.339,5.186,20.339,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M45.821,18.583S35.312,13.4,25.482,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-1.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(4.277 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a46.651,46.651,0,0,1,7.852-3.3A37.031,37.031,0,0,1,25.482,13.4c9.83,0,20.339,5.186,20.339,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M45.821,18.583S35.312,13.4,25.482,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-12" data-name="p1" d="M31.761,3.224s.8,16.447,3.206,27.87S31.494,44.961,26.55,46.729,1.293,42.786-.176,33.81s5.632-29.1,5.632-29.1S6.9,1.632,7.77,1.346C10.112.568,13.541-.244,19.475.262A52.1,52.1,0,0,1,31.761,3.224Z" transform="translate(8.837 -0.732)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(20.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(-2.166 -2)">
                                                                                      <path id="p1-13" data-name="p1" d="M36.2,26.027c1.332,0-1.041-19.138-1.041-19.138A108.036,108.036,0,0,0,34.135-5.655c-.82-5.254-1.753-9.19-1.753-9.19H22.718l-.967,8.766L21-.146s-5.739,24.163-3.847,24.9S34.868,26.027,36.2,26.027Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-14" data-name="p1" d="M2.724,36.2A9.937,9.937,0,0,0,3.78,41.475C5.3,44.3,8.974,46.654,11.057,48.112c3.6,2.524,10.9,4.45,10.9,4.45S29.757,54.9,33,53.92a18.982,18.982,0,0,0,8.409-4.3c2.653-2.263,2.866-8.145,2.866-8.145s-1.554-1.723-8.926-1.279c-3.535.213-6.523,3.6-13.4,2.6S10.783,37.3,7.852,36.2A8.469,8.469,0,0,0,2.724,36.2Z" transform="translate(2.898 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(9.838 -73.25)">
                                                                                      <path id="p5" d="M806.154,381.864l.387,11.122s3.957,5.9,8.384,7.894,2.849,1.957,7.388,0,9.353-7.242,9.353-7.242l1.241-5.358Z" transform="translate(-803 -323.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(7.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(10.801 11.408)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 22 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t1">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="49.393" height="187" viewBox="0 0 49.393 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="top1" transform="translate(-893.635 -109.975)">
                                                                                  <g id="crown" transform="translate(893.789 188.862)">
                                                                                    <path id="p1" d="M1571.82,569.007s4.878,24.457,7.215,35.725S1575.86,620.9,1564,620.849s-32.42-.267-32.42-13,3.812-35.353,9.368-39.027S1571.82,569.007,1571.82,569.007Z" transform="translate(-1531.323 -567.236)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(900.95 118.475)">
                                                                                    <path id="rb1" d="M1617.19,208.818s-.369-44.8-12.375-65.052c-3.89-6.561-5.7-7.874-7.843-8-3.5-.259-4.508,8-4.508,8l-2.24,23.447-6.473,43.589s.376-3.292,9.143-3.5S1617.19,208.818,1617.19,208.818Z" transform="translate(-1583.751 -135.762)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M1594.28,188.023c.754-1.2-.116-32.053-3.9-46.531-1.227-4.693-1.8-5.633-2.473-5.721-1.1-.186-1.422,5.721-1.422,5.721l-.706,16.772s-2.762,27.337-1.909,29.16c.341.729,2.477-.2,4.563,0C1591,187.674,1593.83,188.745,1594.28,188.023Z" transform="translate(-1572.4 -121.37)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="bounds" transform="translate(518.028 30.475)">
                                                                                    <path id="p2" d="M376,1283h49" transform="translate(0 -1203)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                    <path id="p1-2" data-name="p1" d="M376,1283h49" transform="translate(0 -1017)" fill="none" stroke="#707070" stroke-width="1"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(86.528 -4.614)">
                                                                                    <path id="shape" d="M949.874,1755.918c-9.477,0-23.606-30.316-18.839-40.421s33.2-10.105,37.908,0S959.351,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1755.918c-3.645,0-7.977-4.484-11.928-11.038-.1-.166-.6-1.022-.6-1.022l12.523-11.623,12.214,12.277s-.119.2-.337.574C958.239,1751.056,953.67,1755.918,949.874,1755.918Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1743.861s-.225-.4-.475-.849c-5.045-9.1-8.6-21.678-5.842-27.515,1.156-2.45,3.7-4.306,7.474-5.753l.434-.156,10.89,22.579Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1709.211s.378.106.861.254c3.579,1.076,6.87,3.14,8.218,6.032,2.722,5.841-.907,18.434-6.429,28.277-.091.162-.428.75-.428.75l-12.2-12.339Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1709.6s.395-.155.711-.262c5.432-1.876,13.191-2.02,19.748-.293l.51.158-1.268,2.8-18.379.29Z" transform="translate(-117.586 -1456.829)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1732l-9.543-19.754,18.42-.29Z" transform="translate(-117.586 -1456.829)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(895.172 194.352)">
                                                                                    <g id="plaque" transform="translate(-3.737 -3.46)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -7)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 -3.147)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,12.712s6.383,4.156,12.254,1.691c2.54-1.067,5.017-7.231,11.385-7.654s14.088,5.962,14.088,5.962" transform="translate(-1 0.853)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-0.891 31.07)">
                                                                                      <path id="p1-3" data-name="p1" d="M3.414,32.549c-1.093.325-3.914.252-3.77,1.774s1.058,5.206,3.77,7.24c2.321,1.741,5.5,2.855,6.787,3.507,3.062,1.56,14.16,1.366,16.057,1.507.209.016,8.671,1.64,14.283-2.076a40.97,40.97,0,0,0,4.657-4.6,17.8,17.8,0,0,1,0-4.374,4.319,4.319,0,0,0-.532-2.983S11.82,30.049,3.414,32.549Z" transform="translate(1.168 -30.717)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(6.708 -9.88)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654,1.847s5.523-3.18,11.33-6.18c1.685-.873,2.434-4.04,4.546-4.04,1.771,0,3.659,3.684,5.637,4.512A127.973,127.973,0,0,1,44.918,1.847" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-0.863 -50.357)">
                                                                                      <path id="p2-2" data-name="p2" d="M660.661,1666.723v-4.26l6.223-39.806,1.848-20.7s.877-6.175,2.64-7.24,2.926,2.408,4.412,2.979c.367.14,2.644,2.915,4.978,8.221a113.272,113.272,0,0,1,6.147,20.7c3.832,18.343,3.91,40.105,3.91,40.105l3.109,15.292s4.3,18.132,4.347,20.878c.112,6.631-.02,8.554-4.347,11.185s-30.667,2.315-36.248-2.154c-3.8-3.039-4.346-3.657-4.64-6.131-.474-3.992,2.11-24.448,3.4-29.411A39.986,39.986,0,0,1,660.661,1666.723Z" transform="translate(-652.013 -1618.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M12.058,4.6C2.72,4.067.33,11.916-.235,21.23S1.423,40.253,9.342,41.95s39.705-11.565,35.674-20.3c-1.491-3.236-5.727-6.862-12.557-10.521C26.08,7.705,17,4.881,12.058,4.6Z" transform="translate(47.888 103.97) rotate(90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(-4 -2)">
                                                                                      <path id="p3" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 10.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 5.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,9.123s8-5.465,16-5.465,16,5.465,16,5.465" transform="translate(0 0.465)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(-4.645 -10.96)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-69.417a6.083,6.083,0,0,0,0,8,6.083,6.083,0,0,0,8,0,6.083,6.083,0,0,0,0-8A6.083,6.083,0,0,0,22.5-69.417Z" transform="translate(1)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(-9.491 -6)">
                                                                                      <path id="p1-8" data-name="p1" d="M664.635,1709.176l4.433-19.243,6.513,11.267,9.044-21.636" transform="translate(-639.262 -1655.877)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(0.245 -27.877)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,18.583a55.755,55.755,0,0,1,8.8-3.3A46.061,46.061,0,0,1,27.777,13.4c11.019,0,22.8,5.186,22.8,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M50.575,18.583S38.8,13.4,27.777,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(-3.645 -3.46)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0l6.8,11.742H0Z" transform="translate(33.096 -65.675) rotate(180)" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(0.245 9.937)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,18.583a55.755,55.755,0,0,1,8.8-3.3A46.061,46.061,0,0,1,27.777,13.4c11.019,0,22.8,5.186,22.8,5.186v16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M50.575,18.583S38.8,13.4,27.777,13.4,6.5,18.583,6.5,18.583" transform="translate(-6.5 -0.211)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-2.17 -2.117)">
                                                                                      <path id="p1-12" data-name="p1" d="M1566.17,568.758s4.193,21.023,6.2,30.71-2.729,13.9-12.924,13.854-27.869-.229-27.869-11.175,3.277-30.39,8.053-33.548S1566.17,568.758,1566.17,568.758Z" transform="translate(-1527.329 -566.06)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-2.21 -0.613)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,0,7.053,5.609l4.277,3.979L5.665,7.958,0,9.588,4.277,5.609Z" transform="translate(20.35 15.424)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(-5.166 -2)">
                                                                                      <path id="p1-13" data-name="p1" d="M36.2,26.027c1.332,0-1.041-19.138-1.041-19.138A108.036,108.036,0,0,0,34.135-5.655c-.82-5.254-1.047-8.873-1.047-8.873H22.341l-.589,8.449L21-.146s-5.739,24.163-3.847,24.9S34.868,26.027,36.2,26.027Z" transform="translate(0 -2)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-2.35 -4)">
                                                                                      <path id="p1-14" data-name="p1" d="M-1.552,37.735s-.781,5.049.59,7.589c1.522,2.822,2.521,5.518,11.792,7.753s22.223,1.975,25.47,1c1.8-.543,5.907-1.041,8.334-4.51S46.006,40.2,46.006,40.2a62.349,62.349,0,0,0-10.652,0c-3.535.213-6.523,3.6-13.4,2.6S10.783,37.3,7.852,36.2C5.4,35.27-1.552,37.735-1.552,37.735Z" transform="translate(2.898 -2.46)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(6.838 -73.25)">
                                                                                      <path id="p5" d="M806.154,381.864l.387,11.122s3.957,5.9,8.384,7.894,2.849,1.957,7.388,0,9.353-7.242,9.353-7.242l1.241-5.358Z" transform="translate(-803 -323.605)"></path>
                                                                                      <path id="p4" d="M808.547,365.231l-1.675,7.545,24.922,6.08-1.418-8.133Z" transform="translate(-803 -320.382)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.178,348.775l-1.349,7.542,20.794,5.259-1.135-8.15Z" transform="translate(-803 -316.936)"></path>
                                                                                      <path id="p2-7" data-name="p2" d="M811.941,332.484l-.962,7.445,16.534,4.168-1.323-7.839Z" transform="translate(-803 -313.483)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M824.55,324.23l-11.8-3.324s.374-14.042,6.112-13.322S824.55,324.23,824.55,324.23Z" transform="translate(-802.675 -308.035)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(5.282 -16)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(2.305 4.61)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(0 9.22)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(2.305 12.677)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(0 18.44)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(2.305 23.05)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(0 27.66)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(2.305 31.117)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(0 35.727)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(2.305 40.337)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(0 44.947)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(2.305 48.405)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-4.645 -4.46)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-45.417l29.355,19.57" transform="translate(8.629 -1.247)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(9.801 11.408)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,51.447a1,1,0,0,0,1.73,0L28.129,29.44a1,1,0,0,0-.865-1.5H19.5L15.221.993H12.275L8.416,27.938H1.736a1,1,0,0,0-.865,1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 21 </div>
                                                                          <!---->
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <!---->
                                                                      </section>
                                                                      <!---->
                                                                    </div>
                                                                    <div _ngcontent-gep-c159="" class="dental-chart__bottom">
                                                                      <button _ngcontent-gep-c159="" class="button teeth-toggle teeth-toggle-bottom">
                                                                        <img _ngcontent-gep-c159="" src="<?php echo base_url()?>/assets/teeth-arch2.svg" height="20px">
                                                                      </button>
                                                                      <!---->
                                                                      <section _ngcontent-gep-c159="" class="dental-chart__section">
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 48 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t8">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="56.368" height="187" viewBox="0 0 56.368 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom8" transform="translate(-574.386 -497.867)">
                                                                                  <g id="bounds" transform="translate(5)">
                                                                                    <line id="bound" x2="56" transform="translate(569.5 498.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="56" transform="translate(569.5 684.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(575.534 500.269)">
                                                                                    <path id="shape" d="M29.052,53.814C7.672,55.239-4.8,41.429,1.745,16.94,4.762,5.632,14.739-1.577,26.314.3c10.027,1.622,16.669,7.2,19.8,21.866C49.056,35.908,51.559,52.324,29.052,53.814Z" transform="translate(0.018 48) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412.943A22.222,22.222,0,0,1,10.592.3L13.51.943l2.53.87V17.966l-7.929,2.3L.04,17.966S-.18,1.145.412.943Z" transform="translate(0 32.04) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052,20.106A36.606,36.606,0,0,1,.322,18.877.588.588,0,0,1,0,18.542V2.24L8.034,0,16,2.24V19.848s.179-.065-.293,0C15.082,19.936,14.094,20.037,13.052,20.106Z" transform="translate(33.725 32) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,0s1.368,5.065,2.11,9.575a71.392,71.392,0,0,1,.857,8.464h-16L0,8.37,2.762.039Z" transform="translate(17.927 18.762) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793,18s.092.158,0-.233C-.311,13.154-.4,7.944,1.416.713,1.424.677,1.6,0,1.6,0H16.1l2.189,8.67L16.1,18Z" transform="translate(17.966 48.099) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,18,2.076,8.708,0,0,8.109,2.222,14.471.43,16,0,13.238,8.369,16,18,8.109,15.8Z" transform="translate(17.966 32) rotate(-90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,16.852s.217-.715.3-1.008A22.614,22.614,0,0,1,13.9.213c.062-.024.648-.213.648-.213V16.852Z" transform="translate(1.114 46.551) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,0S0,.077.2.155c5.6,2.2,9.848,6.736,12.638,15.381.009.027.248.671.248.671H0Z" transform="translate(1.759 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,.5C15.954,8.4,12.774,15.4.774,17.45c-.042.007-.774,0-.774,0V0H16S16,.243,16,.5Z" transform="translate(35.966 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,16.5s-.179-.055-.567-.18C7.638,14.1,2.326,8.736.141.484.171.6,0,0,0,0H15.316Z" transform="translate(35.966 47.316) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(574.653 556.367)">
                                                                                    <path id="p1" d="M3851.85,2624.418s-7.893-13.972-4.933-23.94,8.279-16.047,11.7-16.929,4.937-2.69,10.292.837,6.712,2.641,6.712,2.641a44.219,44.219,0,0,1,11.25-5.335c5.586-1.5,5.734-3.262,11.924,5.335s1.785,21.6,1.785,21.6-4.861,7.1-5.165,9.832-.65,7.01-.65,7.01a186.634,186.634,0,0,1-22.732,1.16,127.961,127.961,0,0,1-20.188-2.215Z" transform="translate(-3846.253 -2580.447)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(580.03 600.389)">
                                                                                    <path id="rb2" d="M3929.178,2854.96a6.929,6.929,0,0,0,.613,1.047c.737,1.122,2.053,4.844.806,17.49-1.95,19.822-19.988,36.985-26.713,38.244-.88.165-3.6.683-4.7,0a3.959,3.959,0,0,1-1.607-3.259c-.034-.785.39-1.59-.208-1.7-.327-.063-.226.351-.4.719-.511,1.1,2.088-51.873,8.758-51.572.508.023,1.3.054,2.089.08a185.384,185.384,0,0,0,21.357-1.044Z" transform="translate(-3886.144 -2854.107)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M3900.595,2890.781a77.093,77.093,0,0,1-4.457,16.4c-.511,1.1-.806,3.615-3.576,3.124-3.58-.628-3.146-4.3-2.93-15.312s-3.362-11.432-4.013-19.3-.048-21.905-.048-21.905q7.552,1.093,15.214,1.592c1.165.077,2.631.159,4.112.226a95.676,95.676,0,0,0-4.3,19.351C3899.936,2881.531,3901.709,2882.723,3900.595,2890.781Z" transform="translate(-3885.316 -2853.786)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M3905.077,2858.481c.615,1.429,1.691,11.2-3.983,21.118s-13.807,17.965-14.711,17.148,7.44-10.154,11.094-20.4,1.344-17.868,1.344-17.868.252-1.017,2.272-.61S3904.464,2857.057,3905.077,2858.481Z" transform="translate(-3864.521 -2848.076)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M3904.277,2858.388c.615,1.429-2.2,15.186-7.871,25.1s-5.31,15.4-6.213,14.587.606-12.626,4.26-22.875,2.522-16.161,3.569-16.81S3903.664,2856.964,3904.277,2858.388Z" transform="translate(-3873.486 -2847.3)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M3891.51,2857.15c.116.775-1.034,2.527-1.23,11.257-.116,5.145,1.717,9.46,1.23,14.628-.759,8.06-4.067,14.839-5.155,15.11-.879.218.057-7.343,0-14.207-.052-6.321-2.873-12.241-2.923-14.929-.1-5.43-1.063-12.925,0-13.2a7.741,7.741,0,0,1,4.155-.28A9.078,9.078,0,0,1,3891.51,2857.15Z" transform="translate(-3879.575 -2846.693)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(582.363 500.48)">
                                                                                    <g id="plaque" transform="translate(-5.744 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s8.5-4.156,16.312-1.691c3.381,1.067,6.678,7.231,15.155,7.654S58.644,9.2,58.644,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s8.5-4.156,16.312-1.691c3.381,1.067,6.678,7.231,15.155,7.654S58.644,9.2,58.644,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s8.5-4.156,16.312-1.691c3.381,1.067,6.678,7.231,15.155,7.654S58.644,9.2,58.644,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-5.088 57.385)">
                                                                                      <path id="p1-2" data-name="p1" d="M-.783,48.273a17.3,17.3,0,0,1,4.755-9.02c3.2-3.29,4.094-4.874,9.8-4.167s5.642,4.586,10.736,4.167,9.06-7.2,16.472-6.422c3.654.386,4.159,2.639,6.391,5.341A13.483,13.483,0,0,1,49.9,43.451s.233,4.891.276,5.818C50.173,49.269-.94,50-.783,48.273Z" transform="translate(1.745 -32.95)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(-2.978 98.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s7.674,3.18,15.744,6.18c2.342.873,3.382,4.04,6.317,4.04,2.461,0,5.085-3.684,7.832-4.512,8.636-2.6,16.328-5.707,16.328-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-5.898 1.189)">
                                                                                      <path id="p2" d="M691.83,1644.952a18.346,18.346,0,0,1,.539-7.7c.938-2.991,3.975-5.863,4.8-8.922a27.483,27.483,0,0,0-.588-17.92c-1.174-2.945-3.467-7.338-6.814-7.768-3.691-.481-13.375,4.271-14.609,5.981-1.608,2.225-5.936-1.161-6.716-.686-.7.423-1.922-3.562-8.285-3.334-3.315.119-7.28,3.35-9.915,7.844-2.142,3.649-3.439,8.148-4.4,10.295-1.126,2.515.041,8.534,1.765,13.53,1.4,4.069,3.329,7.166,3.432,8.677.214,3.148,0,11.716,0,11.716s-.177,10.17.784,13.432c1.169,3.968,2.8,7.163,3.236,11.128,1.04,9.492-.981,15.306,1.373,19.217,1.125,1.867,4.26-4.508,4.412-3.285.216,1.736,2.512,5.595,5.442,4.265a29.814,29.814,0,0,0,6.422-3.383c4.741-3.489,10.366-9.4,12.354-13.481,1.195-2.455,4.809-6.943,6.765-16.766a68.923,68.923,0,0,0,1.079-15.393A35.147,35.147,0,0,0,691.83,1644.952Z" transform="translate(-645.938 -1546.275)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M.007,29.729C-.039,29.116.014,17.57,4.88,9.92,8.583,4.1,15.98-.048,21.3,0,26.27.046,33.263.342,39.1,9.022c3.4,5.06,4.454,9.6,5.391,14.751.592,3.246,1.571,6.884,1.325,11.2-.349,6.142-1.129,8.545-3.137,10.818a11.9,11.9,0,0,1-5.932,3.976C28.141,52.635,18.008,53,10.37,47.888,2.1,42.355.142,31.563.007,29.729Z" transform="translate(0 45.852) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(-1.724 83.393)">
                                                                                      <path id="p3" d="M10.855,3.658S21.617,9.123,32.379,9.123,53.9,3.658,53.9,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658S21.617,9.123,32.379,9.123,53.9,3.658,53.9,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658S21.617,9.123,32.379,9.123,53.9,3.658,53.9,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(7.964 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.3-61.417a6.815,6.815,0,0,1,0-8,4.739,4.739,0,0,1,6.919,0,6.815,6.815,0,0,1,0,8A4.739,4.739,0,0,1,22.3-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(7.841 59.495) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M33.139-.088l-.5.327L25.7,16.795,15.008,7.033-.066,26.069" transform="translate(0 0)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(-6.26 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a77.739,77.739,0,0,0,10.745,3.3,67.769,67.769,0,0,0,15.231,1.889c13.453,0,27.835-5.186,27.835-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M60.311,13.4s-14.382,5.186-27.835,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(6.669 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M5.879,0,0,11.742H11.759Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(-6.26 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a77.739,77.739,0,0,0,10.745,3.3,67.769,67.769,0,0,0,15.231,1.889c13.453,0,27.835-5.186,27.835-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M60.311,13.4s-14.382,5.186-27.835,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(-6.718 -53.237)">
                                                                                      <path id="p1-11" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-4.798 56.045)">
                                                                                      <path id="p1-12" data-name="p1" d="M3851.327,2620.311l-.64-.125s-6.058-12.886-3.646-21.01c2.684-9.037,8-14.444,11.1-15.244s4.046-1.428,8.9,1.769,6.085,2.395,6.085,2.395a40.09,40.09,0,0,1,10.2-4.836c5.064-1.361,4.947-4.641,10.559,3.154s1.618,19.583,1.618,19.583-4.407,6.436-4.683,8.914-.589,6.355-.589,6.355a169.211,169.211,0,0,1-20.609,1.052,115.972,115.972,0,0,1-18.3-2.008Z" transform="translate(-3846.841 -2578.683)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-4.798 56.046)">
                                                                                      <path id="p2-5" data-name="p2" d="M4.9,9.588,6.1,3.979,9.8,0,4.9,1.63,0,0,3.7,3.979Z" transform="translate(20.489 16.537)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(0.511 75.068)">
                                                                                      <path id="p1-13" data-name="p1" d="M15.3,29.935A80.126,80.126,0,0,1,14.406,19.2c.167-5.858,4.44-11.667,5.582-18.855,1.807-11.373,2.588-16.358,2.588-16.358H43.954s-1.289,1.085.666,12.93c.9,5.46,8.206,13.658,8.2,20.126,0,6.9,0,9.02,0,9.02L35.286,23.307s-4.34-9.658-5.819-9.942S22.59,27.948,22.59,27.948Z" transform="translate(-14.397 15.695)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-6.406 56.846)">
                                                                                      <path id="p1-14" data-name="p1" d="M-2.2,47.059c-2.508.187-3.483.053-3.271-.451A32.183,32.183,0,0,1-2.516,41.2c1.178-1.663,2.284-4.174,6.047-5.883a15.559,15.559,0,0,1,5.853-1.485c1.312,0,2.872.973,4.014,1.485,2.774,1.24,6.111,3.681,7.195,3.3s2.79-1.331,6.608-3.3a44.235,44.235,0,0,1,10.154-3.3c1.584-.089,4.028,2.555,6.516,5.891a16.917,16.917,0,0,1,3.369,7.52,19.242,19.242,0,0,1,.335,4.128,28.425,28.425,0,0,0-12.853-3.693c-5.55-.2-8.174,1.92-14.149,2.039-4.839.1-12.409-2.19-16.014-2.039C-1.046,46.092.3,46.871-2.2,47.059Z" transform="translate(6.852 -33.004)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(7.083 36.171)">
                                                                                      <path id="p1-15" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(5.18 88.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.428-11.122s4.377-5.9,9.274-7.894,3.152-1.957,8.172,0,6.9,4.831,6.9,4.831l4.817,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.7,378.856l-1.832-7.545,27.25-6.08-1.55,8.133Z" transform="translate(-805.953 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.254,361.576l-1.425-7.542,21.966-5.259-1.2,8.15Z" transform="translate(-805.404 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.94,344.1l-.961-7.445,16.513-4.168-1.321,7.839Z" transform="translate(-804.802 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M827.854,307.556l-15.1,3.324s.478,14.042,7.824,13.322S827.854,307.556,827.854,307.556Z" transform="translate(-806.044 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(-3.969 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H48.761" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H48.761" transform="translate(-0.862 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H48.761" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H48.761" transform="translate(-0.862 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H48.761" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H48.761" transform="translate(-0.862 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H48.761" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H48.761" transform="translate(-0.862 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H48.761" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H48.761" transform="translate(-0.862 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H48.761" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H48.761" transform="translate(-0.862 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.829 126.983)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.2,53.359-45.417" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 47 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t7">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="61" height="187" viewBox="0 0 61 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom7" transform="translate(-656.5 -509.867)">
                                                                                  <g id="bounds" transform="translate(656.5 446.367)">
                                                                                    <line id="bound" x2="61" transform="translate(0 250)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="61" transform="translate(0 64)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(656.812 565.289)">
                                                                                    <path id="p1" d="M43.686.276C49.165,1.728,58.7,4.752,58.2,16.729s-6.35,30.631-6.35,30.631S37.928,49.5,26.121,49a90.593,90.593,0,0,1-21.49-3.62,5.181,5.181,0,0,0-.807-2.8c-3.86-4.783-7.6-17.678-5.211-28.6C.343,6.069,9.533,2.043,13.244,2.45c9.842,1.089,7.914,7.743,14.1,4.356S38.2-1.176,43.686.276Z" transform="translate(2.138 0)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(658.663 610.367)">
                                                                                    <path id="rb2" d="M51.02,8.8c1.345,11.56-1.756,23.171-8.89,33.3C30.2,58.972,22.15,73.986,20,63.463s6.984-24.764,5.91-29.7a39.743,39.743,0,0,0-1.553-4.91l1.553-18.66s5.976-.144,12.258-.493S51.02,8.8,51.02,8.8Z" transform="translate(1.282 -6.996)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M23.475,28.248c-.6-.6-2.061.665-5.3,5.96-5.905,9.644-3.116,31.124-3.116,31.124,0-.548-2.686,13.589-12.355-3.945s-1.544-38.4-1.544-38.4l1.8-16.532S9.378,8.66,21.164,9.41l4,.247S24.4,29.017,23.475,28.248Z" transform="translate(2.036 -6.453)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M3904.839,2852.992c.639,1.512,1.288,16.417-4.61,26.9s-9.086,20.121-10.026,19.262,4.2-17.188,8-28.029-.951-17.447.138-18.139S3904.2,2851.478,3904.839,2852.992Z" transform="translate(-3864.861 -2843.018)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M3893.115,2851.005c.272.645-.178,6.486-1.169,11.085s-6.351,13.128-6.7,22.418,1.123,15,0,14.449-3.8-19.138,0-29.975,1.551-16.164,2.29-17.977c.319-.783,1.307-.159,2.657-.236C3891.262,2850.69,3892.758,2850.145,3893.115,2851.005Z" transform="translate(-3872.249 -2841.108)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M3893.149,2851.005c.272.645-.178,6.486-1.169,11.085s-3.385,8.041-3.739,17.332,3.447,20.382,2.323,19.83-9.089-19.43-5.291-30.271,1.551-16.164,2.29-17.977c.319-.783,1.307-.159,2.657-.236C3891.3,2850.69,3892.792,2850.145,3893.149,2851.005Z" transform="translate(-3881.068 -2841.108)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(656.947 512.268)">
                                                                                    <path id="shape" d="M29.052,59.423C7.672,61-4.8,45.748,1.745,18.706,4.762,6.219,14.739-1.742,26.314.326c10.027,1.791,16.669,7.954,19.8,24.145C49.056,39.651,51.559,57.778,29.052,59.423Z" transform="translate(0.019 48) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412,1.041A20.214,20.214,0,0,1,10.592.334l2.918.707L16.04,2V19.838L8.111,22.375.04,19.838S-.18,1.264.412,1.041Z" transform="translate(0 32.04) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052,22.2A33.31,33.31,0,0,1,.322,20.844C.1,20.774,0,20.475,0,20.475v-18L8.034,0,16,2.474V21.917s.179-.072-.293,0C15.082,22.014,14.094,22.125,13.052,22.2Z" transform="translate(37.241 32) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,0s1.368,5.593,2.11,10.573a86.834,86.834,0,0,1,.857,9.346h-16L0,9.242,2.762.043Z" transform="translate(19.795 18.762) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793,19.876s.092.175,0-.257C-.311,14.525-.4,8.772,1.416.788,1.424.748,1.6,0,1.6,0H16.1l2.189,9.574L16.1,19.876Z" transform="translate(19.838 48.099) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,19.876,2.076,9.616,0,0,8.109,2.453,14.471.475,16,0,13.238,9.241,16,19.876,8.109,17.444Z" transform="translate(19.838 32) rotate(-90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,18.609s.217-.789.3-1.114C2.266,9.341,7.2,3.117,13.9.235c.062-.027.648-.235.648-.235V18.609Z" transform="translate(1.23 46.551) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,0S0,.085.2.171C5.8,2.6,10.05,7.609,12.84,17.155c.009.03.248.74.248.74H0Z" transform="translate(1.943 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,.551C15.954,9.274,12.774,17,.774,19.269c-.042.008-.774,0-.774,0V0H16S16,.268,16,.551Z" transform="translate(39.715 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,18.221s-.179-.061-.567-.2C7.638,15.565,2.326,9.647.141.534.171.666,0,0,0,0H15.316Z" transform="translate(39.715 47.316) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(663.582 512.48)">
                                                                                    <g id="plaque" transform="translate(-1.763 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s8.7-4.156,16.711-1.691c3.463,1.067,6.842,7.231,15.526,7.654S59.873,9.2,59.873,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s8.7-4.156,16.711-1.691c3.463,1.067,6.842,7.231,15.526,7.654S59.873,9.2,59.873,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s8.7-4.156,16.711-1.691c3.463,1.067,6.842,7.231,15.526,7.654S59.873,9.2,59.873,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-4.909 54.385)">
                                                                                      <path id="p1-2" data-name="p1" d="M-1.745,48.031A10.751,10.751,0,0,1,1.942,40c3.526-3.29,5.325-5.1,11.615-4.391s4.425,5.233,10.035,4.814S33.84,32.223,42,33.006a16.624,16.624,0,0,1,10.358,5.166,12.913,12.913,0,0,1,2.777,5.279s.257,4.891.3,5.818C55.443,49.269-1.917,49.756-1.745,48.031Z" transform="translate(1.745 -32.95)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(-1.483 98.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372S20.107-5.193,29-2.193c2.58.873,3.725,4.04,6.958,4.04,2.711,0,5.6-3.684,8.627-4.512,9.512-2.6,17.986-5.707,17.986-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-5.801 1.189)">
                                                                                      <path id="p2" d="M697.619,1645.273s2.536-10.58,4.44-16.952c1.076-3.6,4.181-12.113.824-19.756-2.994-6.817-7.414-8.684-13.446-9.432-.4-.05-1.533.656-2.283.574-3.69-.407-7.185,2.089-9.577,5.1-1.771,2.225-4.9,2.074-5.764,2.549-.769.423-5.494-5.836-12.5-5.608s-9.272,4.186-11.48,8.667c-2.384,4.837-1.949,15.947,1.054,22.968s3.883,5.5,4.119,8.647a73.8,73.8,0,0,1-2.358,19.6,63.8,63.8,0,0,0-2.245,11.7c-.437,4.909.494,10.907,1.155,15.722.678,4.946,4.593,10.745,7.246,14.069,2,2.513,2.634,3.063,4.994,0,.826-1.071.2-3.723-.173-7.6a86.331,86.331,0,0,1,1.9-22.251c.416-1.83,4.181-6.748,4.888-8.439.938-2.246,1.925-.995,3.406-1.915.94-.593,3.838,2.048,3.551,7.223-.284,5.129-3.614,11.847-5.2,18.362-1.283,5.286-1.732,10.972,0,12.56,1.152,1.056,9.228-8.583,14.174-17.811,1.316-2.455,9.016-10.842,11.247-20.334a83.623,83.623,0,0,0,2.03-9.232A36.329,36.329,0,0,0,697.619,1645.273Z" transform="translate(-645.901 -1546.275)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M.007,32.747c-.045-.676.008-13.394,4.873-21.82C8.583,4.511,15.98-.053,21.3,0,26.27.05,33.263.377,39.1,9.938c3.4,5.574,4.454,10.579,5.391,16.248.592,3.575,1.571,7.582,1.325,12.34-.349,6.766-1.129,9.412-3.137,11.916a11.979,11.979,0,0,1-5.932,4.38c-8.6,3.156-18.736,3.557-26.374-2.072C2.1,46.654.142,34.767.007,32.747Z" transform="translate(0 45.852) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(2.16 83.393)">
                                                                                      <path id="p3" d="M10.855,3.658S21.869,9.123,32.882,9.123,54.908,3.658,54.908,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658S21.869,9.123,32.882,9.123,54.908,3.658,54.908,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658S21.869,9.123,32.882,9.123,54.908,3.658,54.908,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(9.468 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.429-61.417a6.313,6.313,0,0,1,0-8,5.59,5.59,0,0,1,7.621,0,6.313,6.313,0,0,1,0,8A5.59,5.59,0,0,1,22.429-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(11.613 59.588) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M36.42-.009l-.548.325L28.315,16.838,16.492,7.017-.007,25.979" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(-6.2 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a92.019,92.019,0,0,0,11.836,3.3,81.838,81.838,0,0,0,16.777,1.889c14.818,0,30.66-5.186,30.66-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M65.773,13.4s-15.842,5.186-30.66,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(8.042 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.476,0,0,11.742H12.952Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(-6.2 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a92.019,92.019,0,0,0,11.836,3.3,81.838,81.838,0,0,0,16.777,1.889c14.818,0,30.66-5.186,30.66-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M65.773,13.4s-15.842,5.186-30.66,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(-3.938 -53.237)">
                                                                                      <path id="p1-11" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-4.589 56.045)">
                                                                                      <path id="p1-12" data-name="p1" d="M40.787-.554C45.817.708,53.724,4.13,53.258,14.54s-5.2,25.888-5.2,25.888A175.8,175.8,0,0,1,24.15,41.6c-6.709-.3-12.931-.365-19.32-2.157.007-.854-1-1.7-1.5-2.436C-.209,32.855-3.641,21.646-1.45,12.157.14,5.275,7.717,1.346,11.124,1.7c9.036.946,8.075,7.8,13.758,4.853S35.753-1.816,40.787-.554Z" transform="translate(2.138 0.742)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-4.589 56.046)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.4,9.588,6.719,3.979,10.794,0,5.4,1.63,0,0,4.075,3.979Z" transform="translate(22.569 16.537)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(1.258 75.068)">
                                                                                      <path id="p1-13" data-name="p1" d="M47.945,29.935a89.388,89.388,0,0,0,.8-10.736C48.594,13.341,47.28,7.85,46.259.662,44.644-10.711,43.946-15.7,43.946-15.7H24.833s-1.354.767-3.1,12.612c-.806,5.46-7.336,13.658-7.334,20.126,0,6.9,0,9.02,0,9.02l13.66.686s5.9-13.1,7.22-13.383,7.553,15.613,7.553,15.613Z" transform="translate(-14.397 15.695)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-6.361 52.846)">
                                                                                      <path id="p1-14" data-name="p1" d="M-3.589,48.432c-3.142.748-3.263.417-3.263.417A16.972,16.972,0,0,1-4.34,42.177a18.174,18.174,0,0,1,7.835-5.834,13.178,13.178,0,0,1,8.591,0c3.055,1.24,4.619,4.122,7.419,4.3s3.185-1.74,7.39-3.713,6.709-4.953,12.76-3.568,7.922,2.859,10.924,6.8A13.6,13.6,0,0,1,53,49.071,37.34,37.34,0,0,0,38.94,45.858c-6.114-.2-9,1.92-15.585,2.039-5.33.1-13.668-2.19-17.639-2.039C-.456,46.092-.447,47.684-3.589,48.432Z" transform="translate(6.852 -33.004)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(9.863 36.171)">
                                                                                      <path id="p1-15" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(6.401 88.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.472-11.122s4.821-5.9,10.215-7.894,3.472-1.957,9,0,7.6,4.831,7.6,4.831l5.306,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.89,378.856l-2.018-7.545,30.016-6.08-1.707,8.133Z" transform="translate(-805.859 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.4,361.576l-1.57-7.542,24.2-5.259-1.32,8.15Z" transform="translate(-805.057 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M812.038,344.1l-1.059-7.445,18.189-4.168-1.455,7.839Z" transform="translate(-804.175 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M829.387,307.556l-16.636,3.324s.527,14.042,8.619,13.322S829.387,307.556,829.387,307.556Z" transform="translate(-805.363 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(-4.884 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H53.42" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H53.42" transform="translate(-0.66 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H53.42" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H53.42" transform="translate(-0.66 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H53.42" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H53.42" transform="translate(-0.66 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H53.42" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H53.42" transform="translate(-0.66 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H53.42" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H53.42" transform="translate(-0.66 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H53.42" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H53.42" transform="translate(-0.66 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-4.836 126.983)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.2,58.116-45.417" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 46 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t6">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="65" height="187" viewBox="0 0 65 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom6" transform="translate(-709.5 -507.867)">
                                                                                  <g id="bounds">
                                                                                    <line id="bound" x2="65" transform="translate(709.5 694.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="65" transform="translate(709.5 508.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(710.473 563.367)">
                                                                                    <path id="p1" d="M3405.77,518.492s13.4-30.467,9.166-37.273-9.473-13.127-18.571-11.02-11.093,9.561-11.093,9.561-9.976-10.066-19.947-7.149c-9.622,2.815-14.6,16.8-12.347,23.056.029.08.86,6.694,3.033,10.755,2.831,5.286,10.914,8.252,10.914,11.48,0,2.672,8.617,2.957,17.744,2.512C3394.9,519.914,3405.77,518.492,3405.77,518.492Z" transform="translate(-3352.44 -469.787)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(710.298 610.552)">
                                                                                    <path id="rb2" d="M26.576-.288s2.314,32.482-4.2,42.768S3.962,67.748.341,64.111,2.437,56.349,4.2,45.16C5.063,39.643,7.809,33.1,7.932,29.632c.11-3.094-2.415-3.033-2.415-3.033A42.258,42.258,0,0,1,4.046,14.817c.087-2.539,1.732-5.036,2.561-7.436a6.753,6.753,0,0,0-.269-5.056s4.64-.442,5.138-.5C19.062,1,26.576-.288,26.576-.288" transform="translate(27.465 0.125) rotate(3)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M725.12,633.545a201.607,201.607,0,0,1-5.772,29.038c-3.218,11.279-9.047,22.64-9.05,28.687-.007,13.618,8.1,2.934,14.28-3.537s5.991-15.057,10.46-22.351c2.7-4.405,4.5-5.386,5.856-5.829a7.1,7.1,0,0,1,.952-.266l-.952-6.529a20.616,20.616,0,0,1,.435-6.564c.823-3.344,2.522-4.785,2.856-6.812.73-4.434-.371-4.361-.371-4.361s-8.628.34-13.314,0S725.12,633.545,725.12,633.545Z" transform="translate(-710.298 -632.334)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M3911.395,2852.511c.614,1.56-.674,18.04-6.342,28.862s-13.946,20.061-14.849,19.172,10.273-20.053,13.7-32.061-1.046-15.262,0-15.969S3910.782,2850.949,3911.395,2852.511Z" transform="translate(-3859.185 -2840.965)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M3908.125,2854.229c.614,1.56,1.175,16.772-4.493,27.593s-8.083,18.219-8.987,17.332,8.628-22.281,8.1-30.622-1.046-12.986,0-13.694S3907.5,2852.667,3908.125,2854.229Z" transform="translate(-3866.927 -2841.359)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M3898.637,2847.071c.261.666-.5,14.859-5.368,27.072s-13.009,22.345-14.088,21.776,7.689-18.005,11.339-29.189,2.041-17.789,2.749-19.658c.307-.808,1.256-.164,2.554-.243C3896.856,2846.746,3898.284,2846.183,3898.637,2847.071Z" transform="translate(-3875.279 -2835.16)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(710.5 510.268)">
                                                                                    <path id="shape" d="M29.052,61.864C7.672,63.5-4.8,47.627,1.745,19.474,4.762,6.474,14.739-1.813,26.314.34,36.341,2.2,42.983,8.62,46.114,25.477,49.056,41.28,51.559,60.152,29.052,61.864Z" transform="translate(0.02 48) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412,1.084A19.457,19.457,0,0,1,10.592.348l2.918.736,2.53,1V20.654L8.111,23.295.04,20.654S-.18,1.316.412,1.084Z" transform="translate(0 32.04) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052,23.114A32.067,32.067,0,0,1,.322,21.7C.1,21.628,0,21.316,0,21.316V2.576L8.034,0,16,2.576V22.817s.179-.075-.293,0C15.082,22.918,14.094,23.034,13.052,23.114Z" transform="translate(38.771 32) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,0s1.368,5.823,2.11,11.008a94.033,94.033,0,0,1,.857,9.73h-16L0,9.622,2.762.045Z" transform="translate(20.609 18.762) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793,20.693s.092.182,0-.268C-.311,15.122-.4,9.132,1.416.82,1.424.778,1.6,0,1.6,0H16.1l2.189,9.967L16.1,20.693Z" transform="translate(20.654 48.099) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,20.693,2.076,10.011,0,0,8.109,2.554,14.471.495,16,0,13.238,9.62,16,20.693,8.109,18.161Z" transform="translate(20.654 32) rotate(-90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,19.373s.217-.822.3-1.159C2.266,9.725,7.2,3.245,13.9.245c.062-.028.648-.245.648-.245V19.373Z" transform="translate(1.28 46.551) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,0S0,.089.2.178C5.8,2.708,10.05,7.922,12.84,17.86c.009.031.248.771.248.771H0Z" transform="translate(2.023 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,.573C15.954,9.655,12.774,17.7.774,20.061c-.042.008-.774,0-.774,0V0H16S16,.279,16,.573Z" transform="translate(41.346 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,18.97s-.179-.063-.567-.207C7.638,16.2,2.326,10.043.141.556.171.694,0,0,0,0H15.316Z" transform="translate(41.346 47.316) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(710.751 511.669)">
                                                                                    <g id="plaque" transform="translate(8.113 85.214)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s8.154-4.156,15.655-1.691c3.244,1.067,6.409,7.231,14.545,7.654s18-5.962,18-5.962" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s8.154-4.156,15.655-1.691c3.244,1.067,6.409,7.231,14.545,7.654s18-5.962,18-5.962" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s8.154-4.156,15.655-1.691c3.244,1.067,6.409,7.231,14.545,7.654s18-5.962,18-5.962" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(1.956 52.589)">
                                                                                      <path id="p1-2" data-name="p1" d="M-2.169,48.089c.178-1.731,1-4.7,4.637-8.006s4.994-5.712,11.48-5,14.464,7.841,14.464,7.841,4.236-7.141,8.679-9.521,9.092,0,9.092,0c4.552-.907,10.72,10.948,10.72,10.948a2.683,2.683,0,0,0,0,2,15.852,15.852,0,0,1,.334,2.979S-2.347,49.821-2.169,48.089Z" transform="translate(2.169 -32.343)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(11.201 97.453)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s7.541,3.18,15.471,6.18c2.3.873,3.323,4.04,6.207,4.04,2.419,0,5-3.684,7.7-4.512,8.486-2.6,16.045-5.707,16.045-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.064 0)">
                                                                                      <path id="p2" d="M695.3,1647.8a175.752,175.752,0,0,0,6.6-16.4c1.118-3.6,7.072-13.9,3.587-21.541s-7.378-9.755-14.592-10.522c-3.831-.407-7.462,2.127-9.946,5.137-1.839,2.225-2.287,4.91-3.179,5.385-.8.423-9.436-8.513-16.712-8.285s-10.833,5.875-13.125,10.356c-2.475,4.837-2.058,14.436,1.06,21.458s10.842,8.368,11.087,11.516a70.367,70.367,0,0,1-2.446,19.469c-1.432,4.995-2.376,10.663-4.321,16.321-2.681,7.8-5.923,15.419-7.092,21.872a18.013,18.013,0,0,0,0,6.545c.638,3.138,8.28-3.765,13.859-13.421,3.59-6.214,5.89-14.809,9.293-20.878s7.174-3.231,7.174-3.231,4.922-2.649,2.2,6.793c-1.936,6.719-8.172,21.819-9.375,27.008-1.025,4.42,2.038,2.734,2.038,2.734s14.967-10.113,20.3-23.943S695.3,1647.8,695.3,1647.8Z" transform="translate(-645.898 -1546.275)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M.007,33.711c-.045-.7.008-13.788,4.873-22.462C8.583,4.644,15.98-.055,21.3,0c4.969.051,11.961.388,17.8,10.23,3.4,5.738,4.454,10.89,5.391,16.726.592,3.68,1.571,7.805,1.325,12.7-.349,6.965-1.129,9.69-3.137,12.266a12.03,12.03,0,0,1-5.932,4.509C28.141,59.684,18.008,60.1,10.37,54.3,2.1,48.027.142,35.79.007,33.711Z" transform="translate(0 45.852) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.218 82.204)">
                                                                                      <path id="p3" d="M10.855,3.658s9.382,5.465,18.764,5.465S48.383,3.658,48.383,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s9.382,5.465,18.764,5.465S48.383,3.658,48.383,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658s9.382,5.465,18.764,5.465S48.383,3.658,48.383,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(21.049 168.669)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.484-61.417a6.134,6.134,0,0,1,0-8,5.967,5.967,0,0,1,7.912,0,6.134,6.134,0,0,1,0,8A5.967,5.967,0,0,1,22.484-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(19.2 58.472) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M37.754-.012l-.569.324-7.812,16.51L17.081,6.975-.008,25.906" transform="translate(0)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(0.108 104.483)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a98.482,98.482,0,0,0,12.3,3.3,88.2,88.2,0,0,0,17.432,1.889c15.4,0,31.856-5.186,31.856-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M68.085,13.4s-16.459,5.186-31.856,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(19.569 166.927)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.724,0,0,11.742H13.447Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(0.108 66.669)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a98.482,98.482,0,0,0,12.3,3.3,88.2,88.2,0,0,0,17.432,1.889c15.4,0,31.856-5.186,31.856-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M68.085,13.4s-16.459,5.186-31.856,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(3.894 -54.426)">
                                                                                      <path id="p1-11" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.441 56.864)">
                                                                                      <path id="p1-12" data-name="p1" d="M3399.66,510.377s11.868-25.391,8.115-31.063-8.387-10.94-16.444-9.184-9.822,7.968-9.822,7.968-8.833-8.389-17.662-5.958c-8.52,2.346-12.929,14-10.933,19.215.025.067.761,5.579,2.686,8.963,2.507,4.405,9.664,6.877,9.664,9.568,0,2.227,7.63,2.464,15.712,2.094C3390.033,511.563,3399.66,510.377,3399.66,510.377Z" transform="translate(-3352.44 -469.787)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.441 56.864)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.6,9.588,6.976,3.979,11.206,0,5.6,1.63,0,0,4.23,3.979Z" transform="translate(22.313 14.53)"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(17.695 34.982)">
                                                                                      <path id="p1-13" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(16.768 73.905)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.549,29.935s-.1-2.26,0-6.269a228.268,228.268,0,0,1,1.694-23c1.623-11.373,4.693-16.331,4.693-16.331h19.2S44.408-11.182,46.164.662a164.118,164.118,0,0,1,1.986,21,38.671,38.671,0,0,1-1.268,10.823L30.776,25.808s-1.212-10.687-2.54-10.971-9.547,14.141-9.547,14.141Z" transform="translate(-13.503 15.669)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(0.845 51.572)">
                                                                                      <path id="p1-15" data-name="p1" d="M-5.008,49.4l-1.493-.38a21.575,21.575,0,0,1,3-6.138c1.141-1.582,3.077-4.827,7.38-6.536s7.152-.969,9.832-.3c5.8,1.45,11.477,7.01,11.477,7.01a13.745,13.745,0,0,1,3.324-5.8c2.583-2.422,7.5-4.407,9.094-4.333,12.142.559,14.026,8.378,15.7,9.547S55.416,49.4,55.416,49.4a37.591,37.591,0,0,0-14.738-3.539c-6.347-.2-9.347,1.92-16.18,2.039-5.534.1-14.19-2.19-18.313-2.039A23.12,23.12,0,0,0-5.008,49.4Z" transform="translate(6.502 -32.919)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(15.799 87.285)">
                                                                                      <path id="p5" d="M806.154,402.363l.49-11.122s5.005-5.9,10.605-7.894,3.6-1.957,9.346,0,7.894,4.831,7.894,4.831l5.508,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.967,378.856l-2.095-7.545,31.162-6.08-1.772,8.133Z" transform="translate(-805.821 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.459,361.576l-1.63-7.542,25.12-5.259-1.37,8.15Z" transform="translate(-804.913 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M812.078,344.1l-1.1-7.445,18.884-4.168-1.511,7.839Z" transform="translate(-803.915 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M830.023,307.556l-17.272,3.324s.547,14.042,8.948,13.322S830.023,307.556,830.023,307.556Z" transform="translate(-805.081 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(4.083 123.265)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877h52.5" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877h52.5" transform="translate(-0.576 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877h52.5" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877h52.5" transform="translate(-0.576 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877h52.5" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877h52.5" transform="translate(-0.576 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877h52.5" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877h52.5" transform="translate(-0.576 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877h52.5" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877h52.5" transform="translate(-0.576 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877h52.5" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877h52.5" transform="translate(-0.576 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(1 125.794)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.2,60.087-45.417" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 45 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t5">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="44.254" height="187" viewBox="0 0 44.254 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom5" transform="translate(-812.5 -507.867)">
                                                                                  <g id="bounds" transform="translate(13 10)">
                                                                                    <line id="bound" x2="44" transform="translate(799.5 684.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="44" transform="translate(799.5 498.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(0 -25.642)">
                                                                                    <path id="p1" d="M1374.52,176.445s1-13.81,4.795-22.05,0-17.007,0-17.007-15.021-14.151-19-11.087-19.884,2.505-21.272,18.348,7.033,31.691,7.033,31.691a46.381,46.381,0,0,0,13.092,1.961,81.768,81.768,0,0,0,15.352-1.856Z" transform="translate(-525.815 460.772)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(0 -26)">
                                                                                    <path id="rb1" d="M28.454-.1S18.6,62.529,12.727,64.507s-4.737-.049-5.862-5.556c-.532-2.6.3-15.885-1.746-28.673C2.84,16.017,0,1.248,0,1.248a68.987,68.987,0,0,0,13.6.818A95.062,95.062,0,0,0,28.454-.1Z" transform="translate(820.336 635.802) rotate(3)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M3895.63,2847.3c.282.649,2.21,14.4-3.033,26.312s-4.089,25.16-5.252,24.605-1.646-20.927,2.289-31.836-.554-17.257.21-19.081c.331-.788,1.354-.16,2.753-.237C3893.7,2846.982,3895.25,2846.433,3895.63,2847.3Z" transform="translate(-3058.946 -2202.589)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(813.353 510.37)">
                                                                                    <path id="shape" d="M-52.017-46.226c3.286-2.459,6.792-3.838,8.568-7.043a21.184,21.184,0,0,0,2.173-11.113A34.68,34.68,0,0,0-43.741-75.82a20.573,20.573,0,0,0-6.81-9.581c-3.154-2.128-7.315-2.68-11.5-2.707-4.161-.028-8.375.442-11.847,2.377a20.375,20.375,0,0,0-8.11,9.092A22.321,22.321,0,0,0-84.291-64.7,25.759,25.759,0,0,0-80.1-53.735c2.1,3.283,3.1,3.2,6.2,5.792,3.075,2.6,8.216,7.911,11.823,7.829S-55.329-43.768-52.017-46.226Z" transform="translate(84.366 88.11)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M-54.677-56.112l-2.832-7.5,2.832-8.5-7.845,2.2-7.845-2.2,2.359,8.5-2.359,7.5,7.845-3.1Z" transform="translate(84.095 88.112)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M-78.434-78.911A40.3,40.3,0,0,0-82.011-73.5a22.321,22.321,0,0,0-2.28,11.936A25.759,25.759,0,0,0-80.1-50.6a13.25,13.25,0,0,0,4.45,4.424l5.014-6.8,2.373-7.565-2.373-8.435Z" transform="translate(84.366 84.973)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M-48.166-47.548c1.9-1.212,4-2.561,5.241-4.806a21.184,21.184,0,0,0,2.173-11.113,34.68,34.68,0,0,0-2.465-11.438,24.179,24.179,0,0,0-2.417-4.854l-8.79,8.615-2.848,8.412,2.848,7.542Z" transform="translate(83.842 87.195)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M-51.845-75.132c1.071-.8,2.028-1.4,3.333-2.233l-6.264-7.68-7.845-3.065-7.845,3.065-5.027,6.8c.333.24.942.707,1.76,1.392,3.075,2.6,8.216,7.911,11.823,7.829S-55.157-72.673-51.845-75.132Z" transform="translate(84.195 117.015)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M-45.99-50.874A19.912,19.912,0,0,0-50.435-55.6c-3.154-2.128-7.315-2.68-11.5-2.707-4.161-.028-8.375.442-11.847,2.377a18.261,18.261,0,0,0-4.033,3.157c0-.005-.55.465-.55.465l7.845,10.041,7.845,2.158,7.845-2.158Z" transform="translate(84.25 58.311)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(809.418 510.367)">
                                                                                    <g id="sealant" transform="translate(1.36 -50.484)">
                                                                                      <path id="p1-2" data-name="p1" d="M32.659,60.024s-19.653,3.9-18.612,8.571,22.775,6,22.775,10.122-22.775,6.367-22.775,6.367" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="plaque" transform="translate(8.085 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-2.859 48.942)">
                                                                                      <path id="p1-3" data-name="p1" d="M-2.169,48.089A15.329,15.329,0,0,1,.877,40.083c2.388-3.3,4.013-3.489,6.507-5.2l9.113-3,2.8-1.466c2.99-.907,14.111,9.727,16.516,10.9,1.246.6,1.581,5.78,1.647,7.678C37.464,49-2.286,49.821-2.169,48.089Z" transform="translate(10.056 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(8.85 98.642)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654-8.372s5.34,3.18,10.956,6.18c1.63.873,2.353,4.04,4.4,4.04,1.713,0,3.538-3.684,5.45-4.512A122.112,122.112,0,0,0,43.818-8.372" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2" d="M689.619,1645.76c1.486-14.653,1.114-11.426,3.123-17.8,1.136-3.6,3.25-7.165,3.441-10.115.21-3.23,1.084-7.349-2.868-11.28-4.777-4.755-11.9-9.131-14.61-9.432-.891-.1-1.173.071-3.107,1.083a27.9,27.9,0,0,1-5.226,1.976c-3.287.927-8.048,2.329-10.706,7.01-4.461,7.855-3.271,16.643-1.912,22.433,1.164,4.958,3.765,8.972,6.245,17.207.685,2.275,3.779,25.487,3.935,34.925.2,12.088-.752,23.2.1,25.683.677,1.978,2.4,1.516,4.308,0,1.435-1.13,2.173-4.335,2.173-4.335l6.245-20.075S689.385,1648.067,689.619,1645.76Z" transform="translate(-652.982 -1545.086)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M18.514,39.69c-5.155.277-7.714-3.848-11.35-8.738C4.537,27.425.541,24.35.288,20.421c-.162-2.5,1.591-5.371,5.634-9.6C8.264,8.376,8.687,5.8,12.384,3.336,15.887,1,22.734-1.1,26.882-.8c3.606.262,10.51,2.507,14.664,7.177,3.1,3.48,4.225,13.224,4.225,13.224s.014,12.4-9.527,17.046C29.293,40.032,20.67,39.575,18.514,39.69Z" transform="translate(4.9 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(13.355 83.393)">
                                                                                      <path id="p3" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(14.582 169.858)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(12.989 61.271) rotate(-3)">
                                                                                      <path id="p1-8" data-name="p1" d="M684.97,1679.565l-.306.389-4.2,19.862-6.625-11.858-9.2,22.77" transform="translate(-664.635 -1686.434)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(4.256 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a51.154,51.154,0,0,0,8.335,3.3,41.5,41.5,0,0,0,11.815,1.889c10.436,0,21.592-5.186,21.592-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M48.243,13.4s-11.156,5.186-21.592,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(13.082 168.116)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(4.256 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a51.154,51.154,0,0,0,8.335,3.3,41.5,41.5,0,0,0,11.815,1.889c10.436,0,21.592-5.186,21.592-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M48.243,13.4s-11.156,5.186-21.592,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-12" data-name="p1" d="M1369.285,169.13s-.089.328,1.181-4.229,1.006-7.715,3.9-14c3.329-7.231,0-14.925,0-14.925s-13.182-12.419-16.674-9.729-17.45,2.2-18.668,16.1,6.172,27.811,6.172,27.811a40.7,40.7,0,0,0,11.489,1.721c4.533-.116,8.172-1.784,12.6-2.751Z" transform="translate(-1336.084 -126.016)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(16.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(14.691 76.954)">
                                                                                      <path id="p1-13" data-name="p1" d="M35.339-22.686c.955,0-.746,19.138-.746,19.138L30.067,16.081l-.588,9.907H24.11l-1.581-8.219V11.194S20.3-20.6,21.655-21.333,34.384-22.686,35.339-22.686Z" transform="translate(-16.034 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(12.027 36.285)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 51.644)">
                                                                                      <path id="p1-15" data-name="p1" d="M-5.463,49.4H-6.42s.369-6.841,5.537-11.341c3.538-3.081,9.925-4.585,14.631-6.222,1.06-.375.225-1.111,2.149-.98C24.123,31.413,32.9,41.3,34.036,42.469S35.469,49.4,35.469,49.4,22.094,44.28,11.738,44.546A34.963,34.963,0,0,0-5.463,49.4Z" transform="translate(-2.73 -31.802)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 88.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0a12.493,12.493,0,0,1,5.392,4.831l3.763,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(9.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 44 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t4">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="50" height="187" viewBox="0 0 50 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom4" transform="translate(-891.5 -482.867)">
                                                                                  <g id="bounds" transform="translate(891.5 419.367)">
                                                                                    <line id="bound" x2="50" transform="translate(0 250)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="50" transform="translate(0 64)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(894.955 543.367)">
                                                                                    <path id="p1" d="M3753.5,530.79s14.358-20.353,4.218-27.9-15.487-17.867-20.1-16.279-21.2,11.713-19.731,21.042,9.5,24,9.5,24,7.639,3.283,13.632,2.737A43.972,43.972,0,0,0,3753.5,530.79Z" transform="translate(-3717.792 -490.451)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(894.579 580.367)">
                                                                                    <path id="rb1" d="M25.821-.628S25.037,69.581,10.1,68.945c-5.5-.234-2.886-8.924-3.943-18.437C4.763,37.988.714,22.982.116,13.564.053,12.569-.1,3.224-.1,3.224a34.089,34.089,0,0,0,12.542.633C18.908,2.944,25.821-.628,25.821-.628Z" transform="translate(10.452 -0.008) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M8.621,10.967C8.338,23.4,5.955,40.654,4.318,47.214S2.4,44.3,2.075,37.2c-.425-9.337-.143-16.405-.982-25.31S-.709,3.272.441,1.375,3.311.5,5.008.165C7.6-.463,8.9-1.469,8.621,10.967Z" transform="translate(18.49 11.675) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(893.5 485.369)">
                                                                                    <path id="shape" d="M-50.252-46.226c3.466-2.459,7.163-3.838,9.035-7.043a20.252,20.252,0,0,0,2.291-11.113,33.157,33.157,0,0,0-2.6-11.438A20.645,20.645,0,0,0-48.707-85.4c-3.326-2.128-7.714-2.68-12.13-2.707-4.388-.028-8.832.442-12.494,2.377a20.8,20.8,0,0,0-8.552,9.092,21.335,21.335,0,0,0-2.4,11.936,24.977,24.977,0,0,0,4.416,10.969c2.212,3.283,3.27,3.2,6.535,5.792,3.243,2.6,8.664,7.911,12.468,7.829S-53.745-43.768-50.252-46.226Z" transform="translate(84.366 88.11)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M-53.821-56.112l-2.986-7.5,2.986-8.5-8.273,2.2-8.273-2.2,2.488,8.5-2.488,7.5,8.273-3.1Z" transform="translate(84.844 88.112)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M-78.111-78.911A40.229,40.229,0,0,0-81.883-73.5a21.335,21.335,0,0,0-2.4,11.936A24.977,24.977,0,0,0-79.871-50.6a13.651,13.651,0,0,0,4.693,4.424l5.288-6.8,2.5-7.565-2.5-8.435Z" transform="translate(84.366 84.973)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M-47.669-47.548c2.008-1.212,4.215-2.561,5.527-4.806A20.252,20.252,0,0,0-39.85-63.467a33.157,33.157,0,0,0-2.6-11.438A23.7,23.7,0,0,0-45-79.759l-9.269,8.615-3,8.412,3,7.542Z" transform="translate(85.291 87.195)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M-50.555-75.132c1.13-.8,2.138-1.4,3.514-2.233l-6.606-7.68-8.273-3.065-8.273,3.065-5.3,6.8c.351.24.993.707,1.856,1.392,3.243,2.6,8.664,7.911,12.468,7.829S-54.048-72.673-50.555-75.132Z" transform="translate(84.669 117.015)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M-44.224-50.874A20.389,20.389,0,0,0-48.912-55.6c-3.326-2.128-7.714-2.68-12.13-2.707-4.388-.028-8.832.442-12.494,2.377a19.161,19.161,0,0,0-4.253,3.157c0-.005-.58.465-.58.465l8.273,10.041,8.273,2.158,8.273-2.158Z" transform="translate(84.571 58.311)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(890.418 485.367)">
                                                                                    <g id="plaque" transform="translate(12.085 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-2.859 52.686)">
                                                                                      <path id="p1-2" data-name="p1" d="M2.888,45.63c-.888-.3-3.709,1.42-3.592,0s1.389-3.261,3.592-5.159A28.625,28.625,0,0,1,11.11,33.9c1.11-.6,1.274-.889,3.771-2.293a19.964,19.964,0,0,1,3.337-1.335c2.99-.744,9.116,8.725,11.52,9.685,1.246.494,3.958,3.648,6.079,6.836.45.659,2.14-1.13,2.206.427C38.023,47.223,9.716,47.964,2.888,45.63Z" transform="translate(10.056 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(10.85 95.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s5.34,3.18,10.956,6.18c1.63.873,2.353,4.04,4.4,4.04,1.713,0,3.538-3.684,5.45-4.512A122.112,122.112,0,0,0,43.818-8.372" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2" d="M685.748,1669.187a232.222,232.222,0,0,1,5.468-29.577s4.7-8.371,6.711-14.581c1.136-3.51-.192-4.581,0-7.456.21-3.147-3.918-4.7-7.871-8.533-4.777-4.634-10.05-11.222-12.759-11.516-.891-.1-3.38.891-5.314,1.878-2.008,1.02-12.913,9.436-14.486,15.023-.692,2.44,1.706,7.12,3.065,12.763,1.164,4.832,4.1,6.667,6.578,14.692.685,2.217-1.323,3.537-1.524,11.732-.178,7.27,2.164,16.816,2.32,26.014.2,11.78-2.342,22.434-1.491,24.854.677,1.928,2.4,1.478,4.308,0a21.306,21.306,0,0,0,3.065-3.231s2.194-2.773,4.888-9.61C681.785,1683.823,685.514,1671.435,685.748,1669.187Z" transform="translate(-652.982 -1542.261)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M18.514,42.2c-5.155.294-7.714-4.087-11.35-9.279C4.537,29.175.541,25.91.288,21.737c-.162-2.659,1.591-5.7,5.634-10.19,2.342-2.6,2.765-5.34,6.462-7.953,3.5-2.48,10.35-4.711,14.5-4.391A23.751,23.751,0,0,1,41.546,6.825c3.1,3.7,4.225,14.043,4.225,14.043s.014,13.169-9.527,18.1C29.293,42.563,20.67,42.078,18.514,42.2Z" transform="translate(3.821 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.355 81.393)">
                                                                                      <path id="p3" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(14.582 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(12.989 61.271) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M684.97,1679.565l-.306.3-4.2,15.484-6.625-9.244-9.2,17.751" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(4.313 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a54.62,54.62,0,0,0,8.689,3.3A44.937,44.937,0,0,0,27.5,34.583c10.878,0,22.507-5.186,22.507-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M50.012,13.4S38.382,18.583,27.5,18.583,6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(13.082 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(4.313 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a54.62,54.62,0,0,0,8.689,3.3A44.937,44.937,0,0,0,27.5,34.583c10.878,0,22.507-5.186,22.507-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M50.012,13.4S38.382,18.583,27.5,18.583,6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(0.36 -50.484)">
                                                                                      <path id="p1-11" data-name="p1" d="M32.659,60.024s-19.653,3.9-18.612,8.571,22.775,6,22.775,10.122-22.775,6.367-22.775,6.367" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-12" data-name="p1" d="M3748.954,524.851s12.531-17.627,3.681-24.16-13.516-15.474-17.54-14.1-18.507,10.144-17.221,18.224,8.293,20.782,8.293,20.782,6.667,2.844,11.9,2.371A38.6,38.6,0,0,0,3748.954,524.851Z" transform="translate(-3714.179 -483.66)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(16.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(12.828 76.954)">
                                                                                      <path id="p1-13" data-name="p1" d="M42.64-22.686c1.449,0-1.132,19.138-1.132,19.138L34.642,16.081l-.891,9.907-8.5-.358-2.038-7.861V11.194S19.824-20.6,21.882-21.333,41.191-22.686,42.64-22.686Z" transform="translate(-16.034 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 51.644)">
                                                                                      <path id="p1-14" data-name="p1" d="M-6.012,48.1l-.565-.935a33.046,33.046,0,0,1,7-8.041,55.8,55.8,0,0,1,12.67-7.881c2.19-.765,9.8,7.881,9.8,7.881l8.689,8.041S7.214,44.8,5.033,45.627C3.2,46.321-6.012,48.1-6.012,48.1Z" transform="translate(-0.922 -28.988)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 88.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0a12.493,12.493,0,0,1,5.392,4.831l3.763,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(9.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(14.027 36.285)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 43 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t3">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="46" height="187" viewBox="0 0 46 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom3" transform="translate(-955.5 -466.867)">
                                                                                  <g id="bounds" transform="translate(36)">
                                                                                    <line id="bound" x2="46" transform="translate(919.5 467.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="46" transform="translate(919.5 653.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(959.625 523.367)">
                                                                                    <path id="p1" d="M28.877,46.474s5.253-22.382,8.034-26.752S36.294,2.564,26.946.945s-10.352-1.052-12.669.89S-1.018,8.472.064,16.969s9.193,29.5,9.193,29.5A25.737,25.737,0,0,0,17.955,48,53.4,53.4,0,0,0,28.877,46.474Z" transform="translate(0 0)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(968.892 569.367)">
                                                                                    <path id="rb1" d="M19.749,6.469,17.1,47.451s-3.9,27.1-10.008,24.89-2.384-7.293-4.457-25.79S.081,6.583.081,6.583A36.22,36.22,0,0,0,8.959,7.82a50.526,50.526,0,0,0,10.79-1.351Z" transform="translate(-0.081 -6.469)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M8.145,12.412c.022,6.227,1.672,17.149,1.885,23.926.251,7.991-1.1,17.226-2.256,16.464s-.626-9.827-2.4-19.5S2.207,23.31,1.208,13.264-.672,3.515.345,1.408,2.975.493,4.535.162C6.915-.481,8.095-1.58,8.145,12.412Z" transform="translate(6.89 6.135) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(958.49 469.282)">
                                                                                    <path id="shape" d="M949.875,1707.918c-9.477,0-23.606,30.316-18.839,40.421s33.2,10.105,37.908,0S959.351,1707.918,949.875,1707.918Z" transform="translate(-930.076 -1707.918)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1732.236c-3.645,0-7.977,4.484-11.928,11.038-.1.166-.6,1.022-.6,1.022l12.523,11.623,12.214-12.277s-.119-.2-.337-.574C958.239,1737.1,953.67,1732.236,949.874,1732.236Z" transform="translate(-930.076 -1732.236)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1709.588s-.225.4-.475.849c-5.045,9.1-8.6,21.678-5.842,27.515,1.156,2.45,3.7,4.306,7.474,5.753l.434.156,10.89-22.579Z" transform="translate(-930.076 -1697.531)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1744.524s.378-.106.861-.254c3.579-1.076,6.87-3.14,8.218-6.032,2.722-5.841-.907-18.434-6.429-28.277-.091-.162-.428-.75-.428-.75l-12.2,12.339Z" transform="translate(-930.076 -1697.816)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1710.527s.395.155.711.262c5.432,1.876,13.191,2.02,19.748.293l.51-.158-1.268-2.8-18.379-.29Z" transform="translate(-930.076 -1664.207)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1711.958l-9.543,19.754,18.42.29Z" transform="translate(-930.076 -1688.041)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(954.418 469.367)">
                                                                                    <g id="plaque" transform="translate(12.085 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-2.859 52.686)">
                                                                                      <path id="p1-2" data-name="p1" d="M2.545,45.508c-.8-.3-3.273.417-3.168-.992A6.008,6.008,0,0,1,1.6,39.882c.4-.383,1.12-2.011,5.932-4.853,1-.593,3.581-2.039,5.834-3.431.708-.44,1.348-1.205,1.961-1.373,2.7-.738,7.077.788,7.991.637,2.3-.382,4.4,1.645,6.569,2.6,1.478.644,4.115,7.162,4.363,8.481v5.147S8.706,47.823,2.545,45.508Z" transform="translate(10.056 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(10.85 95.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s4.264,3.18,8.748,6.18c1.3.873,1.879,4.04,3.51,4.04,1.368,0,2.825-3.684,4.352-4.512a92,92,0,0,0,9.073-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2" d="M682.628,1669.44c1.486-14.28,1.782-27.56,1.782-27.56s1.947-6.051,4.079-14.692c1.808-7.328,4.162-7.877,4.652-15.231s-5.193-11.951-6.118-12.555c-2.485-1.627-6.926-1.59-11.662-2.1-.891-.1-1.444,1.116-3.378,2.1-2.008,1.02-11.937,5.374-13.511,10.961-.692,2.44.234,5.765,1.593,11.407,1.164,4.832,4.594,12.084,7.074,20.109,2.2,7.1,1.925,56.418,4.079,62.547,1.355,3.855,5.164,2.911,6.819-4.015C680.178,1691.459,682.205,1673.505,682.628,1669.44Z" transform="translate(-652.982 -1542.261)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M12.377,37.5C3.038,38.031.649,30.182.083,20.868S1.742,1.845,9.661.148s39.705,11.565,35.674,20.3c-1.491,3.236-5.727,6.862-12.557,10.521C26.4,34.392,17.32,37.217,12.377,37.5Z" transform="translate(3.821 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.355 81.393)">
                                                                                      <path id="p3" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(17.582 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(13.955 56.618) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M685.073,1679.565l-4.532,16.213-6.659-9.493-9.247,18.229" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(5.686 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a44.276,44.276,0,0,0,7.584,3.3,34.668,34.668,0,0,0,10.75,1.889c9.495,0,19.645-5.186,19.645-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M44.478,13.4s-10.15,5.186-19.645,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(16.082 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(5.686 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a44.276,44.276,0,0,0,7.584,3.3,34.668,34.668,0,0,0,10.75,1.889c9.495,0,19.645-5.186,19.645-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M44.478,13.4s-10.15,5.186-19.645,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-11" data-name="p1" d="M24.713,39.772s4.5-19.154,6.875-22.894S31.06,2.194,23.06.809s-8.859-.9-10.842.762S-.871,7.25.055,14.522s7.867,25.25,7.867,25.25a22.025,22.025,0,0,0,7.444,1.306A45.7,45.7,0,0,0,24.713,39.772Z" transform="translate(4.485 3.442)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(16.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(12.828 76.954)">
                                                                                      <path id="p1-12" data-name="p1" d="M40.332-22.686c1.293,0-1.01,19.138-1.01,19.138L33.2,16.081l-.8,9.907-7.588-.358-1.819-7.861V11.194S19.974-20.6,21.81-21.333,39.039-22.686,40.332-22.686Z" transform="translate(-16.768 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 51.644)">
                                                                                      <path id="p1-13" data-name="p1" d="M-6.227,53.67l-.484-1.246a12.6,12.6,0,0,1-.65-6.345c.579-3.437.795-2.829,3.435-5.786,1.655-1.854,6.736-4.846,10.6-6.939,1.877-1.021,2.515-2.1,4.148-1.961,6.8.586,8.315-.179,13.047,2.866s6.041,9.518,6.041,9.518-4.415,3.042-9.119,2.6c-2.255-.213-4.162-3.6-8.549-2.6s-7.129,5.491-9,6.6C1.672,51.3-6.227,53.67-6.227,53.67Z" transform="translate(-0.226 -28.988)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 90.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0a12.493,12.493,0,0,1,5.392,4.831l3.763,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-14" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(13.027 36.285)">
                                                                                      <path id="p1-15" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(9.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 42 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t2">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="43" height="187" viewBox="0 0 43 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom2" transform="translate(-1025.5 -480.867)">
                                                                                  <g id="bounds" transform="translate(1025.5 412.367)">
                                                                                    <line id="bound-bottom" x2="43" transform="translate(0 255)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-top" x2="43" transform="translate(0 69)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(1030.5 533.705)">
                                                                                    <path id="p1" d="M6.4,50.169c-.48-3.135-4.165-31.5-5.523-34.442S-.166,3.567,3.909,3.662,20.933,6.227,27,5.088s7.274,11.4,6.155,16.529-9.26,25.607-9.1,28.552S6.875,53.3,6.4,50.169Z" transform="translate(-0.001 0.001)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(1036.885 582.467)">
                                                                                    <path id="rb1" d="M14.808,18.514s-.538,18.244-2.7,37.5c-2,17.786-2.474,17.889-4.145,23.7-1.45,5.051-7.5,13.994-8.84,8.565-2.216-8.989-.658-5-.658-30.757,0-21.561-1.32-39.013-1.32-39.013s.7,2.743,8.663,2.616S14.808,18.514,14.808,18.514Z" transform="translate(2.857 -18.51)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M7.724,15.033C7.972,22.4,6.856,31.486,7.3,39.514c.516,9.463-.742,19.226-1.8,18.284s-2.322-18.91-2.322-18.91-.326-11.182-1.583-23.1S-.44,4.183.39,1.729,2.694.742,4.069.407C6.157-.266,7.166-1.523,7.724,15.033Z" transform="translate(6.539 5.402) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(1027.49 483.282)">
                                                                                    <path id="shape" d="M949.875,1707.918c-9.477,0-23.606,30.316-18.839,40.421s33.2,10.105,37.908,0S959.351,1707.918,949.875,1707.918Z" transform="translate(-930.076 -1707.918)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1732.236c-3.645,0-7.977,4.484-11.928,11.038-.1.166-.6,1.022-.6,1.022l12.523,11.623,12.214-12.277s-.119-.2-.337-.574C958.239,1737.1,953.67,1732.236,949.874,1732.236Z" transform="translate(-930.076 -1732.236)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1709.588s-.225.4-.475.849c-5.045,9.1-8.6,21.678-5.842,27.515,1.156,2.45,3.7,4.306,7.474,5.753l.434.156,10.89-22.579Z" transform="translate(-930.076 -1697.531)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1744.524s.378-.106.861-.254c3.579-1.076,6.87-3.14,8.218-6.032,2.722-5.841-.907-18.434-6.429-28.277-.091-.162-.428-.75-.428-.75l-12.2,12.339Z" transform="translate(-930.076 -1697.816)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1710.527s.395.155.711.262c5.432,1.876,13.191,2.02,19.748.293l.51-.158-1.268-2.8-18.379-.29Z" transform="translate(-930.076 -1664.207)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1711.958l-9.543,19.754,18.42.29Z" transform="translate(-930.076 -1688.041)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(1022.418 483.367)">
                                                                                    <g id="plaque" transform="translate(12.085 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-2.859 52.686)">
                                                                                      <path id="p1-2" data-name="p1" d="M1.987,40.392c-.68-.2-2.778.28-2.688-.667s-1.283-5.372.4-6.637c.7-.522-.291-3.079,2.284-3.164,2.121-.071,9.658,1.707,12.649,1.471,1.9-.15,3.067.955,5.506.637,1.954-.257,4-.64,5.845,0,1.254.433.728.579,1.848,1.32.9.6,1.411,3.379,1.622,4.265l.6,3.771S7.215,41.947,1.987,40.392Z" transform="translate(13.401 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(10.85 95.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s4.264,3.18,8.748,6.18c1.3.873,1.879,4.04,3.51,4.04,1.368,0,2.825-3.684,4.352-4.512a92,92,0,0,0,9.073-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2" d="M662.137,1600.456c-2.174,3.374.2,8.964,1.422,15,1.649,8.166,3.246,17.984,3.325,24.171.024,1.863,1.841,10.983,1.459,21.668-.675,18.888-.093,49.75,1.049,50.44.624.377,4.368-5.413,6.152-8.138.759-1.157,3.268-17.545,4.927-33.482,1.486-14.28,2.157-28.237,2.157-28.237a116.515,116.515,0,0,0,4.02-13.432c1.808-7.328,4.706-9.265,5.2-16.619s-2.311-12.193-3.235-12.8c-2.485-1.627-7.226.513-11.961,0-3.925-.428-10.364-2.32-13.873-1.224C661.821,1598.1,663.064,1599.018,662.137,1600.456Z" transform="translate(-652.982 -1542.261)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M12.377,37.5C3.038,38.031.649,30.182.083,20.868S1.742,1.845,9.661.148s39.705,11.565,35.674,20.3c-1.491,3.236-5.727,6.862-12.557,10.521C26.4,34.392,17.32,37.217,12.377,37.5Z" transform="translate(4.821 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.355 81.393)">
                                                                                      <path id="p3" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(13.582 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(15.955 56.618) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M685.073,1679.565l-4.532,16.213-6.659-9.493-9.247,18.229" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(6.686 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a42.83,42.83,0,0,0,7.415,3.3,33.226,33.226,0,0,0,10.511,1.889c9.284,0,19.209-5.186,19.209-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M43.636,13.4s-9.925,5.186-19.209,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(12.082 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(6.686 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a42.83,42.83,0,0,0,7.415,3.3,33.226,33.226,0,0,0,10.511,1.889c9.284,0,19.209-5.186,19.209-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M43.636,13.4s-9.925,5.186-19.209,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-11" data-name="p1" d="M5.4,43.414C5,40.734,1.9,16.491.758,13.975S-.116,3.581,3.309,3.662,17.619,5.854,22.719,4.88s6.114,9.744,5.174,14.128-7.783,21.888-7.649,24.4S5.8,46.094,5.4,43.414Z" transform="translate(7.581 -0.246)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(16.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(12.828 76.954)">
                                                                                      <path id="p1-12" data-name="p1" d="M38.378-22.686c1.161,0-.907,19.138-.907,19.138l-5.5,19.629-.714,9.907-6.813-.358-1.633-7.861V11.194S20.1-20.6,21.75-21.333,37.218-22.686,38.378-22.686Z" transform="translate(-16.768 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 53.644)">
                                                                                      <path id="p1-13" data-name="p1" d="M-2.628,52.305l-.249-1.717s-.193-.955-.658-2.6a19.423,19.423,0,0,1-1-6.432c.332-3.781,2.062-5.873,2.99-6.092,1.571-.383,3.162.178,4.864.312,2.212.169,7.447.672,11.826,1.049,6.8.586,8.278-.424,9.416.245s1.464.815,3.012,4.284,1.286,9.231,1.286,9.231a26.955,26.955,0,0,1-6.941,0c-2.255-.213-4.162-3.6-8.549-2.6s-7.129,5.491-9,6.6C2.8,55.515-2.628,52.305-2.628,52.305Z" transform="translate(-0.226 -34.988)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 90.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0a12.493,12.493,0,0,1,5.392,4.831l3.763,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-14" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(6.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(11.027 36.285)">
                                                                                      <path id="p1-15" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 41 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t1">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="49" height="187" viewBox="0 0 49 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom1" transform="translate(-1082.5 -506.867)">
                                                                                  <g id="bounds" transform="translate(1085.5 478.367)">
                                                                                    <line id="p2" x2="49" transform="translate(-3 29)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="p1" x2="49" transform="translate(-3 215)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(1094.528 560.095)">
                                                                                    <path id="p1-2" data-name="p1" d="M4685.586,477.143s4.227-9.561,5.7-15.613c1.692-6.939,1.931-13.355,2.789-18.852,1.593-10.256-5.732-10.085-5.732-10.085s-10.715-4.236-17.153-.847-7.479,5.2-8.6,14.4,2.209,29.951,2.209,29.951a18.518,18.518,0,0,0,9.26,3.316C4679.257,479.671,4685.586,477.143,4685.586,477.143Z" transform="translate(-4662.823 -428.159)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(1092.497 606.213)">
                                                                                    <path id="rb1" d="M21-.147,16.62,37.435s-.112.107-.529,9.308c-.435,9.623-3.913,20.15-8.251,20.831C-.618,68.9,5.448,57.44,3.936,36.357S0,0,0,0A15.454,15.454,0,0,0,9.125,3.11C14.374,3.074,21-.147,21-.147Z" transform="translate(3.944 0.537) rotate(4.012)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M7.062,13.192a204.534,204.534,0,0,1-.9,24.036C5.162,45.306,3,53.266,2.114,52.092s.87-10.134.505-19.559S-.808,3.573.029,1.369,2.292.463,3.64.149C5.689-.475,6.689-1.609,7.062,13.192Z" transform="translate(10.589 11.271) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(1090.49 509.282)">
                                                                                    <path id="shape" d="M949.875,1707.918c-9.477,0-23.606,30.316-18.839,40.421s33.2,10.105,37.908,0S959.351,1707.918,949.875,1707.918Z" transform="translate(-930.076 -1707.918)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1732.236c-3.645,0-7.977,4.484-11.928,11.038-.1.166-.6,1.022-.6,1.022l12.523,11.623,12.214-12.277s-.119-.2-.337-.574C958.239,1737.1,953.67,1732.236,949.874,1732.236Z" transform="translate(-930.076 -1732.236)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1709.588s-.225.4-.475.849c-5.045,9.1-8.6,21.678-5.842,27.515,1.156,2.45,3.7,4.306,7.474,5.753l.434.156,10.89-22.579Z" transform="translate(-930.076 -1697.531)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1744.524s.378-.106.861-.254c3.579-1.076,6.87-3.14,8.218-6.032,2.722-5.841-.907-18.434-6.429-28.277-.091-.162-.428-.75-.428-.75l-12.2,12.339Z" transform="translate(-930.076 -1697.816)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1710.527s.395.155.711.262c5.432,1.876,13.191,2.02,19.748.293l.51-.158-1.268-2.8-18.379-.29Z" transform="translate(-930.076 -1664.207)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1711.958l-9.543,19.754,18.42.29Z" transform="translate(-930.076 -1688.041)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(1082.418 509.367)">
                                                                                    <g id="plaque" transform="translate(11.595 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s4.539-4.156,8.715-1.691c1.806,1.067,3.568,7.231,8.1,7.654S35.254,9.2,35.254,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s4.539-4.156,8.715-1.691c1.806,1.067,3.568,7.231,8.1,7.654S35.254,9.2,35.254,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s4.539-4.156,8.715-1.691c1.806,1.067,3.568,7.231,8.1,7.654S35.254,9.2,35.254,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(1.141 51.686)">
                                                                                      <path id="p1-3" data-name="p1" d="M1.987,40.392c-.68-.2-2.778.28-2.688-.667s1-4.128,2.688-5.393c1.444-1.083,3.832-3.766,9.605-4.223,3.92-.31,6.839.683,10.408,1.923,1.254.433,2.614.315,3.733,1.056.9.6,2.09,3.451,2.3,4.337a8.047,8.047,0,0,1-.387,2.967S7.215,41.947,1.987,40.392Z" transform="translate(13.401 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(12.85 95.642)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654-8.372s4.264,3.18,8.748,6.18c1.3.873,1.879,4.04,3.51,4.04,1.368,0,2.825-3.684,4.352-4.512a92,92,0,0,0,9.073-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2-2" data-name="p2" d="M666.884,1602.665c-5.356,8.31-.134,26.546,0,36.963.024,1.863,1.841,10.983,1.459,21.668-.675,18.888-3.628,43.666-2.485,44.356a4.016,4.016,0,0,0,5.226-1.53,35.049,35.049,0,0,0,4.461-9.751c.889-3.2,1.142-7.223,1.657-9.687,3.832-18.343,8.412-44.1,8.412-44.1a112.058,112.058,0,0,0,5.672-16.57,121.734,121.734,0,0,0,2.641-19.82c.021-1.255-.469-3.432-2-4.27-.386-.212-2.389-.289-3.314-.892C682.909,1595.3,672.8,1593.491,666.884,1602.665Z" transform="translate(-652.982 -1542.261)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M12.377,37.5C3.038,38.031.649,30.182.083,20.868S1.742,1.845,9.661.148s39.705,11.565,35.674,20.3c-1.491,3.236-5.727,6.862-12.557,10.521C26.4,34.392,17.32,37.217,12.377,37.5Z" transform="translate(7.821 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.355 81.393)">
                                                                                      <path id="p3" d="M10.855,3.658S16.177,9.123,21.5,9.123,32.141,3.658,32.141,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,3.658S16.177,9.123,21.5,9.123,32.141,3.658,32.141,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,3.658S16.177,9.123,21.5,9.123,32.141,3.658,32.141,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(16.582 169.858)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(17.108 54.682)">
                                                                                      <path id="p1-8" data-name="p1" d="M684.624,1679.565l-4.433,19.243-6.513-11.267-9.044,21.636" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(3.472 105.672)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a55.755,55.755,0,0,0,8.8,3.3,46.061,46.061,0,0,0,12.476,1.889c11.019,0,22.8-5.186,22.8-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M50.575,13.4s-11.78,5.186-22.8,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(15.082 168.116)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(3.472 67.858)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,29.4a55.755,55.755,0,0,0,8.8,3.3,46.061,46.061,0,0,0,12.476,1.889c11.019,0,22.8-5.186,22.8-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M50.575,13.4s-11.78,5.186-22.8,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-12" data-name="p1" d="M4681.881,469.687a103.751,103.751,0,0,0,4.794-13.121c1.422-5.832,1.623-11.224,2.344-15.843,1.338-8.619-4.817-8.476-4.817-8.476s-9.005-3.56-14.416-.712-6.286,4.373-7.227,12.1,1.856,25.171,1.856,25.171a15.566,15.566,0,0,0,7.783,2.787C4676.561,471.812,4681.881,469.687,4681.881,469.687Z" transform="translate(-4651.522 -427.439)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(18.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(12.828 76.954)">
                                                                                      <path id="p1-13" data-name="p1" d="M40.987-22.686c1.332,0-1.041,19.138-1.041,19.138l-5.811,20.7-3.458,8.889-7.052-.6-1.874-7.861L21,11.645s-.991-32.242.9-32.978S39.655-22.686,40.987-22.686Z" transform="translate(-16.768 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 53.644)">
                                                                                      <path id="p1-14" data-name="p1" d="M-2.876,52.57a29.263,29.263,0,0,1,.9-7.165c.971-2.822,1.233-4.554,4.7-7.049a15.518,15.518,0,0,1,9.166-2.93,32.26,32.26,0,0,1,11.139,2.117c1.15.543,3.673.3,5.221,3.771s0,9.274,0,9.274-1.629.444-6.333,0c-2.255-.213-4.162-3.6-8.549-2.6s-7.129,5.491-9,6.6C2.8,55.515-2.876,52.57-2.876,52.57Z" transform="translate(1.774 -35.988)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(14.765 73.16) rotate(-48)">
                                                                                      <path id="p2-7" data-name="p2" d="M13.5,8.2H12.378a.573.573,0,0,1-.559-.559V5.034c0-.336-.373-.559-.6-.3h0A8.2,8.2,0,0,1,4.249,7.421,7.169,7.169,0,0,1,1.489,6.6,7.23,7.23,0,0,1,.221,5.817.6.6,0,0,1,.147,4.96L.93,4.176A.564.564,0,0,1,1.638,4.1a9.019,9.019,0,0,0,1.454.783c.224.075.485.149.746.224A6.159,6.159,0,0,0,9.693,3.1c.447-.522.112-.858-.261-.858H6.822a.608.608,0,0,1-.6-.559V.559A.608.608,0,0,1,6.822,0h6.787a.462.462,0,0,1,.447.485v7.16A.573.573,0,0,1,13.5,8.2Z" transform="translate(3.843 9.695)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M13.946,4.7a.541.541,0,0,1-.783,0A5.969,5.969,0,0,0,11,3.319c-.224-.075-.485-.149-.746-.224A6.159,6.159,0,0,0,4.4,5.109c-.447.522-.112.858.261.858h2.61a.573.573,0,0,1,.559.559V7.644a.573.573,0,0,1-.559.559H.485A.494.494,0,0,1,0,7.719V.559A.573.573,0,0,1,.559,0H1.678a.573.573,0,0,1,.559.559V3.17c0,.336.373.559.6.3h0A8.158,8.158,0,0,1,9.807.783a7.169,7.169,0,0,1,2.759.82,8.152,8.152,0,0,1,2.126,1.529.54.54,0,0,1,0,.783Z" transform="translate(0 0)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 90.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0,8.083,7.242,8.083,7.242l1.073,5.358Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-8" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(6.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture-2" data-name="denture" transform="translate(14.027 36.285)">
                                                                                      <path id="p1-17" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <!---->
                                                                      </section>
                                                                      <section _ngcontent-gep-c159="" class="dental-chart__section dental-chart__section--right">
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 38 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t8">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="56.368" height="187" viewBox="0 0 56.368 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom8" transform="translate(-574.386 -497.867)">
                                                                                  <g id="bounds" transform="translate(5)">
                                                                                    <line id="bound" x2="56" transform="translate(569.5 498.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="56" transform="translate(569.5 684.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(575.534 500.269)">
                                                                                    <path id="shape" d="M29.052,53.814C7.672,55.239-4.8,41.429,1.745,16.94,4.762,5.632,14.739-1.577,26.314.3c10.027,1.622,16.669,7.2,19.8,21.866C49.056,35.908,51.559,52.324,29.052,53.814Z" transform="translate(0.018 48) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412.943A22.222,22.222,0,0,1,10.592.3L13.51.943l2.53.87V17.966l-7.929,2.3L.04,17.966S-.18,1.145.412.943Z" transform="translate(0 32.04) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052,20.106A36.606,36.606,0,0,1,.322,18.877.588.588,0,0,1,0,18.542V2.24L8.034,0,16,2.24V19.848s.179-.065-.293,0C15.082,19.936,14.094,20.037,13.052,20.106Z" transform="translate(33.725 32) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,0s1.368,5.065,2.11,9.575a71.392,71.392,0,0,1,.857,8.464h-16L0,8.37,2.762.039Z" transform="translate(17.927 18.762) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793,18s.092.158,0-.233C-.311,13.154-.4,7.944,1.416.713,1.424.677,1.6,0,1.6,0H16.1l2.189,8.67L16.1,18Z" transform="translate(17.966 48.099) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,18,2.076,8.708,0,0,8.109,2.222,14.471.43,16,0,13.238,8.369,16,18,8.109,15.8Z" transform="translate(17.966 32) rotate(-90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,16.852s.217-.715.3-1.008A22.614,22.614,0,0,1,13.9.213c.062-.024.648-.213.648-.213V16.852Z" transform="translate(1.114 46.551) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,0S0,.077.2.155c5.6,2.2,9.848,6.736,12.638,15.381.009.027.248.671.248.671H0Z" transform="translate(1.759 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,.5C15.954,8.4,12.774,15.4.774,17.45c-.042.007-.774,0-.774,0V0H16S16,.243,16,.5Z" transform="translate(35.966 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,16.5s-.179-.055-.567-.18C7.638,14.1,2.326,8.736.141.484.171.6,0,0,0,0H15.316Z" transform="translate(35.966 47.316) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(574.653 556.367)">
                                                                                    <path id="p1" d="M3851.85,2624.418s-7.893-13.972-4.933-23.94,8.279-16.047,11.7-16.929,4.937-2.69,10.292.837,6.712,2.641,6.712,2.641a44.219,44.219,0,0,1,11.25-5.335c5.586-1.5,5.734-3.262,11.924,5.335s1.785,21.6,1.785,21.6-4.861,7.1-5.165,9.832-.65,7.01-.65,7.01a186.634,186.634,0,0,1-22.732,1.16,127.961,127.961,0,0,1-20.188-2.215Z" transform="translate(-3846.253 -2580.447)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(580.03 600.389)">
                                                                                    <path id="rb2" d="M3929.178,2854.96a6.929,6.929,0,0,0,.613,1.047c.737,1.122,2.053,4.844.806,17.49-1.95,19.822-19.988,36.985-26.713,38.244-.88.165-3.6.683-4.7,0a3.959,3.959,0,0,1-1.607-3.259c-.034-.785.39-1.59-.208-1.7-.327-.063-.226.351-.4.719-.511,1.1,2.088-51.873,8.758-51.572.508.023,1.3.054,2.089.08a185.384,185.384,0,0,0,21.357-1.044Z" transform="translate(-3886.144 -2854.107)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M3900.595,2890.781a77.093,77.093,0,0,1-4.457,16.4c-.511,1.1-.806,3.615-3.576,3.124-3.58-.628-3.146-4.3-2.93-15.312s-3.362-11.432-4.013-19.3-.048-21.905-.048-21.905q7.552,1.093,15.214,1.592c1.165.077,2.631.159,4.112.226a95.676,95.676,0,0,0-4.3,19.351C3899.936,2881.531,3901.709,2882.723,3900.595,2890.781Z" transform="translate(-3885.316 -2853.786)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M3905.077,2858.481c.615,1.429,1.691,11.2-3.983,21.118s-13.807,17.965-14.711,17.148,7.44-10.154,11.094-20.4,1.344-17.868,1.344-17.868.252-1.017,2.272-.61S3904.464,2857.057,3905.077,2858.481Z" transform="translate(-3864.521 -2848.076)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M3904.277,2858.388c.615,1.429-2.2,15.186-7.871,25.1s-5.31,15.4-6.213,14.587.606-12.626,4.26-22.875,2.522-16.161,3.569-16.81S3903.664,2856.964,3904.277,2858.388Z" transform="translate(-3873.486 -2847.3)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M3891.51,2857.15c.116.775-1.034,2.527-1.23,11.257-.116,5.145,1.717,9.46,1.23,14.628-.759,8.06-4.067,14.839-5.155,15.11-.879.218.057-7.343,0-14.207-.052-6.321-2.873-12.241-2.923-14.929-.1-5.43-1.063-12.925,0-13.2a7.741,7.741,0,0,1,4.155-.28A9.078,9.078,0,0,1,3891.51,2857.15Z" transform="translate(-3879.575 -2846.693)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(582.363 500.48)">
                                                                                    <g id="plaque" transform="translate(-5.744 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s8.5-4.156,16.312-1.691c3.381,1.067,6.678,7.231,15.155,7.654S58.644,9.2,58.644,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s8.5-4.156,16.312-1.691c3.381,1.067,6.678,7.231,15.155,7.654S58.644,9.2,58.644,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s8.5-4.156,16.312-1.691c3.381,1.067,6.678,7.231,15.155,7.654S58.644,9.2,58.644,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-5.088 57.385)">
                                                                                      <path id="p1-2" data-name="p1" d="M-.783,48.273a17.3,17.3,0,0,1,4.755-9.02c3.2-3.29,4.094-4.874,9.8-4.167s5.642,4.586,10.736,4.167,9.06-7.2,16.472-6.422c3.654.386,4.159,2.639,6.391,5.341A13.483,13.483,0,0,1,49.9,43.451s.233,4.891.276,5.818C50.173,49.269-.94,50-.783,48.273Z" transform="translate(1.745 -32.95)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(-2.978 98.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s7.674,3.18,15.744,6.18c2.342.873,3.382,4.04,6.317,4.04,2.461,0,5.085-3.684,7.832-4.512,8.636-2.6,16.328-5.707,16.328-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-5.898 1.189)">
                                                                                      <path id="p2" d="M691.83,1644.952a18.346,18.346,0,0,1,.539-7.7c.938-2.991,3.975-5.863,4.8-8.922a27.483,27.483,0,0,0-.588-17.92c-1.174-2.945-3.467-7.338-6.814-7.768-3.691-.481-13.375,4.271-14.609,5.981-1.608,2.225-5.936-1.161-6.716-.686-.7.423-1.922-3.562-8.285-3.334-3.315.119-7.28,3.35-9.915,7.844-2.142,3.649-3.439,8.148-4.4,10.295-1.126,2.515.041,8.534,1.765,13.53,1.4,4.069,3.329,7.166,3.432,8.677.214,3.148,0,11.716,0,11.716s-.177,10.17.784,13.432c1.169,3.968,2.8,7.163,3.236,11.128,1.04,9.492-.981,15.306,1.373,19.217,1.125,1.867,4.26-4.508,4.412-3.285.216,1.736,2.512,5.595,5.442,4.265a29.814,29.814,0,0,0,6.422-3.383c4.741-3.489,10.366-9.4,12.354-13.481,1.195-2.455,4.809-6.943,6.765-16.766a68.923,68.923,0,0,0,1.079-15.393A35.147,35.147,0,0,0,691.83,1644.952Z" transform="translate(-645.938 -1546.275)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M.007,29.729C-.039,29.116.014,17.57,4.88,9.92,8.583,4.1,15.98-.048,21.3,0,26.27.046,33.263.342,39.1,9.022c3.4,5.06,4.454,9.6,5.391,14.751.592,3.246,1.571,6.884,1.325,11.2-.349,6.142-1.129,8.545-3.137,10.818a11.9,11.9,0,0,1-5.932,3.976C28.141,52.635,18.008,53,10.37,47.888,2.1,42.355.142,31.563.007,29.729Z" transform="translate(0 45.852) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(-1.724 83.393)">
                                                                                      <path id="p3" d="M10.855,3.658S21.617,9.123,32.379,9.123,53.9,3.658,53.9,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658S21.617,9.123,32.379,9.123,53.9,3.658,53.9,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658S21.617,9.123,32.379,9.123,53.9,3.658,53.9,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(7.964 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.3-61.417a6.815,6.815,0,0,1,0-8,4.739,4.739,0,0,1,6.919,0,6.815,6.815,0,0,1,0,8A4.739,4.739,0,0,1,22.3-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(7.841 59.495) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M33.139-.088l-.5.327L25.7,16.795,15.008,7.033-.066,26.069" transform="translate(0 0)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(-6.26 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a77.739,77.739,0,0,0,10.745,3.3,67.769,67.769,0,0,0,15.231,1.889c13.453,0,27.835-5.186,27.835-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M60.311,13.4s-14.382,5.186-27.835,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(6.669 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M5.879,0,0,11.742H11.759Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(-6.26 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a77.739,77.739,0,0,0,10.745,3.3,67.769,67.769,0,0,0,15.231,1.889c13.453,0,27.835-5.186,27.835-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M60.311,13.4s-14.382,5.186-27.835,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(-6.718 -53.237)">
                                                                                      <path id="p1-11" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-4.798 56.045)">
                                                                                      <path id="p1-12" data-name="p1" d="M3851.327,2620.311l-.64-.125s-6.058-12.886-3.646-21.01c2.684-9.037,8-14.444,11.1-15.244s4.046-1.428,8.9,1.769,6.085,2.395,6.085,2.395a40.09,40.09,0,0,1,10.2-4.836c5.064-1.361,4.947-4.641,10.559,3.154s1.618,19.583,1.618,19.583-4.407,6.436-4.683,8.914-.589,6.355-.589,6.355a169.211,169.211,0,0,1-20.609,1.052,115.972,115.972,0,0,1-18.3-2.008Z" transform="translate(-3846.841 -2578.683)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-4.798 56.046)">
                                                                                      <path id="p2-5" data-name="p2" d="M4.9,9.588,6.1,3.979,9.8,0,4.9,1.63,0,0,3.7,3.979Z" transform="translate(20.489 16.537)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(0.511 75.068)">
                                                                                      <path id="p1-13" data-name="p1" d="M15.3,29.935A80.126,80.126,0,0,1,14.406,19.2c.167-5.858,4.44-11.667,5.582-18.855,1.807-11.373,2.588-16.358,2.588-16.358H43.954s-1.289,1.085.666,12.93c.9,5.46,8.206,13.658,8.2,20.126,0,6.9,0,9.02,0,9.02L35.286,23.307s-4.34-9.658-5.819-9.942S22.59,27.948,22.59,27.948Z" transform="translate(-14.397 15.695)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-6.406 56.846)">
                                                                                      <path id="p1-14" data-name="p1" d="M-2.2,47.059c-2.508.187-3.483.053-3.271-.451A32.183,32.183,0,0,1-2.516,41.2c1.178-1.663,2.284-4.174,6.047-5.883a15.559,15.559,0,0,1,5.853-1.485c1.312,0,2.872.973,4.014,1.485,2.774,1.24,6.111,3.681,7.195,3.3s2.79-1.331,6.608-3.3a44.235,44.235,0,0,1,10.154-3.3c1.584-.089,4.028,2.555,6.516,5.891a16.917,16.917,0,0,1,3.369,7.52,19.242,19.242,0,0,1,.335,4.128,28.425,28.425,0,0,0-12.853-3.693c-5.55-.2-8.174,1.92-14.149,2.039-4.839.1-12.409-2.19-16.014-2.039C-1.046,46.092.3,46.871-2.2,47.059Z" transform="translate(6.852 -33.004)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(7.083 36.171)">
                                                                                      <path id="p1-15" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(5.18 88.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.428-11.122s4.377-5.9,9.274-7.894,3.152-1.957,8.172,0,6.9,4.831,6.9,4.831l4.817,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.7,378.856l-1.832-7.545,27.25-6.08-1.55,8.133Z" transform="translate(-805.953 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.254,361.576l-1.425-7.542,21.966-5.259-1.2,8.15Z" transform="translate(-805.404 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.94,344.1l-.961-7.445,16.513-4.168-1.321,7.839Z" transform="translate(-804.802 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M827.854,307.556l-15.1,3.324s.478,14.042,7.824,13.322S827.854,307.556,827.854,307.556Z" transform="translate(-806.044 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(-3.969 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H48.761" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H48.761" transform="translate(-0.862 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H48.761" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H48.761" transform="translate(-0.862 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H48.761" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H48.761" transform="translate(-0.862 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H48.761" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H48.761" transform="translate(-0.862 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H48.761" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H48.761" transform="translate(-0.862 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H48.761" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H48.761" transform="translate(-0.862 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-3.829 126.983)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.2,53.359-45.417" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 37 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t7">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="61" height="187" viewBox="0 0 61 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom7" transform="translate(-656.5 -509.867)">
                                                                                  <g id="bounds" transform="translate(656.5 446.367)">
                                                                                    <line id="bound" x2="61" transform="translate(0 250)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="61" transform="translate(0 64)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(656.812 565.289)">
                                                                                    <path id="p1" d="M43.686.276C49.165,1.728,58.7,4.752,58.2,16.729s-6.35,30.631-6.35,30.631S37.928,49.5,26.121,49a90.593,90.593,0,0,1-21.49-3.62,5.181,5.181,0,0,0-.807-2.8c-3.86-4.783-7.6-17.678-5.211-28.6C.343,6.069,9.533,2.043,13.244,2.45c9.842,1.089,7.914,7.743,14.1,4.356S38.2-1.176,43.686.276Z" transform="translate(2.138 0)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(658.663 610.367)">
                                                                                    <path id="rb2" d="M51.02,8.8c1.345,11.56-1.756,23.171-8.89,33.3C30.2,58.972,22.15,73.986,20,63.463s6.984-24.764,5.91-29.7a39.743,39.743,0,0,0-1.553-4.91l1.553-18.66s5.976-.144,12.258-.493S51.02,8.8,51.02,8.8Z" transform="translate(1.282 -6.996)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M23.475,28.248c-.6-.6-2.061.665-5.3,5.96-5.905,9.644-3.116,31.124-3.116,31.124,0-.548-2.686,13.589-12.355-3.945s-1.544-38.4-1.544-38.4l1.8-16.532S9.378,8.66,21.164,9.41l4,.247S24.4,29.017,23.475,28.248Z" transform="translate(2.036 -6.453)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M3904.839,2852.992c.639,1.512,1.288,16.417-4.61,26.9s-9.086,20.121-10.026,19.262,4.2-17.188,8-28.029-.951-17.447.138-18.139S3904.2,2851.478,3904.839,2852.992Z" transform="translate(-3864.861 -2843.018)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M3893.115,2851.005c.272.645-.178,6.486-1.169,11.085s-6.351,13.128-6.7,22.418,1.123,15,0,14.449-3.8-19.138,0-29.975,1.551-16.164,2.29-17.977c.319-.783,1.307-.159,2.657-.236C3891.262,2850.69,3892.758,2850.145,3893.115,2851.005Z" transform="translate(-3872.249 -2841.108)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M3893.149,2851.005c.272.645-.178,6.486-1.169,11.085s-3.385,8.041-3.739,17.332,3.447,20.382,2.323,19.83-9.089-19.43-5.291-30.271,1.551-16.164,2.29-17.977c.319-.783,1.307-.159,2.657-.236C3891.3,2850.69,3892.792,2850.145,3893.149,2851.005Z" transform="translate(-3881.068 -2841.108)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(656.947 512.268)">
                                                                                    <path id="shape" d="M29.052,59.423C7.672,61-4.8,45.748,1.745,18.706,4.762,6.219,14.739-1.742,26.314.326c10.027,1.791,16.669,7.954,19.8,24.145C49.056,39.651,51.559,57.778,29.052,59.423Z" transform="translate(0.019 48) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412,1.041A20.214,20.214,0,0,1,10.592.334l2.918.707L16.04,2V19.838L8.111,22.375.04,19.838S-.18,1.264.412,1.041Z" transform="translate(0 32.04) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052,22.2A33.31,33.31,0,0,1,.322,20.844C.1,20.774,0,20.475,0,20.475v-18L8.034,0,16,2.474V21.917s.179-.072-.293,0C15.082,22.014,14.094,22.125,13.052,22.2Z" transform="translate(37.241 32) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,0s1.368,5.593,2.11,10.573a86.834,86.834,0,0,1,.857,9.346h-16L0,9.242,2.762.043Z" transform="translate(19.795 18.762) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793,19.876s.092.175,0-.257C-.311,14.525-.4,8.772,1.416.788,1.424.748,1.6,0,1.6,0H16.1l2.189,9.574L16.1,19.876Z" transform="translate(19.838 48.099) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,19.876,2.076,9.616,0,0,8.109,2.453,14.471.475,16,0,13.238,9.241,16,19.876,8.109,17.444Z" transform="translate(19.838 32) rotate(-90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,18.609s.217-.789.3-1.114C2.266,9.341,7.2,3.117,13.9.235c.062-.027.648-.235.648-.235V18.609Z" transform="translate(1.23 46.551) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,0S0,.085.2.171C5.8,2.6,10.05,7.609,12.84,17.155c.009.03.248.74.248.74H0Z" transform="translate(1.943 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,.551C15.954,9.274,12.774,17,.774,19.269c-.042.008-.774,0-.774,0V0H16S16,.268,16,.551Z" transform="translate(39.715 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,18.221s-.179-.061-.567-.2C7.638,15.565,2.326,9.647.141.534.171.666,0,0,0,0H15.316Z" transform="translate(39.715 47.316) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(663.582 512.48)">
                                                                                    <g id="plaque" transform="translate(-1.763 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s8.7-4.156,16.711-1.691c3.463,1.067,6.842,7.231,15.526,7.654S59.873,9.2,59.873,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s8.7-4.156,16.711-1.691c3.463,1.067,6.842,7.231,15.526,7.654S59.873,9.2,59.873,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s8.7-4.156,16.711-1.691c3.463,1.067,6.842,7.231,15.526,7.654S59.873,9.2,59.873,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-4.909 54.385)">
                                                                                      <path id="p1-2" data-name="p1" d="M-1.745,48.031A10.751,10.751,0,0,1,1.942,40c3.526-3.29,5.325-5.1,11.615-4.391s4.425,5.233,10.035,4.814S33.84,32.223,42,33.006a16.624,16.624,0,0,1,10.358,5.166,12.913,12.913,0,0,1,2.777,5.279s.257,4.891.3,5.818C55.443,49.269-1.917,49.756-1.745,48.031Z" transform="translate(1.745 -32.95)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(-1.483 98.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372S20.107-5.193,29-2.193c2.58.873,3.725,4.04,6.958,4.04,2.711,0,5.6-3.684,8.627-4.512,9.512-2.6,17.986-5.707,17.986-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(-5.801 1.189)">
                                                                                      <path id="p2" d="M697.619,1645.273s2.536-10.58,4.44-16.952c1.076-3.6,4.181-12.113.824-19.756-2.994-6.817-7.414-8.684-13.446-9.432-.4-.05-1.533.656-2.283.574-3.69-.407-7.185,2.089-9.577,5.1-1.771,2.225-4.9,2.074-5.764,2.549-.769.423-5.494-5.836-12.5-5.608s-9.272,4.186-11.48,8.667c-2.384,4.837-1.949,15.947,1.054,22.968s3.883,5.5,4.119,8.647a73.8,73.8,0,0,1-2.358,19.6,63.8,63.8,0,0,0-2.245,11.7c-.437,4.909.494,10.907,1.155,15.722.678,4.946,4.593,10.745,7.246,14.069,2,2.513,2.634,3.063,4.994,0,.826-1.071.2-3.723-.173-7.6a86.331,86.331,0,0,1,1.9-22.251c.416-1.83,4.181-6.748,4.888-8.439.938-2.246,1.925-.995,3.406-1.915.94-.593,3.838,2.048,3.551,7.223-.284,5.129-3.614,11.847-5.2,18.362-1.283,5.286-1.732,10.972,0,12.56,1.152,1.056,9.228-8.583,14.174-17.811,1.316-2.455,9.016-10.842,11.247-20.334a83.623,83.623,0,0,0,2.03-9.232A36.329,36.329,0,0,0,697.619,1645.273Z" transform="translate(-645.901 -1546.275)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M.007,32.747c-.045-.676.008-13.394,4.873-21.82C8.583,4.511,15.98-.053,21.3,0,26.27.05,33.263.377,39.1,9.938c3.4,5.574,4.454,10.579,5.391,16.248.592,3.575,1.571,7.582,1.325,12.34-.349,6.766-1.129,9.412-3.137,11.916a11.979,11.979,0,0,1-5.932,4.38c-8.6,3.156-18.736,3.557-26.374-2.072C2.1,46.654.142,34.767.007,32.747Z" transform="translate(0 45.852) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(2.16 83.393)">
                                                                                      <path id="p3" d="M10.855,3.658S21.869,9.123,32.882,9.123,54.908,3.658,54.908,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658S21.869,9.123,32.882,9.123,54.908,3.658,54.908,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658S21.869,9.123,32.882,9.123,54.908,3.658,54.908,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(9.468 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.429-61.417a6.313,6.313,0,0,1,0-8,5.59,5.59,0,0,1,7.621,0,6.313,6.313,0,0,1,0,8A5.59,5.59,0,0,1,22.429-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(11.613 59.588) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M36.42-.009l-.548.325L28.315,16.838,16.492,7.017-.007,25.979" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(-6.2 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a92.019,92.019,0,0,0,11.836,3.3,81.838,81.838,0,0,0,16.777,1.889c14.818,0,30.66-5.186,30.66-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M65.773,13.4s-15.842,5.186-30.66,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(8.042 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.476,0,0,11.742H12.952Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(-6.2 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a92.019,92.019,0,0,0,11.836,3.3,81.838,81.838,0,0,0,16.777,1.889c14.818,0,30.66-5.186,30.66-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M65.773,13.4s-15.842,5.186-30.66,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(-3.938 -53.237)">
                                                                                      <path id="p1-11" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(-4.589 56.045)">
                                                                                      <path id="p1-12" data-name="p1" d="M40.787-.554C45.817.708,53.724,4.13,53.258,14.54s-5.2,25.888-5.2,25.888A175.8,175.8,0,0,1,24.15,41.6c-6.709-.3-12.931-.365-19.32-2.157.007-.854-1-1.7-1.5-2.436C-.209,32.855-3.641,21.646-1.45,12.157.14,5.275,7.717,1.346,11.124,1.7c9.036.946,8.075,7.8,13.758,4.853S35.753-1.816,40.787-.554Z" transform="translate(2.138 0.742)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(-4.589 56.046)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.4,9.588,6.719,3.979,10.794,0,5.4,1.63,0,0,4.075,3.979Z" transform="translate(22.569 16.537)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(1.258 75.068)">
                                                                                      <path id="p1-13" data-name="p1" d="M47.945,29.935a89.388,89.388,0,0,0,.8-10.736C48.594,13.341,47.28,7.85,46.259.662,44.644-10.711,43.946-15.7,43.946-15.7H24.833s-1.354.767-3.1,12.612c-.806,5.46-7.336,13.658-7.334,20.126,0,6.9,0,9.02,0,9.02l13.66.686s5.9-13.1,7.22-13.383,7.553,15.613,7.553,15.613Z" transform="translate(-14.397 15.695)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(-6.361 52.846)">
                                                                                      <path id="p1-14" data-name="p1" d="M-3.589,48.432c-3.142.748-3.263.417-3.263.417A16.972,16.972,0,0,1-4.34,42.177a18.174,18.174,0,0,1,7.835-5.834,13.178,13.178,0,0,1,8.591,0c3.055,1.24,4.619,4.122,7.419,4.3s3.185-1.74,7.39-3.713,6.709-4.953,12.76-3.568,7.922,2.859,10.924,6.8A13.6,13.6,0,0,1,53,49.071,37.34,37.34,0,0,0,38.94,45.858c-6.114-.2-9,1.92-15.585,2.039-5.33.1-13.668-2.19-17.639-2.039C-.456,46.092-.447,47.684-3.589,48.432Z" transform="translate(6.852 -33.004)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(9.863 36.171)">
                                                                                      <path id="p1-15" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(6.401 88.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.472-11.122s4.821-5.9,10.215-7.894,3.472-1.957,9,0,7.6,4.831,7.6,4.831l5.306,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.89,378.856l-2.018-7.545,30.016-6.08-1.707,8.133Z" transform="translate(-805.859 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.4,361.576l-1.57-7.542,24.2-5.259-1.32,8.15Z" transform="translate(-805.057 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M812.038,344.1l-1.059-7.445,18.189-4.168-1.455,7.839Z" transform="translate(-804.175 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M829.387,307.556l-16.636,3.324s.527,14.042,8.619,13.322S829.387,307.556,829.387,307.556Z" transform="translate(-805.363 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(-4.884 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H53.42" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H53.42" transform="translate(-0.66 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H53.42" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H53.42" transform="translate(-0.66 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H53.42" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H53.42" transform="translate(-0.66 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H53.42" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H53.42" transform="translate(-0.66 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H53.42" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H53.42" transform="translate(-0.66 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H53.42" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H53.42" transform="translate(-0.66 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(-4.836 126.983)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.2,58.116-45.417" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 36 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t6">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="65" height="187" viewBox="0 0 65 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom6" transform="translate(-709.5 -507.867)">
                                                                                  <g id="bounds">
                                                                                    <line id="bound" x2="65" transform="translate(709.5 694.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="65" transform="translate(709.5 508.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(710.473 563.367)">
                                                                                    <path id="p1" d="M3405.77,518.492s13.4-30.467,9.166-37.273-9.473-13.127-18.571-11.02-11.093,9.561-11.093,9.561-9.976-10.066-19.947-7.149c-9.622,2.815-14.6,16.8-12.347,23.056.029.08.86,6.694,3.033,10.755,2.831,5.286,10.914,8.252,10.914,11.48,0,2.672,8.617,2.957,17.744,2.512C3394.9,519.914,3405.77,518.492,3405.77,518.492Z" transform="translate(-3352.44 -469.787)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(710.298 610.552)">
                                                                                    <path id="rb2" d="M26.576-.288s2.314,32.482-4.2,42.768S3.962,67.748.341,64.111,2.437,56.349,4.2,45.16C5.063,39.643,7.809,33.1,7.932,29.632c.11-3.094-2.415-3.033-2.415-3.033A42.258,42.258,0,0,1,4.046,14.817c.087-2.539,1.732-5.036,2.561-7.436a6.753,6.753,0,0,0-.269-5.056s4.64-.442,5.138-.5C19.062,1,26.576-.288,26.576-.288" transform="translate(27.465 0.125) rotate(3)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="rb1" d="M725.12,633.545a201.607,201.607,0,0,1-5.772,29.038c-3.218,11.279-9.047,22.64-9.05,28.687-.007,13.618,8.1,2.934,14.28-3.537s5.991-15.057,10.46-22.351c2.7-4.405,4.5-5.386,5.856-5.829a7.1,7.1,0,0,1,.952-.266l-.952-6.529a20.616,20.616,0,0,1,.435-6.564c.823-3.344,2.522-4.785,2.856-6.812.73-4.434-.371-4.361-.371-4.361s-8.628.34-13.314,0S725.12,633.545,725.12,633.545Z" transform="translate(-710.298 -632.334)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r3" d="M3911.395,2852.511c.614,1.56-.674,18.04-6.342,28.862s-13.946,20.061-14.849,19.172,10.273-20.053,13.7-32.061-1.046-15.262,0-15.969S3910.782,2850.949,3911.395,2852.511Z" transform="translate(-3859.185 -2840.965)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r2" d="M3908.125,2854.229c.614,1.56,1.175,16.772-4.493,27.593s-8.083,18.219-8.987,17.332,8.628-22.281,8.1-30.622-1.046-12.986,0-13.694S3907.5,2852.667,3908.125,2854.229Z" transform="translate(-3866.927 -2841.359)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M3898.637,2847.071c.261.666-.5,14.859-5.368,27.072s-13.009,22.345-14.088,21.776,7.689-18.005,11.339-29.189,2.041-17.789,2.749-19.658c.307-.808,1.256-.164,2.554-.243C3896.856,2846.746,3898.284,2846.183,3898.637,2847.071Z" transform="translate(-3875.279 -2835.16)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(710.5 510.268)">
                                                                                    <path id="shape" d="M29.052,61.864C7.672,63.5-4.8,47.627,1.745,19.474,4.762,6.474,14.739-1.813,26.314.34,36.341,2.2,42.983,8.62,46.114,25.477,49.056,41.28,51.559,60.152,29.052,61.864Z" transform="translate(0.02 48) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="m" d="M.412,1.084A19.457,19.457,0,0,1,10.592.348l2.918.736,2.53,1V20.654L8.111,23.295.04,20.654S-.18,1.316.412,1.084Z" transform="translate(0 32.04) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="d" d="M13.052,23.114A32.067,32.067,0,0,1,.322,21.7C.1,21.628,0,21.316,0,21.316V2.576L8.034,0,16,2.576V22.817s.179-.075-.293,0C15.082,22.918,14.094,23.034,13.052,23.114Z" transform="translate(38.771 32) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="l" d="M15.8,0s1.368,5.823,2.11,11.008a94.033,94.033,0,0,1,.857,9.73h-16L0,9.622,2.762.045Z" transform="translate(20.609 18.762) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="b" d="M.793,20.693s.092.182,0-.268C-.311,15.122-.4,9.132,1.416.82,1.424.778,1.6,0,1.6,0H16.1l2.189,9.967L16.1,20.693Z" transform="translate(20.654 48.099) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="o" d="M0,20.693,2.076,10.011,0,0,8.109,2.554,14.471.495,16,0,13.238,9.62,16,20.693,8.109,18.161Z" transform="translate(20.654 32) rotate(-90)" fill="#eaeaea" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="mb" d="M0,19.373s.217-.822.3-1.159C2.266,9.725,7.2,3.245,13.9.245c.062-.028.648-.245.648-.245V19.373Z" transform="translate(1.28 46.551) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="ml" d="M0,0S0,.089.2.178C5.8,2.708,10.05,7.922,12.84,17.86c.009.031.248.771.248.771H0Z" transform="translate(2.023 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="dl" d="M16,.573C15.954,9.655,12.774,17.7.774,20.061c-.042.008-.774,0-.774,0V0H16S16,.279,16,.573Z" transform="translate(41.346 16) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                    <path id="db" d="M15.227,18.97s-.179-.063-.567-.207C7.638,16.2,2.326,10.043.141.556.171.694,0,0,0,0H15.316Z" transform="translate(41.346 47.316) rotate(-90)" fill="#f5f5f5" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" fill-rule="evenodd"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(710.751 511.669)">
                                                                                    <g id="plaque" transform="translate(8.113 85.214)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s8.154-4.156,15.655-1.691c3.244,1.067,6.409,7.231,14.545,7.654s18-5.962,18-5.962" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s8.154-4.156,15.655-1.691c3.244,1.067,6.409,7.231,14.545,7.654s18-5.962,18-5.962" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s8.154-4.156,15.655-1.691c3.244,1.067,6.409,7.231,14.545,7.654s18-5.962,18-5.962" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(1.956 52.589)">
                                                                                      <path id="p1-2" data-name="p1" d="M-2.169,48.089c.178-1.731,1-4.7,4.637-8.006s4.994-5.712,11.48-5,14.464,7.841,14.464,7.841,4.236-7.141,8.679-9.521,9.092,0,9.092,0c4.552-.907,10.72,10.948,10.72,10.948a2.683,2.683,0,0,0,0,2,15.852,15.852,0,0,1,.334,2.979S-2.347,49.821-2.169,48.089Z" transform="translate(2.169 -32.343)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(11.201 97.453)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s7.541,3.18,15.471,6.18c2.3.873,3.323,4.04,6.207,4.04,2.419,0,5-3.684,7.7-4.512,8.486-2.6,16.045-5.707,16.045-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.064 0)">
                                                                                      <path id="p2" d="M695.3,1647.8a175.752,175.752,0,0,0,6.6-16.4c1.118-3.6,7.072-13.9,3.587-21.541s-7.378-9.755-14.592-10.522c-3.831-.407-7.462,2.127-9.946,5.137-1.839,2.225-2.287,4.91-3.179,5.385-.8.423-9.436-8.513-16.712-8.285s-10.833,5.875-13.125,10.356c-2.475,4.837-2.058,14.436,1.06,21.458s10.842,8.368,11.087,11.516a70.367,70.367,0,0,1-2.446,19.469c-1.432,4.995-2.376,10.663-4.321,16.321-2.681,7.8-5.923,15.419-7.092,21.872a18.013,18.013,0,0,0,0,6.545c.638,3.138,8.28-3.765,13.859-13.421,3.59-6.214,5.89-14.809,9.293-20.878s7.174-3.231,7.174-3.231,4.922-2.649,2.2,6.793c-1.936,6.719-8.172,21.819-9.375,27.008-1.025,4.42,2.038,2.734,2.038,2.734s14.967-10.113,20.3-23.943S695.3,1647.8,695.3,1647.8Z" transform="translate(-645.898 -1546.275)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M.007,33.711c-.045-.7.008-13.788,4.873-22.462C8.583,4.644,15.98-.055,21.3,0c4.969.051,11.961.388,17.8,10.23,3.4,5.738,4.454,10.89,5.391,16.726.592,3.68,1.571,7.805,1.325,12.7-.349,6.965-1.129,9.69-3.137,12.266a12.03,12.03,0,0,1-5.932,4.509C28.141,59.684,18.008,60.1,10.37,54.3,2.1,48.027.142,35.79.007,33.711Z" transform="translate(0 45.852) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.218 82.204)">
                                                                                      <path id="p3" d="M10.855,3.658s9.382,5.465,18.764,5.465S48.383,3.658,48.383,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s9.382,5.465,18.764,5.465S48.383,3.658,48.383,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658s9.382,5.465,18.764,5.465S48.383,3.658,48.383,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(21.049 168.669)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.484-61.417a6.134,6.134,0,0,1,0-8,5.967,5.967,0,0,1,7.912,0,6.134,6.134,0,0,1,0,8A5.967,5.967,0,0,1,22.484-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(19.2 58.472) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M37.754-.012l-.569.324-7.812,16.51L17.081,6.975-.008,25.906" transform="translate(0)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(0.108 104.483)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a98.482,98.482,0,0,0,12.3,3.3,88.2,88.2,0,0,0,17.432,1.889c15.4,0,31.856-5.186,31.856-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M68.085,13.4s-16.459,5.186-31.856,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(19.569 166.927)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.724,0,0,11.742H13.447Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(0.108 66.669)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a98.482,98.482,0,0,0,12.3,3.3,88.2,88.2,0,0,0,17.432,1.889c15.4,0,31.856-5.186,31.856-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M68.085,13.4s-16.459,5.186-31.856,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(3.894 -54.426)">
                                                                                      <path id="p1-11" data-name="p1" d="M36.856,60.024s-24.075,4.775-22.8,10.5,27.9,7.35,27.9,12.4-27.9,7.8-27.9,7.8" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.441 56.864)">
                                                                                      <path id="p1-12" data-name="p1" d="M3399.66,510.377s11.868-25.391,8.115-31.063-8.387-10.94-16.444-9.184-9.822,7.968-9.822,7.968-8.833-8.389-17.662-5.958c-8.52,2.346-12.929,14-10.933,19.215.025.067.761,5.579,2.686,8.963,2.507,4.405,9.664,6.877,9.664,9.568,0,2.227,7.63,2.464,15.712,2.094C3390.033,511.563,3399.66,510.377,3399.66,510.377Z" transform="translate(-3352.44 -469.787)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.441 56.864)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.6,9.588,6.976,3.979,11.206,0,5.6,1.63,0,0,4.23,3.979Z" transform="translate(22.313 14.53)"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(17.695 34.982)">
                                                                                      <path id="p1-13" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(16.768 73.905)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.549,29.935s-.1-2.26,0-6.269a228.268,228.268,0,0,1,1.694-23c1.623-11.373,4.693-16.331,4.693-16.331h19.2S44.408-11.182,46.164.662a164.118,164.118,0,0,1,1.986,21,38.671,38.671,0,0,1-1.268,10.823L30.776,25.808s-1.212-10.687-2.54-10.971-9.547,14.141-9.547,14.141Z" transform="translate(-13.503 15.669)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(0.845 51.572)">
                                                                                      <path id="p1-15" data-name="p1" d="M-5.008,49.4l-1.493-.38a21.575,21.575,0,0,1,3-6.138c1.141-1.582,3.077-4.827,7.38-6.536s7.152-.969,9.832-.3c5.8,1.45,11.477,7.01,11.477,7.01a13.745,13.745,0,0,1,3.324-5.8c2.583-2.422,7.5-4.407,9.094-4.333,12.142.559,14.026,8.378,15.7,9.547S55.416,49.4,55.416,49.4a37.591,37.591,0,0,0-14.738-3.539c-6.347-.2-9.347,1.92-16.18,2.039-5.534.1-14.19-2.19-18.313-2.039A23.12,23.12,0,0,0-5.008,49.4Z" transform="translate(6.502 -32.919)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(15.799 87.285)">
                                                                                      <path id="p5" d="M806.154,402.363l.49-11.122s5.005-5.9,10.605-7.894,3.6-1.957,9.346,0,7.894,4.831,7.894,4.831l5.508,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.967,378.856l-2.095-7.545,31.162-6.08-1.772,8.133Z" transform="translate(-805.821 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M810.459,361.576l-1.63-7.542,25.12-5.259-1.37,8.15Z" transform="translate(-804.913 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M812.078,344.1l-1.1-7.445,18.884-4.168-1.511,7.839Z" transform="translate(-803.915 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M830.023,307.556l-17.272,3.324s.547,14.042,8.948,13.322S830.023,307.556,830.023,307.556Z" transform="translate(-805.081 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(4.083 123.265)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877h52.5" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877h52.5" transform="translate(-0.576 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877h52.5" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877h52.5" transform="translate(-0.576 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877h52.5" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877h52.5" transform="translate(-0.576 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877h52.5" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877h52.5" transform="translate(-0.576 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877h52.5" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877h52.5" transform="translate(-0.576 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877h52.5" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877h52.5" transform="translate(-0.576 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(1 125.794)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.2,60.087-45.417" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 35 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t5">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="44.254" height="187" viewBox="0 0 44.254 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom5" transform="translate(-812.5 -507.867)">
                                                                                  <g id="bounds" transform="translate(13 10)">
                                                                                    <line id="bound" x2="44" transform="translate(799.5 684.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="44" transform="translate(799.5 498.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(0 -25.642)">
                                                                                    <path id="p1" d="M1374.52,176.445s1-13.81,4.795-22.05,0-17.007,0-17.007-15.021-14.151-19-11.087-19.884,2.505-21.272,18.348,7.033,31.691,7.033,31.691a46.381,46.381,0,0,0,13.092,1.961,81.768,81.768,0,0,0,15.352-1.856Z" transform="translate(-525.815 460.772)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(0 -26)">
                                                                                    <path id="rb1" d="M28.454-.1S18.6,62.529,12.727,64.507s-4.737-.049-5.862-5.556c-.532-2.6.3-15.885-1.746-28.673C2.84,16.017,0,1.248,0,1.248a68.987,68.987,0,0,0,13.6.818A95.062,95.062,0,0,0,28.454-.1Z" transform="translate(820.336 635.802) rotate(3)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M3895.63,2847.3c.282.649,2.21,14.4-3.033,26.312s-4.089,25.16-5.252,24.605-1.646-20.927,2.289-31.836-.554-17.257.21-19.081c.331-.788,1.354-.16,2.753-.237C3893.7,2846.982,3895.25,2846.433,3895.63,2847.3Z" transform="translate(-3058.946 -2202.589)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(813.353 510.37)">
                                                                                    <path id="shape" d="M-52.017-46.226c3.286-2.459,6.792-3.838,8.568-7.043a21.184,21.184,0,0,0,2.173-11.113A34.68,34.68,0,0,0-43.741-75.82a20.573,20.573,0,0,0-6.81-9.581c-3.154-2.128-7.315-2.68-11.5-2.707-4.161-.028-8.375.442-11.847,2.377a20.375,20.375,0,0,0-8.11,9.092A22.321,22.321,0,0,0-84.291-64.7,25.759,25.759,0,0,0-80.1-53.735c2.1,3.283,3.1,3.2,6.2,5.792,3.075,2.6,8.216,7.911,11.823,7.829S-55.329-43.768-52.017-46.226Z" transform="translate(84.366 88.11)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M-54.677-56.112l-2.832-7.5,2.832-8.5-7.845,2.2-7.845-2.2,2.359,8.5-2.359,7.5,7.845-3.1Z" transform="translate(84.095 88.112)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M-78.434-78.911A40.3,40.3,0,0,0-82.011-73.5a22.321,22.321,0,0,0-2.28,11.936A25.759,25.759,0,0,0-80.1-50.6a13.25,13.25,0,0,0,4.45,4.424l5.014-6.8,2.373-7.565-2.373-8.435Z" transform="translate(84.366 84.973)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M-48.166-47.548c1.9-1.212,4-2.561,5.241-4.806a21.184,21.184,0,0,0,2.173-11.113,34.68,34.68,0,0,0-2.465-11.438,24.179,24.179,0,0,0-2.417-4.854l-8.79,8.615-2.848,8.412,2.848,7.542Z" transform="translate(83.842 87.195)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M-51.845-75.132c1.071-.8,2.028-1.4,3.333-2.233l-6.264-7.68-7.845-3.065-7.845,3.065-5.027,6.8c.333.24.942.707,1.76,1.392,3.075,2.6,8.216,7.911,11.823,7.829S-55.157-72.673-51.845-75.132Z" transform="translate(84.195 117.015)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M-45.99-50.874A19.912,19.912,0,0,0-50.435-55.6c-3.154-2.128-7.315-2.68-11.5-2.707-4.161-.028-8.375.442-11.847,2.377a18.261,18.261,0,0,0-4.033,3.157c0-.005-.55.465-.55.465l7.845,10.041,7.845,2.158,7.845-2.158Z" transform="translate(84.25 58.311)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(809.418 510.367)">
                                                                                    <g id="sealant" transform="translate(1.36 -50.484)">
                                                                                      <path id="p1-2" data-name="p1" d="M32.659,60.024s-19.653,3.9-18.612,8.571,22.775,6,22.775,10.122-22.775,6.367-22.775,6.367" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="plaque" transform="translate(8.085 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-2.859 48.942)">
                                                                                      <path id="p1-3" data-name="p1" d="M-2.169,48.089A15.329,15.329,0,0,1,.877,40.083c2.388-3.3,4.013-3.489,6.507-5.2l9.113-3,2.8-1.466c2.99-.907,14.111,9.727,16.516,10.9,1.246.6,1.581,5.78,1.647,7.678C37.464,49-2.286,49.821-2.169,48.089Z" transform="translate(10.056 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(8.85 98.642)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654-8.372s5.34,3.18,10.956,6.18c1.63.873,2.353,4.04,4.4,4.04,1.713,0,3.538-3.684,5.45-4.512A122.112,122.112,0,0,0,43.818-8.372" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2" d="M689.619,1645.76c1.486-14.653,1.114-11.426,3.123-17.8,1.136-3.6,3.25-7.165,3.441-10.115.21-3.23,1.084-7.349-2.868-11.28-4.777-4.755-11.9-9.131-14.61-9.432-.891-.1-1.173.071-3.107,1.083a27.9,27.9,0,0,1-5.226,1.976c-3.287.927-8.048,2.329-10.706,7.01-4.461,7.855-3.271,16.643-1.912,22.433,1.164,4.958,3.765,8.972,6.245,17.207.685,2.275,3.779,25.487,3.935,34.925.2,12.088-.752,23.2.1,25.683.677,1.978,2.4,1.516,4.308,0,1.435-1.13,2.173-4.335,2.173-4.335l6.245-20.075S689.385,1648.067,689.619,1645.76Z" transform="translate(-652.982 -1545.086)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M18.514,39.69c-5.155.277-7.714-3.848-11.35-8.738C4.537,27.425.541,24.35.288,20.421c-.162-2.5,1.591-5.371,5.634-9.6C8.264,8.376,8.687,5.8,12.384,3.336,15.887,1,22.734-1.1,26.882-.8c3.606.262,10.51,2.507,14.664,7.177,3.1,3.48,4.225,13.224,4.225,13.224s.014,12.4-9.527,17.046C29.293,40.032,20.67,39.575,18.514,39.69Z" transform="translate(4.9 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(13.355 83.393)">
                                                                                      <path id="p3" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(14.582 169.858)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(12.989 61.271) rotate(-3)">
                                                                                      <path id="p1-8" data-name="p1" d="M684.97,1679.565l-.306.389-4.2,19.862-6.625-11.858-9.2,22.77" transform="translate(-664.635 -1686.434)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(4.256 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a51.154,51.154,0,0,0,8.335,3.3,41.5,41.5,0,0,0,11.815,1.889c10.436,0,21.592-5.186,21.592-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M48.243,13.4s-11.156,5.186-21.592,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(13.082 168.116)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(4.256 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a51.154,51.154,0,0,0,8.335,3.3,41.5,41.5,0,0,0,11.815,1.889c10.436,0,21.592-5.186,21.592-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M48.243,13.4s-11.156,5.186-21.592,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-12" data-name="p1" d="M1369.285,169.13s-.089.328,1.181-4.229,1.006-7.715,3.9-14c3.329-7.231,0-14.925,0-14.925s-13.182-12.419-16.674-9.729-17.45,2.2-18.668,16.1,6.172,27.811,6.172,27.811a40.7,40.7,0,0,0,11.489,1.721c4.533-.116,8.172-1.784,12.6-2.751Z" transform="translate(-1336.084 -126.016)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(16.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(14.691 76.954)">
                                                                                      <path id="p1-13" data-name="p1" d="M35.339-22.686c.955,0-.746,19.138-.746,19.138L30.067,16.081l-.588,9.907H24.11l-1.581-8.219V11.194S20.3-20.6,21.655-21.333,34.384-22.686,35.339-22.686Z" transform="translate(-16.034 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(12.027 36.285)">
                                                                                      <path id="p1-14" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 51.644)">
                                                                                      <path id="p1-15" data-name="p1" d="M-5.463,49.4H-6.42s.369-6.841,5.537-11.341c3.538-3.081,9.925-4.585,14.631-6.222,1.06-.375.225-1.111,2.149-.98C24.123,31.413,32.9,41.3,34.036,42.469S35.469,49.4,35.469,49.4,22.094,44.28,11.738,44.546A34.963,34.963,0,0,0-5.463,49.4Z" transform="translate(-2.73 -31.802)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 88.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0a12.493,12.493,0,0,1,5.392,4.831l3.763,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(9.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 34 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t4">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="50" height="187" viewBox="0 0 50 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom4" transform="translate(-891.5 -482.867)">
                                                                                  <g id="bounds" transform="translate(891.5 419.367)">
                                                                                    <line id="bound" x2="50" transform="translate(0 250)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="50" transform="translate(0 64)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(894.955 543.367)">
                                                                                    <path id="p1" d="M3753.5,530.79s14.358-20.353,4.218-27.9-15.487-17.867-20.1-16.279-21.2,11.713-19.731,21.042,9.5,24,9.5,24,7.639,3.283,13.632,2.737A43.972,43.972,0,0,0,3753.5,530.79Z" transform="translate(-3717.792 -490.451)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(894.579 580.367)">
                                                                                    <path id="rb1" d="M25.821-.628S25.037,69.581,10.1,68.945c-5.5-.234-2.886-8.924-3.943-18.437C4.763,37.988.714,22.982.116,13.564.053,12.569-.1,3.224-.1,3.224a34.089,34.089,0,0,0,12.542.633C18.908,2.944,25.821-.628,25.821-.628Z" transform="translate(10.452 -0.008) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M8.621,10.967C8.338,23.4,5.955,40.654,4.318,47.214S2.4,44.3,2.075,37.2c-.425-9.337-.143-16.405-.982-25.31S-.709,3.272.441,1.375,3.311.5,5.008.165C7.6-.463,8.9-1.469,8.621,10.967Z" transform="translate(18.49 11.675) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(893.5 485.369)">
                                                                                    <path id="shape" d="M-50.252-46.226c3.466-2.459,7.163-3.838,9.035-7.043a20.252,20.252,0,0,0,2.291-11.113,33.157,33.157,0,0,0-2.6-11.438A20.645,20.645,0,0,0-48.707-85.4c-3.326-2.128-7.714-2.68-12.13-2.707-4.388-.028-8.832.442-12.494,2.377a20.8,20.8,0,0,0-8.552,9.092,21.335,21.335,0,0,0-2.4,11.936,24.977,24.977,0,0,0,4.416,10.969c2.212,3.283,3.27,3.2,6.535,5.792,3.243,2.6,8.664,7.911,12.468,7.829S-53.745-43.768-50.252-46.226Z" transform="translate(84.366 88.11)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M-53.821-56.112l-2.986-7.5,2.986-8.5-8.273,2.2-8.273-2.2,2.488,8.5-2.488,7.5,8.273-3.1Z" transform="translate(84.844 88.112)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M-78.111-78.911A40.229,40.229,0,0,0-81.883-73.5a21.335,21.335,0,0,0-2.4,11.936A24.977,24.977,0,0,0-79.871-50.6a13.651,13.651,0,0,0,4.693,4.424l5.288-6.8,2.5-7.565-2.5-8.435Z" transform="translate(84.366 84.973)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M-47.669-47.548c2.008-1.212,4.215-2.561,5.527-4.806A20.252,20.252,0,0,0-39.85-63.467a33.157,33.157,0,0,0-2.6-11.438A23.7,23.7,0,0,0-45-79.759l-9.269,8.615-3,8.412,3,7.542Z" transform="translate(85.291 87.195)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M-50.555-75.132c1.13-.8,2.138-1.4,3.514-2.233l-6.606-7.68-8.273-3.065-8.273,3.065-5.3,6.8c.351.24.993.707,1.856,1.392,3.243,2.6,8.664,7.911,12.468,7.829S-54.048-72.673-50.555-75.132Z" transform="translate(84.669 117.015)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M-44.224-50.874A20.389,20.389,0,0,0-48.912-55.6c-3.326-2.128-7.714-2.68-12.13-2.707-4.388-.028-8.832.442-12.494,2.377a19.161,19.161,0,0,0-4.253,3.157c0-.005-.58.465-.58.465l8.273,10.041,8.273,2.158,8.273-2.158Z" transform="translate(84.571 58.311)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(890.418 485.367)">
                                                                                    <g id="plaque" transform="translate(12.085 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s5.21-4.156,10-1.691c2.073,1.067,4.1,7.231,9.293,7.654S39.218,9.2,39.218,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-2.859 52.686)">
                                                                                      <path id="p1-2" data-name="p1" d="M2.888,45.63c-.888-.3-3.709,1.42-3.592,0s1.389-3.261,3.592-5.159A28.625,28.625,0,0,1,11.11,33.9c1.11-.6,1.274-.889,3.771-2.293a19.964,19.964,0,0,1,3.337-1.335c2.99-.744,9.116,8.725,11.52,9.685,1.246.494,3.958,3.648,6.079,6.836.45.659,2.14-1.13,2.206.427C38.023,47.223,9.716,47.964,2.888,45.63Z" transform="translate(10.056 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(10.85 95.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s5.34,3.18,10.956,6.18c1.63.873,2.353,4.04,4.4,4.04,1.713,0,3.538-3.684,5.45-4.512A122.112,122.112,0,0,0,43.818-8.372" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2" d="M685.748,1669.187a232.222,232.222,0,0,1,5.468-29.577s4.7-8.371,6.711-14.581c1.136-3.51-.192-4.581,0-7.456.21-3.147-3.918-4.7-7.871-8.533-4.777-4.634-10.05-11.222-12.759-11.516-.891-.1-3.38.891-5.314,1.878-2.008,1.02-12.913,9.436-14.486,15.023-.692,2.44,1.706,7.12,3.065,12.763,1.164,4.832,4.1,6.667,6.578,14.692.685,2.217-1.323,3.537-1.524,11.732-.178,7.27,2.164,16.816,2.32,26.014.2,11.78-2.342,22.434-1.491,24.854.677,1.928,2.4,1.478,4.308,0a21.306,21.306,0,0,0,3.065-3.231s2.194-2.773,4.888-9.61C681.785,1683.823,685.514,1671.435,685.748,1669.187Z" transform="translate(-652.982 -1542.261)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M18.514,42.2c-5.155.294-7.714-4.087-11.35-9.279C4.537,29.175.541,25.91.288,21.737c-.162-2.659,1.591-5.7,5.634-10.19,2.342-2.6,2.765-5.34,6.462-7.953,3.5-2.48,10.35-4.711,14.5-4.391A23.751,23.751,0,0,1,41.546,6.825c3.1,3.7,4.225,14.043,4.225,14.043s.014,13.169-9.527,18.1C29.293,42.563,20.67,42.078,18.514,42.2Z" transform="translate(3.821 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.355 81.393)">
                                                                                      <path id="p3" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658s6.156,5.465,12.313,5.465S35.48,3.658,35.48,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(14.582 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(12.989 61.271) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M684.97,1679.565l-.306.3-4.2,15.484-6.625-9.244-9.2,17.751" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(4.313 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a54.62,54.62,0,0,0,8.689,3.3A44.937,44.937,0,0,0,27.5,34.583c10.878,0,22.507-5.186,22.507-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M50.012,13.4S38.382,18.583,27.5,18.583,6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(13.082 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(4.313 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a54.62,54.62,0,0,0,8.689,3.3A44.937,44.937,0,0,0,27.5,34.583c10.878,0,22.507-5.186,22.507-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M50.012,13.4S38.382,18.583,27.5,18.583,6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="sealant" transform="translate(0.36 -50.484)">
                                                                                      <path id="p1-11" data-name="p1" d="M32.659,60.024s-19.653,3.9-18.612,8.571,22.775,6,22.775,10.122-22.775,6.367-22.775,6.367" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-12" data-name="p1" d="M3748.954,524.851s12.531-17.627,3.681-24.16-13.516-15.474-17.54-14.1-18.507,10.144-17.221,18.224,8.293,20.782,8.293,20.782,6.667,2.844,11.9,2.371A38.6,38.6,0,0,0,3748.954,524.851Z" transform="translate(-3714.179 -483.66)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(16.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(12.828 76.954)">
                                                                                      <path id="p1-13" data-name="p1" d="M42.64-22.686c1.449,0-1.132,19.138-1.132,19.138L34.642,16.081l-.891,9.907-8.5-.358-2.038-7.861V11.194S19.824-20.6,21.882-21.333,41.191-22.686,42.64-22.686Z" transform="translate(-16.034 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 51.644)">
                                                                                      <path id="p1-14" data-name="p1" d="M-6.012,48.1l-.565-.935a33.046,33.046,0,0,1,7-8.041,55.8,55.8,0,0,1,12.67-7.881c2.19-.765,9.8,7.881,9.8,7.881l8.689,8.041S7.214,44.8,5.033,45.627C3.2,46.321-6.012,48.1-6.012,48.1Z" transform="translate(-0.922 -28.988)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 88.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0a12.493,12.493,0,0,1,5.392,4.831l3.763,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(9.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(14.027 36.285)">
                                                                                      <path id="p1-16" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 33 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t3">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="46" height="187" viewBox="0 0 46 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom3" transform="translate(-955.5 -466.867)">
                                                                                  <g id="bounds" transform="translate(36)">
                                                                                    <line id="bound" x2="46" transform="translate(919.5 467.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-2" data-name="bound" x2="46" transform="translate(919.5 653.367)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(959.625 523.367)">
                                                                                    <path id="p1" d="M28.877,46.474s5.253-22.382,8.034-26.752S36.294,2.564,26.946.945s-10.352-1.052-12.669.89S-1.018,8.472.064,16.969s9.193,29.5,9.193,29.5A25.737,25.737,0,0,0,17.955,48,53.4,53.4,0,0,0,28.877,46.474Z" transform="translate(0 0)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(968.892 569.367)">
                                                                                    <path id="rb1" d="M19.749,6.469,17.1,47.451s-3.9,27.1-10.008,24.89-2.384-7.293-4.457-25.79S.081,6.583.081,6.583A36.22,36.22,0,0,0,8.959,7.82a50.526,50.526,0,0,0,10.79-1.351Z" transform="translate(-0.081 -6.469)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M8.145,12.412c.022,6.227,1.672,17.149,1.885,23.926.251,7.991-1.1,17.226-2.256,16.464s-.626-9.827-2.4-19.5S2.207,23.31,1.208,13.264-.672,3.515.345,1.408,2.975.493,4.535.162C6.915-.481,8.095-1.58,8.145,12.412Z" transform="translate(6.89 6.135) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(958.49 469.282)">
                                                                                    <path id="shape" d="M949.875,1707.918c-9.477,0-23.606,30.316-18.839,40.421s33.2,10.105,37.908,0S959.351,1707.918,949.875,1707.918Z" transform="translate(-930.076 -1707.918)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1732.236c-3.645,0-7.977,4.484-11.928,11.038-.1.166-.6,1.022-.6,1.022l12.523,11.623,12.214-12.277s-.119-.2-.337-.574C958.239,1737.1,953.67,1732.236,949.874,1732.236Z" transform="translate(-930.076 -1732.236)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1709.588s-.225.4-.475.849c-5.045,9.1-8.6,21.678-5.842,27.515,1.156,2.45,3.7,4.306,7.474,5.753l.434.156,10.89-22.579Z" transform="translate(-930.076 -1697.531)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1744.524s.378-.106.861-.254c3.579-1.076,6.87-3.14,8.218-6.032,2.722-5.841-.907-18.434-6.429-28.277-.091-.162-.428-.75-.428-.75l-12.2,12.339Z" transform="translate(-930.076 -1697.816)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1710.527s.395.155.711.262c5.432,1.876,13.191,2.02,19.748.293l.51-.158-1.268-2.8-18.379-.29Z" transform="translate(-930.076 -1664.207)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1711.958l-9.543,19.754,18.42.29Z" transform="translate(-930.076 -1688.041)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(954.418 469.367)">
                                                                                    <g id="plaque" transform="translate(12.085 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-2.859 52.686)">
                                                                                      <path id="p1-2" data-name="p1" d="M2.545,45.508c-.8-.3-3.273.417-3.168-.992A6.008,6.008,0,0,1,1.6,39.882c.4-.383,1.12-2.011,5.932-4.853,1-.593,3.581-2.039,5.834-3.431.708-.44,1.348-1.205,1.961-1.373,2.7-.738,7.077.788,7.991.637,2.3-.382,4.4,1.645,6.569,2.6,1.478.644,4.115,7.162,4.363,8.481v5.147S8.706,47.823,2.545,45.508Z" transform="translate(10.056 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(10.85 95.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s4.264,3.18,8.748,6.18c1.3.873,1.879,4.04,3.51,4.04,1.368,0,2.825-3.684,4.352-4.512a92,92,0,0,0,9.073-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2" d="M682.628,1669.44c1.486-14.28,1.782-27.56,1.782-27.56s1.947-6.051,4.079-14.692c1.808-7.328,4.162-7.877,4.652-15.231s-5.193-11.951-6.118-12.555c-2.485-1.627-6.926-1.59-11.662-2.1-.891-.1-1.444,1.116-3.378,2.1-2.008,1.02-11.937,5.374-13.511,10.961-.692,2.44.234,5.765,1.593,11.407,1.164,4.832,4.594,12.084,7.074,20.109,2.2,7.1,1.925,56.418,4.079,62.547,1.355,3.855,5.164,2.911,6.819-4.015C680.178,1691.459,682.205,1673.505,682.628,1669.44Z" transform="translate(-652.982 -1542.261)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M12.377,37.5C3.038,38.031.649,30.182.083,20.868S1.742,1.845,9.661.148s39.705,11.565,35.674,20.3c-1.491,3.236-5.727,6.862-12.557,10.521C26.4,34.392,17.32,37.217,12.377,37.5Z" transform="translate(3.821 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.355 81.393)">
                                                                                      <path id="p3" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(17.582 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(13.955 56.618) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M685.073,1679.565l-4.532,16.213-6.659-9.493-9.247,18.229" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(5.686 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a44.276,44.276,0,0,0,7.584,3.3,34.668,34.668,0,0,0,10.75,1.889c9.495,0,19.645-5.186,19.645-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M44.478,13.4s-10.15,5.186-19.645,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(16.082 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(5.686 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a44.276,44.276,0,0,0,7.584,3.3,34.668,34.668,0,0,0,10.75,1.889c9.495,0,19.645-5.186,19.645-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M44.478,13.4s-10.15,5.186-19.645,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-11" data-name="p1" d="M24.713,39.772s4.5-19.154,6.875-22.894S31.06,2.194,23.06.809s-8.859-.9-10.842.762S-.871,7.25.055,14.522s7.867,25.25,7.867,25.25a22.025,22.025,0,0,0,7.444,1.306A45.7,45.7,0,0,0,24.713,39.772Z" transform="translate(4.485 3.442)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(16.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(12.828 76.954)">
                                                                                      <path id="p1-12" data-name="p1" d="M40.332-22.686c1.293,0-1.01,19.138-1.01,19.138L33.2,16.081l-.8,9.907-7.588-.358-1.819-7.861V11.194S19.974-20.6,21.81-21.333,39.039-22.686,40.332-22.686Z" transform="translate(-16.768 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 51.644)">
                                                                                      <path id="p1-13" data-name="p1" d="M-6.227,53.67l-.484-1.246a12.6,12.6,0,0,1-.65-6.345c.579-3.437.795-2.829,3.435-5.786,1.655-1.854,6.736-4.846,10.6-6.939,1.877-1.021,2.515-2.1,4.148-1.961,6.8.586,8.315-.179,13.047,2.866s6.041,9.518,6.041,9.518-4.415,3.042-9.119,2.6c-2.255-.213-4.162-3.6-8.549-2.6s-7.129,5.491-9,6.6C1.672,51.3-6.227,53.67-6.227,53.67Z" transform="translate(-0.226 -28.988)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 90.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0a12.493,12.493,0,0,1,5.392,4.831l3.763,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-14" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(13.027 36.285)">
                                                                                      <path id="p1-15" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(9.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 32 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t2">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="43" height="187" viewBox="0 0 43 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom2" transform="translate(-1025.5 -480.867)">
                                                                                  <g id="bounds" transform="translate(1025.5 412.367)">
                                                                                    <line id="bound-bottom" x2="43" transform="translate(0 255)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="bound-top" x2="43" transform="translate(0 69)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(1030.5 533.705)">
                                                                                    <path id="p1" d="M6.4,50.169c-.48-3.135-4.165-31.5-5.523-34.442S-.166,3.567,3.909,3.662,20.933,6.227,27,5.088s7.274,11.4,6.155,16.529-9.26,25.607-9.1,28.552S6.875,53.3,6.4,50.169Z" transform="translate(-0.001 0.001)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(1036.885 582.467)">
                                                                                    <path id="rb1" d="M14.808,18.514s-.538,18.244-2.7,37.5c-2,17.786-2.474,17.889-4.145,23.7-1.45,5.051-7.5,13.994-8.84,8.565-2.216-8.989-.658-5-.658-30.757,0-21.561-1.32-39.013-1.32-39.013s.7,2.743,8.663,2.616S14.808,18.514,14.808,18.514Z" transform="translate(2.857 -18.51)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M7.724,15.033C7.972,22.4,6.856,31.486,7.3,39.514c.516,9.463-.742,19.226-1.8,18.284s-2.322-18.91-2.322-18.91-.326-11.182-1.583-23.1S-.44,4.183.39,1.729,2.694.742,4.069.407C6.157-.266,7.166-1.523,7.724,15.033Z" transform="translate(6.539 5.402) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(1027.49 483.282)">
                                                                                    <path id="shape" d="M949.875,1707.918c-9.477,0-23.606,30.316-18.839,40.421s33.2,10.105,37.908,0S959.351,1707.918,949.875,1707.918Z" transform="translate(-930.076 -1707.918)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1732.236c-3.645,0-7.977,4.484-11.928,11.038-.1.166-.6,1.022-.6,1.022l12.523,11.623,12.214-12.277s-.119-.2-.337-.574C958.239,1737.1,953.67,1732.236,949.874,1732.236Z" transform="translate(-930.076 -1732.236)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1709.588s-.225.4-.475.849c-5.045,9.1-8.6,21.678-5.842,27.515,1.156,2.45,3.7,4.306,7.474,5.753l.434.156,10.89-22.579Z" transform="translate(-930.076 -1697.531)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1744.524s.378-.106.861-.254c3.579-1.076,6.87-3.14,8.218-6.032,2.722-5.841-.907-18.434-6.429-28.277-.091-.162-.428-.75-.428-.75l-12.2,12.339Z" transform="translate(-930.076 -1697.816)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1710.527s.395.155.711.262c5.432,1.876,13.191,2.02,19.748.293l.51-.158-1.268-2.8-18.379-.29Z" transform="translate(-930.076 -1664.207)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1711.958l-9.543,19.754,18.42.29Z" transform="translate(-930.076 -1688.041)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(1022.418 483.367)">
                                                                                    <g id="plaque" transform="translate(12.085 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s4.151-4.156,7.969-1.691c1.652,1.067,3.263,7.231,7.4,7.654S32.959,9.2,32.959,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(-2.859 52.686)">
                                                                                      <path id="p1-2" data-name="p1" d="M1.987,40.392c-.68-.2-2.778.28-2.688-.667s-1.283-5.372.4-6.637c.7-.522-.291-3.079,2.284-3.164,2.121-.071,9.658,1.707,12.649,1.471,1.9-.15,3.067.955,5.506.637,1.954-.257,4-.64,5.845,0,1.254.433.728.579,1.848,1.32.9.6,1.411,3.379,1.622,4.265l.6,3.771S7.215,41.947,1.987,40.392Z" transform="translate(13.401 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(10.85 95.642)">
                                                                                      <path id="p1-3" data-name="p1" d="M11.654-8.372s4.264,3.18,8.748,6.18c1.3.873,1.879,4.04,3.51,4.04,1.368,0,2.825-3.684,4.352-4.512a92,92,0,0,0,9.073-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2" d="M662.137,1600.456c-2.174,3.374.2,8.964,1.422,15,1.649,8.166,3.246,17.984,3.325,24.171.024,1.863,1.841,10.983,1.459,21.668-.675,18.888-.093,49.75,1.049,50.44.624.377,4.368-5.413,6.152-8.138.759-1.157,3.268-17.545,4.927-33.482,1.486-14.28,2.157-28.237,2.157-28.237a116.515,116.515,0,0,0,4.02-13.432c1.808-7.328,4.706-9.265,5.2-16.619s-2.311-12.193-3.235-12.8c-2.485-1.627-7.226.513-11.961,0-3.925-.428-10.364-2.32-13.873-1.224C661.821,1598.1,663.064,1599.018,662.137,1600.456Z" transform="translate(-652.982 -1542.261)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-4" data-name="p1" d="M12.377,37.5C3.038,38.031.649,30.182.083,20.868S1.742,1.845,9.661.148s39.705,11.565,35.674,20.3c-1.491,3.236-5.727,6.862-12.557,10.521C26.4,34.392,17.32,37.217,12.377,37.5Z" transform="translate(4.821 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.355 81.393)">
                                                                                      <path id="p3" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-2" data-name="p2" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M10.855,3.658s4.351,5.465,8.7,5.465,8.7-5.465,8.7-5.465" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(13.582 169.858)">
                                                                                      <path id="p1-6" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(15.955 56.618) rotate(-3)">
                                                                                      <path id="p1-7" data-name="p1" d="M685.073,1679.565l-4.532,16.213-6.659-9.493-9.247,18.229" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(6.686 105.672)">
                                                                                      <path id="p2-3" data-name="p2" d="M6.5,29.4a42.83,42.83,0,0,0,7.415,3.3,33.226,33.226,0,0,0,10.511,1.889c9.284,0,19.209-5.186,19.209-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-8" data-name="p1" d="M43.636,13.4s-9.925,5.186-19.209,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(12.082 168.116)">
                                                                                      <path id="p1-9" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(6.686 67.858)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a42.83,42.83,0,0,0,7.415,3.3,33.226,33.226,0,0,0,10.511,1.889c9.284,0,19.209-5.186,19.209-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-10" data-name="p1" d="M43.636,13.4s-9.925,5.186-19.209,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-11" data-name="p1" d="M5.4,43.414C5,40.734,1.9,16.491.758,13.975S-.116,3.581,3.309,3.662,17.619,5.854,22.719,4.88s6.114,9.744,5.174,14.128-7.783,21.888-7.649,24.4S5.8,46.094,5.4,43.414Z" transform="translate(7.581 -0.246)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-5" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(16.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(12.828 76.954)">
                                                                                      <path id="p1-12" data-name="p1" d="M38.378-22.686c1.161,0-.907,19.138-.907,19.138l-5.5,19.629-.714,9.907-6.813-.358-1.633-7.861V11.194S20.1-20.6,21.75-21.333,37.218-22.686,38.378-22.686Z" transform="translate(-16.768 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 53.644)">
                                                                                      <path id="p1-13" data-name="p1" d="M-2.628,52.305l-.249-1.717s-.193-.955-.658-2.6a19.423,19.423,0,0,1-1-6.432c.332-3.781,2.062-5.873,2.99-6.092,1.571-.383,3.162.178,4.864.312,2.212.169,7.447.672,11.826,1.049,6.8.586,8.278-.424,9.416.245s1.464.815,3.012,4.284,1.286,9.231,1.286,9.231a26.955,26.955,0,0,1-6.941,0c-2.255-.213-4.162-3.6-8.549-2.6s-7.129,5.491-9,6.6C2.8,55.515-2.628,52.305-2.628,52.305Z" transform="translate(-0.226 -34.988)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 90.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0a12.493,12.493,0,0,1,5.392,4.831l3.763,7.77Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-6" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-14" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(6.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(11.027 36.285)">
                                                                                      <path id="p1-15" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <section _ngcontent-gep-c159="">
                                                                          <div _ngcontent-gep-c159="" class="tooth__number"> 31 </div>
                                                                          <div _ngcontent-gep-c159="" class="diagnoses">
                                                                            <!---->
                                                                          </div>
                                                                          <!---->
                                                                          <!---->
                                                                          <app-tooth _ngcontent-gep-c159="" class="dental-chart__tooth t1">
                                                                            <section>
                                                                              <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" width="49" height="187" viewBox="0 0 49 187">
                                                                                <defs>
                                                                                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                                                                                    <stop offset="0"></stop>
                                                                                    <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                                                                  </linearGradient>
                                                                                </defs>
                                                                                <g id="bottom1" transform="translate(-1082.5 -506.867)">
                                                                                  <g id="bounds" transform="translate(1085.5 478.367)">
                                                                                    <line id="p2" x2="49" transform="translate(-3 29)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                    <line id="p1" x2="49" transform="translate(-3 215)" fill="none" stroke="#707070" stroke-width="1"></line>
                                                                                  </g>
                                                                                  <g id="crown" transform="translate(1094.528 560.095)">
                                                                                    <path id="p1-2" data-name="p1" d="M4685.586,477.143s4.227-9.561,5.7-15.613c1.692-6.939,1.931-13.355,2.789-18.852,1.593-10.256-5.732-10.085-5.732-10.085s-10.715-4.236-17.153-.847-7.479,5.2-8.6,14.4,2.209,29.951,2.209,29.951a18.518,18.518,0,0,0,9.26,3.316C4679.257,479.671,4685.586,477.143,4685.586,477.143Z" transform="translate(-4662.823 -428.159)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="root" transform="translate(1092.497 606.213)">
                                                                                    <path id="rb1" d="M21-.147,16.62,37.435s-.112.107-.529,9.308c-.435,9.623-3.913,20.15-8.251,20.831C-.618,68.9,5.448,57.44,3.936,36.357S0,0,0,0A15.454,15.454,0,0,0,9.125,3.11C14.374,3.074,21-.147,21-.147Z" transform="translate(3.944 0.537) rotate(4.012)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="r1" d="M7.062,13.192a204.534,204.534,0,0,1-.9,24.036C5.162,45.306,3,53.266,2.114,52.092s.87-10.134.505-19.559S-.808,3.573.029,1.369,2.292.463,3.64.149C5.689-.475,6.689-1.609,7.062,13.192Z" transform="translate(10.589 11.271) rotate(7)" fill="#f2ecbe" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="surface" transform="translate(1090.49 509.282)">
                                                                                    <path id="shape" d="M949.875,1707.918c-9.477,0-23.606,30.316-18.839,40.421s33.2,10.105,37.908,0S959.351,1707.918,949.875,1707.918Z" transform="translate(-930.076 -1707.918)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="l" d="M949.874,1732.236c-3.645,0-7.977,4.484-11.928,11.038-.1.166-.6,1.022-.6,1.022l12.523,11.623,12.214-12.277s-.119-.2-.337-.574C958.239,1737.1,953.67,1732.236,949.874,1732.236Z" transform="translate(-930.076 -1732.236)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="m" d="M937.352,1709.588s-.225.4-.475.849c-5.045,9.1-8.6,21.678-5.842,27.515,1.156,2.45,3.7,4.306,7.474,5.753l.434.156,10.89-22.579Z" transform="translate(-930.076 -1697.531)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="d" d="M959.864,1744.524s.378-.106.861-.254c3.579-1.076,6.87-3.14,8.218-6.032,2.722-5.841-.907-18.434-6.429-28.277-.091-.162-.428-.75-.428-.75l-12.2,12.339Z" transform="translate(-930.076 -1697.816)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="b" d="M938.938,1710.527s.395.155.711.262c5.432,1.876,13.191,2.02,19.748.293l.51-.158-1.268-2.8-18.379-.29Z" transform="translate(-930.076 -1664.207)" fill="#f5f5f5" stroke="#707070" stroke-width="0.5"></path>
                                                                                    <path id="o" d="M949.811,1711.958l-9.543,19.754,18.42.29Z" transform="translate(-930.076 -1688.041)" fill="#eaeaea" stroke="#707070" stroke-width="0.5"></path>
                                                                                  </g>
                                                                                  <g id="codes" transform="translate(1082.418 509.367)">
                                                                                    <g id="plaque" transform="translate(11.595 86.403)">
                                                                                      <path id="Path_2" data-name="Path 2" d="M8.424,9.2s4.539-4.156,8.715-1.691c1.806,1.067,3.568,7.231,8.1,7.654S35.254,9.2,35.254,9.2" transform="translate(-8.424 1.123)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_3" data-name="Path 3" d="M8.424,9.2s4.539-4.156,8.715-1.691c1.806,1.067,3.568,7.231,8.1,7.654S35.254,9.2,35.254,9.2" transform="translate(-8.424 -2.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="Path_4" data-name="Path 4" d="M8.424,9.2s4.539-4.156,8.715-1.691c1.806,1.067,3.568,7.231,8.1,7.654S35.254,9.2,35.254,9.2" transform="translate(-8.424 -6.73)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="attrition" transform="translate(1.141 51.686)">
                                                                                      <path id="p1-3" data-name="p1" d="M1.987,40.392c-.68-.2-2.778.28-2.688-.667s1-4.128,2.688-5.393c1.444-1.083,3.832-3.766,9.605-4.223,3.92-.31,6.839.683,10.408,1.923,1.254.433,2.614.315,3.733,1.056.9.6,2.09,3.451,2.3,4.337a8.047,8.047,0,0,1-.387,2.967S7.215,41.947,1.987,40.392Z" transform="translate(13.401 -27.508)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abrasion" transform="translate(12.85 95.642)">
                                                                                      <path id="p1-4" data-name="p1" d="M11.654-8.372s4.264,3.18,8.748,6.18c1.3.873,1.879,4.04,3.51,4.04,1.368,0,2.825-3.684,4.352-4.512a92,92,0,0,0,9.073-5.707" transform="translate(-11.654 8.372)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="impacted" transform="translate(1.331 0)">
                                                                                      <path id="p2-2" data-name="p2" d="M666.884,1602.665c-5.356,8.31-.134,26.546,0,36.963.024,1.863,1.841,10.983,1.459,21.668-.675,18.888-3.628,43.666-2.485,44.356a4.016,4.016,0,0,0,5.226-1.53,35.049,35.049,0,0,0,4.461-9.751c.889-3.2,1.142-7.223,1.657-9.687,3.832-18.343,8.412-44.1,8.412-44.1a112.058,112.058,0,0,0,5.672-16.57,121.734,121.734,0,0,0,2.641-19.82c.021-1.255-.469-3.432-2-4.27-.386-.212-2.389-.289-3.314-.892C682.909,1595.3,672.8,1593.491,666.884,1602.665Z" transform="translate(-652.982 -1542.261)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-5" data-name="p1" d="M12.377,37.5C3.038,38.031.649,30.182.083,20.868S1.742,1.845,9.661.148s39.705,11.565,35.674,20.3c-1.491,3.236-5.727,6.862-12.557,10.521C26.4,34.392,17.32,37.217,12.377,37.5Z" transform="translate(7.821 46.686) rotate(-90)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" stroke-dasharray="1 1" fill-rule="evenodd"></path>
                                                                                    </g>
                                                                                    <g id="erosion" transform="translate(15.355 81.393)">
                                                                                      <path id="p3" d="M10.855,3.658S16.177,9.123,21.5,9.123,32.141,3.658,32.141,3.658" transform="translate(-10.855 -3.658)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p2-3" data-name="p2" d="M10.855,3.658S16.177,9.123,21.5,9.123,32.141,3.658,32.141,3.658" transform="translate(-10.855 1.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                      <path id="p1-6" data-name="p1" d="M10.855,3.658S16.177,9.123,21.5,9.123,32.141,3.658,32.141,3.658" transform="translate(-10.855 6.342)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="abscess" transform="translate(16.582 169.858)">
                                                                                      <path id="p1-7" data-name="p1" d="M22.5-61.417a6.083,6.083,0,0,1,0-8,6.083,6.083,0,0,1,8,0,6.083,6.083,0,0,1,0,8A6.083,6.083,0,0,1,22.5-61.417Z" transform="translate(-21 70.917)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="fracture" transform="translate(17.108 54.682)">
                                                                                      <path id="p1-8" data-name="p1" d="M684.624,1679.565l-4.433,19.243-6.513-11.267-9.044,21.636" transform="translate(-664.635 -1679.565)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginrecession" transform="translate(3.472 105.672)">
                                                                                      <path id="p2-4" data-name="p2" d="M6.5,29.4a55.755,55.755,0,0,0,8.8,3.3,46.061,46.061,0,0,0,12.476,1.889c11.019,0,22.8-5.186,22.8-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-9" data-name="p1" d="M50.575,13.4s-11.78,5.186-22.8,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="mobility" transform="translate(15.082 168.116)">
                                                                                      <path id="p1-10" data-name="p1" d="M6.8,0,0,11.742H13.6Z" fill="#fff" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="ginlarge" transform="translate(3.472 67.858)">
                                                                                      <path id="p2-5" data-name="p2" d="M6.5,29.4a55.755,55.755,0,0,0,8.8,3.3,46.061,46.061,0,0,0,12.476,1.889c11.019,0,22.8-5.186,22.8-5.186v-16H6.5Z" transform="translate(-6.5 -13.397)" fill="url(#linear-gradient)"></path>
                                                                                      <path id="p1-11" data-name="p1" d="M50.575,13.4s-11.78,5.186-22.8,5.186S6.5,13.4,6.5,13.4" transform="translate(-6.5 -10.583)" fill="none" stroke="#000" stroke-width="2" stroke-dasharray="1 1"></path>
                                                                                    </g>
                                                                                    <g id="cleaning" transform="translate(3.306 53.836)">
                                                                                      <path id="p1-12" data-name="p1" d="M4681.881,469.687a103.751,103.751,0,0,0,4.794-13.121c1.422-5.832,1.623-11.224,2.344-15.843,1.338-8.619-4.817-8.476-4.817-8.476s-9.005-3.56-14.416-.712-6.286,4.373-7.227,12.1,1.856,25.171,1.856,25.171a15.566,15.566,0,0,0,7.783,2.787C4676.561,471.812,4681.881,469.687,4681.881,469.687Z" transform="translate(-4651.522 -427.439)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="whitening" transform="translate(3.306 53.836)">
                                                                                      <path id="p2-6" data-name="p2" d="M5.665,9.588,7.053,3.979,11.331,0,5.665,1.63,0,0,4.277,3.979Z" transform="translate(18.06 18.746)"></path>
                                                                                    </g>
                                                                                    <g id="postcore" transform="translate(12.828 76.954)">
                                                                                      <path id="p1-13" data-name="p1" d="M40.987-22.686c1.332,0-1.041,19.138-1.041,19.138l-5.811,20.7-3.458,8.889-7.052-.6-1.874-7.861L21,11.645s-.991-32.242.9-32.978S39.655-22.686,40.987-22.686Z" transform="translate(-16.768 14.529)"></path>
                                                                                    </g>
                                                                                    <g id="onlay" transform="translate(12.958 53.644)">
                                                                                      <path id="p1-14" data-name="p1" d="M-2.876,52.57a29.263,29.263,0,0,1,.9-7.165c.971-2.822,1.233-4.554,4.7-7.049a15.518,15.518,0,0,1,9.166-2.93,32.26,32.26,0,0,1,11.139,2.117c1.15.543,3.673.3,5.221,3.771s0,9.274,0,9.274-1.629.444-6.333,0c-2.255-.213-4.162-3.6-8.549-2.6s-7.129,5.491-9,6.6C2.8,55.515-2.876,52.57-2.876,52.57Z" transform="translate(1.774 -35.988)" fill="none" stroke="#000" stroke-width="0.5"></path>
                                                                                    </g>
                                                                                    <g id="denture" transform="translate(14.765 73.16) rotate(-48)">
                                                                                      <path id="p2-7" data-name="p2" d="M13.5,8.2H12.378a.573.573,0,0,1-.559-.559V5.034c0-.336-.373-.559-.6-.3h0A8.2,8.2,0,0,1,4.249,7.421,7.169,7.169,0,0,1,1.489,6.6,7.23,7.23,0,0,1,.221,5.817.6.6,0,0,1,.147,4.96L.93,4.176A.564.564,0,0,1,1.638,4.1a9.019,9.019,0,0,0,1.454.783c.224.075.485.149.746.224A6.159,6.159,0,0,0,9.693,3.1c.447-.522.112-.858-.261-.858H6.822a.608.608,0,0,1-.6-.559V.559A.608.608,0,0,1,6.822,0h6.787a.462.462,0,0,1,.447.485v7.16A.573.573,0,0,1,13.5,8.2Z" transform="translate(3.843 9.695)"></path>
                                                                                      <path id="p1-15" data-name="p1" d="M13.946,4.7a.541.541,0,0,1-.783,0A5.969,5.969,0,0,0,11,3.319c-.224-.075-.485-.149-.746-.224A6.159,6.159,0,0,0,4.4,5.109c-.447.522-.112.858.261.858h2.61a.573.573,0,0,1,.559.559V7.644a.573.573,0,0,1-.559.559H.485A.494.494,0,0,1,0,7.719V.559A.573.573,0,0,1,.559,0H1.678a.573.573,0,0,1,.559.559V3.17c0,.336.373.559.6.3h0A8.158,8.158,0,0,1,9.807.783a7.169,7.169,0,0,1,2.759.82,8.152,8.152,0,0,1,2.126,1.529.54.54,0,0,1,0,.783Z" transform="translate(0 0)"></path>
                                                                                    </g>
                                                                                    <g id="implant" transform="translate(13.712 90.474)">
                                                                                      <path id="p5" d="M806.154,402.363l.335-11.122s3.419-5.9,7.245-7.894,2.462-1.957,6.384,0,8.083,7.242,8.083,7.242l1.073,5.358Z" transform="translate(-806.154 -381.864)"></path>
                                                                                      <path id="p4" d="M808.3,378.856l-1.431-7.545,21.288-6.08-1.211,8.133Z" transform="translate(-806.154 -344.948)"></path>
                                                                                      <path id="p3-2" data-name="p3" d="M809.942,361.576l-1.113-7.542,17.16-5.259-.936,8.15Z" transform="translate(-806.154 -314.657)"></path>
                                                                                      <path id="p2-8" data-name="p2" d="M811.73,344.1l-.751-7.445,12.9-4.168-1.032,7.839Z" transform="translate(-806.154 -284.34)"></path>
                                                                                      <path id="p1-16" data-name="p1" d="M824.55,307.556l-11.8,3.324s.374,14.042,6.112,13.322S824.55,307.556,824.55,307.556Z" transform="translate(-807.511 -244.993)"></path>
                                                                                    </g>
                                                                                    <g id="sinuslift" transform="translate(8.364 124.454)">
                                                                                      <path id="Path_5" data-name="Path 5" d="M2.855-57.877H34.278" transform="translate(-2.855 106.281)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_6" data-name="Path 6" d="M2.855-57.877H34.278" transform="translate(-0.55 101.671)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_7" data-name="Path 7" d="M2.855-57.877H34.278" transform="translate(-2.855 97.062)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_8" data-name="Path 8" d="M2.855-57.877H34.278" transform="translate(-0.55 93.604)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_9" data-name="Path 9" d="M2.855-57.877H34.278" transform="translate(-2.855 87.842)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_10" data-name="Path 10" d="M2.855-57.877H34.278" transform="translate(-0.55 83.232)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_11" data-name="Path 11" d="M2.855-57.877H34.278" transform="translate(-2.855 78.622)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_12" data-name="Path 12" d="M2.855-57.877H34.278" transform="translate(-0.55 75.164)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_13" data-name="Path 13" d="M2.855-57.877H34.278" transform="translate(-2.855 70.554)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_14" data-name="Path 14" d="M2.855-57.877H34.278" transform="translate(-0.55 65.944)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_15" data-name="Path 15" d="M2.855-57.877H34.278" transform="translate(-2.855 61.334)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                      <path id="Path_16" data-name="Path 16" d="M2.855-57.877H34.278" transform="translate(-0.55 57.877)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7"></path>
                                                                                    </g>
                                                                                    <g id="resection" transform="translate(6.711 130.535)">
                                                                                      <path id="Path_17" data-name="Path 17" d="M6.5-25.847l29.355-19.57" transform="translate(-6.5 45.417)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></path>
                                                                                    </g>
                                                                                    <g id="denture-2" data-name="denture" transform="translate(14.027 36.285)">
                                                                                      <path id="p1-17" data-name="p1" d="M13.635,1.491a1,1,0,0,1,1.73,0L28.129,23.5a1,1,0,0,1-.865,1.5H19.5L15.221,51.945H12.275L8.416,25H1.736a1,1,0,0,1-.865-1.5Z" transform="translate(-0.735 -0.993)"></path>
                                                                                    </g>
                                                                                  </g>
                                                                                </g>
                                                                              </svg>
                                                                            </section>
                                                                          </app-tooth>
                                                                          <!---->
                                                                        </section>
                                                                        <!---->
                                                                        <!---->
                                                                        <!---->
                                                                      </section>
                                                                      <!---->
                                                                    </div>
                                                                    <!---->
                                                                  </div>
                                                                  <svg _ngcontent-gep-c159="" xmlns="http://www.w3.org/2000/svg" version="1.1" height="5" width="5">
                                                                    <defs _ngcontent-gep-c159="">
                                                                      <linearGradient _ngcontent-gep-c159="" id="linearGradientPlanned" gradientTransform="rotate(90)">
                                                                        <stop _ngcontent-gep-c159="" offset="5%" stop-color="#ff7575"></stop>
                                                                        <stop _ngcontent-gep-c159="" offset="95%" stop-color="#fff" stop-opacity="0"></stop>
                                                                      </linearGradient>
                                                                      <pattern _ngcontent-gep-c159="" id="diagExisting" width="10" height="10" patternTransform="rotate(100 0 0)" patternUnits="userSpaceOnUse">
                                                                        <line _ngcontent-gep-c159="" x1="0" y1="0" x2="0" y2="10" style="stroke: #0cd1e8; stroke-width: 6px;"></line>
                                                                      </pattern>
                                                                      <pattern _ngcontent-gep-c159="" id="diagPlanned" width="10" height="10" patternTransform="rotate(100 0 0)" patternUnits="userSpaceOnUse">
                                                                        <line _ngcontent-gep-c159="" x1="0" y1="0" x2="0" y2="10" style="stroke: #de2e57; stroke-width: 6px;"></line>
                                                                      </pattern>
                                                                      <pattern _ngcontent-gep-c159="" id="diagConfirmed" width="10" height="10" patternTransform="rotate(100 0 0)" patternUnits="userSpaceOnUse">
                                                                        <line _ngcontent-gep-c159="" x1="0" y1="0" x2="0" y2="10" style="stroke: #18b83d; stroke-width: 6px;"></line>
                                                                      </pattern>
                                                                      <pattern _ngcontent-gep-c159="" id="circles" x="5" y="5" width="5" height="5" patternUnits="userSpaceOnUse">
                                                                        <circle _ngcontent-gep-c159="" cx="2" cy="2" r="2" style="stroke: none; fill: #222428;"></circle>
                                                                      </pattern>
                                                                    </defs>
                                                                  </svg>
                                                                </app-chart-resto>
                                                                <!---->
                                                                <!---->
                                                              </app-dental-chart-new>
                                                              <?php $this->load->view('Dental/_adult18Modal.php');?>
                                                              <script src="<?php echo base_url() ?>assets/js/dental.js"></script>