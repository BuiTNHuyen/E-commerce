<style>
    #chat-container {
        border-radius: 50%;
        height: 50px;
        width: 50px;
        position: fixed;
        right: 20px;
        top: 0;
        background: #fff;
        z-index: 999;
        display: none;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 0 16px #0000004a;
    }

    .chat-container i {
        font-size: 24px;
    }

    #chat-admin-components {
        position: fixed;
        right: 40px;
        top: 0;
        display: none;
        z-index: 9999;
    }

    /*@import url(//db.onlinewebfonts.com/c/0c5e6f133b0b25edfed47aca4ab57676?family=Segoe+UI+Historic);*/

    :root {
        --primary-color: #0072bc;
        --white-color: #fff;
        --message-right-color: #dbf4fb;
        --message-left-color: #e4e6eb;
        --message-text-color: #001A33;
        --black-500: rgba(0, 0, 0, 0.5);
        --icon-option-color: #72808e;
        --offline-color: #b5b5be;
        --subtitle-color: #65676b;
        --dark-grey-color: #292932;
        --online-color: #79d861;
        --works-color: #ff5050;
        --text-color: #333;
        --title-color: #050505;
        /*--blue-color: #2aa1f0;*/
        --input-color: #f0f2f5;
        --icon-color: rgb(188 192 196);

        --nav-height: 56px;
        --chat-form-height: 450px;
        --chat-header-height: 48px;
        --chat-footer-height: 50px;
        --chat-form-width: 300px;
        --chat-header-box-width: 90px;
    }

    #body-modal-translate {
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
    }

    #message-boxchat img {
        opacity: 1 !important;
    }

    #message-boxchat .w-80 {
        width: 80% !important;
    }

    #message-boxchat .icon-font-size-22 {
        font-size: 22px !important;
    }

    #message-boxchat .m-l-10 {
        margin-left: 10px !important;
    }

    #message-boxchat .m-r-10 {
        margin-right: 10px !important;
    }

    #message-boxchat .online-status {
        background-color: var(--online-color) !important;
    }

    #message-boxchat .works-status {
        background-color: var(--works-color) !important;
    }

    #message-boxchat .offline-status {
        background-color: var(--offline-color) !important;
    }

    /* Chat body */


    .force-overflow {
        min-height: 10px;
    }

    #chat-body-modal::-webkit-scrollbar-track {
        background: transparent;
    }

    #chat-body-modal::-webkit-scrollbar {
        max-width: 6px;
        overflow: hidden;
        background: transparent;
    }

    #chat-body-modal::-webkit-scrollbar-thumb {
        display: none;
        max-width: 5px;
        background-color: var(--input-color);
    }

    #message-boxchat .chat-body:hover::-webkit-scrollbar-thumb {
        display: block;
    }

    /* No message */
    #message-boxchat .chat-body-no-message {
        height: 170px;
        width: 100%;
        padding: 30px 12px 12px;
        text-align: center;
        color: var(--subtitle-color);
        font-weight: 400;
        font-size: 12px;
        margin-bottom: 20px;
    }

    #message-boxchat .chat-body-no-message-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
    }

    #message-boxchat .chat-body-no-message-text {
        padding: 8px;
    }

    /* Has message chat */
    #message-boxchat .chat-body-message {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column-reverse;
    }

    /* khung chat của 1 người */
    #message-boxchat .chat-body-message-element {
        display: flex;
        width: 100%;
        height: auto;
        margin-top: 0;
        margin-bottom: 24px;
        flex-wrap: nowrap;
        align-items: baseline;
        flex-direction: column;
        position: relative;
    }

    #message-boxchat .chat-body-message-item-max-width {
        display: flex;
        width: 100%;
        height: auto;
    }

    #message-boxchat .message-right .chat-body-message-item-max-width {
        flex-direction: row-reverse;
        align-items: flex-end;
    }

    #message-boxchat .message-left .chat-body-message-item-max-width {
        align-items: flex-start;
        flex-direction: row;
    }

    #message-boxchat .chat-body-message-element-name {
        position: absolute;
        bottom: 100%;
        left: 52px;
    }

    #message-boxchat .chat-body-message-element-name .chat-body-message-element-name-text {
        font-size: 12px !important;
        color: #394e60;
    }

    /* item trong khung */
    #message-boxchat .chat-body-message-element.restaurant-owners .chat-body-message-item {
        border: 1px solid #0072bc;
    }


    #message-boxchat .message-right .chat-body-message-item {
        margin-right: 20px;
        border-top-right-radius: 4px;
        animation: slideRight 0.4s cubic-bezier(.4, 0, .2, 1);
        background-color: var(--message-right-color);
        color: var(--message-text-color);
    }

    #message-boxchat .message-left .chat-body-message-item {
        margin-left: 20px;
        border-top-left-radius: 4px;
        animation: slideLeft 0.4s cubic-bezier(.4, 0, .2, 1);
        background-color: var(--message-left-color);
        color: var(--message-text-color);
    }

    #message-boxchat .chat-footer-message-item {
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 0px;
    }

    #message-boxchat .message-right .chat-footer-message-item {
        flex-direction: row-reverse;
    }

    /* Time */
    #message-boxchat .chat-footer-message-item-time {
        color: var(--black-500);
        font-size: 13px;
        font-weight: 400;
    }

    #message-boxchat .message-right .chat-footer-message-item-time {
        float: right;
        padding-right: 8px;
        padding-bottom: 4px;
        position: relative;
        left: 16px;
    }

    #message-boxchat .message-left .chat-footer-message-item-time {
        float: left;
        padding-left: 8px;
        padding-bottom: 4px;
    }

    #message-boxchat .time-message-ago {
        display: block;
        width: 7em;
        position: relative;
        bottom: 2px;
    }

    /* Option of message */
    #message-boxchat .chat-body-message-item-action-list {
        list-style: none;
        align-items: center;
        width: 72px;
        position: absolute;
        bottom: 0;
        right: calc(100% + 8px);
        display: flex;
        cursor: pointer;
    }

    #message-boxchat .message-right .chat-body-message-item-action-list {
        right: calc(100% + 8px);
    }

    #message-boxchat .message-left .chat-body-message-item-action-list {
        left: calc(100% + 8px);
    }

    #message-boxchat .chat-body-message-item-action-list::before {
        content: "";
        width: 20px;
        height: 40px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: -20px;
    }

    #message-boxchat .chat-body-message-item-action-list .chat-body-message-item-action-item {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        text-align: center;
    }

    #message-boxchat .chat-body-message-item-action-list .chat-body-message-item-action-item:hover {
        background-color: var(--input-color);
    }

    #message-boxchat .chat-body-message-item-action-icon {
        color: var(--icon-option-color);
        font-size: 16px;
        line-height: 24px !important;
    }

    /* reaction of message */
    #message-boxchat .chat-body-message-item-reactions {
        width: 24px;
        height: 24px;
        text-align: center;
        position: absolute;
        bottom: -12px;
        cursor: pointer;
        z-index: 9;
    }

    #message-boxchat .message-right .chat-body-message-item-reactions {
        left: 10px;
    }

    #message-boxchat .message-left .chat-body-message-item-reactions {
        right: 10px;
    }

    #message-boxchat .chat-body-message-item-reactions-group {
        border: 1px solid rgba(0, 0, 0, 0.1);
        background-color: var(--white-color);
        border-radius: 50%;
        width: 100%;
        height: 100%;
    }

    #message-boxchat .chat-body-message-item-reactions-icon {
        color: var(--dark-grey-color);
        font-size: 16px;
        line-height: 24px !important;
    }

    #message-boxchat .chat-body-message-item-reactions-img {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        position: absolute;
        left: 2px;
        bottom: 2px;
    }

    /* List reaction */
    #message-boxchat .message-left .reactions-select-number {
        flex: 1;
        display: flex;
        position: relative;
        flex-direction: row-reverse;
    }

    #message-boxchat .message-right .reactions-select-number {
        width: 100%;
        min-width: 130px;
        display: flex;
        position: relative;
    }

    #message-boxchat .chat-body-message-item-action-checked-list {
        max-width: 110px;
        height: auto;
        border-radius: 20px;
        background-color: #fff;
        display: inline-flex;
        align-items: center;
        position: relative;
        margin-bottom: 0;
        padding: 0 4px;
        overflow: hidden;
    }

    #message-boxchat .message-right .chat-body-message-item-action-checked-list {
        bottom: 4px;
        left: 44px;
        flex-direction: row-reverse;
    }

    #message-boxchat .message-left .chat-body-message-item-action-checked-list {
        bottom: 4px;
        right: 40px;
    }

    /* image */
    .chat-message-images {
        margin-bottom: 8px;
    }

    /* One image */
    #message-boxchat .one-image {
        max-width: 100%;
        width: 100%;
        max-height: 300px;
        object-fit: cover;
    }

    #message-boxchat .message-right .one-image {
        border-radius: 0;
        border-top-left-radius: 12px;
    }

    #message-boxchat .message-left .one-image {
        border-radius: 0;
        border-top-right-radius: 12px;
    }

    #message-boxchat .chat-body-message-item.show-image-right {
        max-width: 63.33333334%;
        max-height: 400px;
        margin-right: 10px;
        background-color: transparent !important;
        box-shadow: unset !important;
    }

    #message-boxchat .chat-body-message-item.show-image-left {
        max-width: 63.33333334%;
        max-height: 400px;
        margin-left: 10px;
        background-color: transparent !important;
        box-shadow: unset !important;
    }

    #message-boxchat .chat-body-message-item-img {
        width: 100%;
        position: relative;
    }

    /* Grid image */
    #message-boxchat .wrapper {
        max-width: 100%;
        min-width: 200px;
        margin-bottom: 8px !important;
        margin: 0 auto;
        position: relative;
        border-radius: 0;
    }

    #message-boxchat .gallery__link {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 4px;
    }

    #message-boxchat .gallery__image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.05);
        transition: transform .5s,
        filter .5s;
        border-radius: 4px;
    }

    #message-boxchat .gallery__link:hover .gallery__image {
        transform: scale(1.2);
    }

    #message-boxchat .more-photos {
        color: #fff;
        font-size: 30px;
        font-weight: 500;
        height: 100%;
        left: 50%;
        position: absolute;
        text-align: center;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 1;
    }

    #message-boxchat .more-photos::after {
        background: rgba(128, 128, 128, 0.7) none repeat scroll 0 0;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }

    #message-boxchat .more-photos > span {
        font-size: 24px !important;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 99;
    }

    /* 5 ảnh trở lên */


    #message-boxchat .wrapper.five-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 3;
    }

    #message-boxchat .wrapper.five-image .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 4 / span 3;
    }

    #message-boxchat .wrapper.five-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.five-image .gallery__item--4 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.five-image .gallery__item--5 {
        grid-column: 3 / span 2;
        grid-row: 5 / span 2;
    }

    /* 5 ảnh trở lên version 2 */
    #message-boxchat .wrapper.five-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(6, 40px);
        gap: 4px;
    }

    #message-boxchat .wrapper.five-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 40px);
        gap: 4px;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 6;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 3;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--3 {
        grid-column: 5 / span 2;
        grid-row: 1 / span 3;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--4 {
        grid-column: 3 / span 2;
        grid-row: 4 / span 3;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--5 {
        grid-column: 5 / span 2;
        grid-row: 4 / span 3;
    }

    /* 4 ảnh */
    #message-boxchat .wrapper.four-image .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(4, 65px);
        gap: 4px;
    }

    #message-boxchat .wrapper.four-image .gallery__item--1 {
        grid-column: 1 / span 6;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.four-image .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.four-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.four-image .gallery__item--4 {
        grid-column: 5 / span 2;
        grid-row: 3 / span 2;
    }

    /* 4 ảnh version 2*/
    #message-boxchat .wrapper.four-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(6, 40px);
        gap: 4px;
    }

    #message-boxchat .wrapper.four-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 6;
    }

    #message-boxchat .wrapper.four-image-other .gallery__item--2 {
        grid-column: 5 / span 2;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.four-image-other .gallery__item--3 {
        grid-column: 5 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.four-image-other .gallery__item--4 {
        grid-column: 5 / span 2;
        grid-row: 5 / span 2;
    }

    /* 3 ảnh */
    #message-boxchat .wrapper.three-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    #message-boxchat .wrapper.three-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 4;
    }

    #message-boxchat .wrapper.three-image .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.three-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    /* 3 ảnh version 2 */
    #message-boxchat .wrapper.three-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    #message-boxchat .wrapper.three-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.three-image-other .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.three-image-other .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    /* 2 ảnh */
    #message-boxchat .wrapper.two-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    #message-boxchat .wrapper.two-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 4;
    }

    #message-boxchat .wrapper.two-image .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 4;
    }

    /* 2 ảnh version 2*/
    #message-boxchat .wrapper.two-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    #message-boxchat .wrapper.two-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.two-image-other .gallery__item--2 {
        grid-column: 1 / span 4;
        grid-row: 3 / span 2;
    }

    /* File */
    #message-boxchat .chat-message-file {
        padding: 8px;
        max-width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        margin-bottom: 4px;
    }

    #message-boxchat .chat-message-file-icon {
        width: 32px;
        height: auto;
        color: var(--text-color);
        font-size: 28px;
        text-align: center;
        margin-right: 8px;
        position: relative;
    }

    #message-boxchat .chat-message-file-icon-image {
        width: 32px;
        height: 32px;
        object-fit: cover;
    }

    #message-boxchat .chat-message-file-icon-i {
        line-height: 28px !important;
        width: 28px;
    }

    #message-boxchat .chat-message-file-info {
        max-width: 80%;
        display: block;
        padding: 0 12px 0 4px;
    }


    #message-boxchat .chat-message-file-size {
        display: block;
    }

    #message-boxchat .chat-message-file-send {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.05);
        color: var(--text-color);
        padding: 4px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px;
        position: absolute;
        top: 1.3em;
        right: 0.5em;
    }

    #message-boxchat .chat-message-file-send:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    #message-boxchat .sticker-message-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        z-index: 99;
    }

    /* link message */
    #message-boxchat .chat-message-link {
        height: auto;
    }

    #message-boxchat .chat-message-link-text {
        width: 100%;
        height: auto;
    }

    #message-boxchat .chat-message-link-url {
        width: 100%;
        color: var(--primary-color);
        font-size: 15px;
        margin-right: 4px;
        word-wrap: break-word;
        cursor: pointer;
        padding: 8px;
    }

    #message-boxchat .chat-message-link-info-title-link {
        font-size: 14px;
        text-decoration: none;
        color: var(--primary-color);
    }

    #message-boxchat .chat-message-link-info-title-link:hover {
        text-decoration: underline;
        color: var(--dark-color);
    }


    #message-boxchat .chat-message-link-url:hover {
        text-decoration: underline;
    }

    #message-boxchat .chat-message-text {
        font-size: 14px !important;
        color: #001A33;
        word-wrap: break-word;
        word-break: break-all;
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
    }

    #message-boxchat .chat-message-link-thumbnail {
        width: 100%;
        max-height: 280px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: relative;
        margin-bottom: 16px;
    }

    #message-boxchat .chat-message-link-thumbnail-img {
        width: 100%;
        max-height: 280px;
        border: 1px solid var(--border-color);
        object-fit: cover;
    }

    #message-boxchat .chat-message-link-info {
        cursor: pointer;
        padding: 0 8px 8px 8px;
    }


    #message-boxchat .chat-message-link-info-title:hover {
        color: var(--primary-color);
    }

    #message-boxchat .chat-message-link-info-description {
        font-size: 14px;
        color: var(--dark-grey-color);
        font-weight: 400;
        margin-bottom: 3px;
        word-wrap: break-word;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #message-boxchat .chat-message-link-info-url {
        font-size: 12px;
        color: var(--primary-color);
        text-transform: lowercase;
        word-wrap: break-word;
    }

    /* message link ver-2 */
    #message-boxchat .chat-message-link-icon-title {
        width: 100%;
        color: var(--primary-color);
        font-size: 15px;
        margin-right: 4px;
        word-wrap: break-word;
        cursor: pointer;
        padding: 8px 8px 0 8px;
    }

    #message-boxchat .chat-message-link-icon-title:hover {
        text-decoration: underline;
    }

    #message-boxchat .chat-message-link-icon-info {
        display: flex;
        align-items: flex-start;
        padding: 0 8px;
    }

    #message-boxchat .chat-message-link-icon-info-img {
        width: 75px;
        height: 75px;
        border-radius: 4px;
    }

    #message-boxchat .chat-message-link-icon-info-img img {
        width: 75px;
        height: 75px;
        border-radius: 4px;
        object-fit: cover;
    }

    #message-boxchat .chat-message-link-icon-info-text {
        margin-left: 16px;
    }

    #message-boxchat .chat-message-link-icon-info-text-title {
        font-size: 14px;
        color: #001A33;
        font-weight: 500;
        margin-bottom: 3px;
        word-wrap: break-word;
        cursor: pointer;
    }

    #message-boxchat .chat-message-link-icon-info-text-title:hover {
        color: var(--primary-color);
    }

    #message-boxchat .chat-message-link-icon-info-text-url {
        font-size: 12px;
        color: var(--primary-color);
        font-weight: 400;
        margin-bottom: 3px;
        word-wrap: break-word;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Video message */
    #message-boxchat .chat-message-video {
        max-width: 100%;
        background-color: #000;
        border-top-right-radius: 8px;
        border-top-left-radius: 8px;
        margin-bottom: 12px;
    }

    #message-boxchat .chat-message-video-preview {
        max-width: 100%;
        width: 100%;
        max-height: 280px;
        position: relative;
        cursor: pointer;
        border-top-right-radius: 8px;
        border-top-left-radius: 8px;
    }

    .chat-body-message-video-thumbnail {
        border-top-right-radius: 8px;
        border-top-left-radius: 8px;
        border-bottom-right-radius: unset;
        border-bottom-left-radius: unset;
        width: 100%;
        max-height: 300px;
    }

    /* Sticker message */
    #message-boxchat .chat-message-sticker {
        max-width: 100%;
        padding: 8px;
        height: auto;
        display: flex;
        flex-direction: row-reverse;
    }


    #message-boxchat .sticker img {
        max-width: 100px;
        height: 100px;
    }

    /* reply message */
    #message-boxchat .chat-body-message-item-reply {
        display: flex;
        align-items: center;
        background-color: #b5dcff;
        padding: 8px;
        margin: 8px 8px 0 8px;
        max-width: 100%;
        border-radius: 8px;
    }

    #message-boxchat .chat-body-message-item-reply-image {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        margin-right: 4px;
        overflow: hidden;
    }


    #message-boxchat .chat-body-message-item-reply-boder {
        width: 2px;
        height: 35px;
        border-right: 2px solid #3989FF;
        margin-right: 4px;
    }

    #message-boxchat .chat-body-message-item-reply-img:hover {
        opacity: 1;
        -webkit-transform: scale(1.08);
        transform: scale(1.08);
    }

    #message-boxchat .chat-body-message-item-reply-info {
        max-width: calc(100% - 60px);
    }

    .chat-body-message-item-reply-name {
        color: #394E60;
        font-size: 14px;
        font-weight: 500;
        max-width: 100%;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #message-boxchat .chat-body-message-item-reply-type {
        color: #72808E;
        font-size: 14px;
        font-weight: 400;
        max-width: 100%;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    /* Thu hồi tin nhắn css */
    #message-boxchat .chat-body-message-item-revoke {
        width: 100%;
        padding: 8px;
    }

    /* Thanh thời gian */
    #message-boxchat .chat-date {
        color: var(--white-color);
        contain: content;
        margin: 20px 60px;
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        font-size: 14px;
        justify-content: center;
        position: relative;
    }

    #message-boxchat .chat-date .line {
        content: "";
        width: 100%;
        height: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.25);
        z-index: 0;
        margin-top: 11px;
    }

    #message-boxchat .chat-date > .time-chat-date {
        background: rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        padding: 2px 10px 3px;
        z-index: 2;
    }

    /* Tin nhắn lỗi */
    #message-boxchat .chat-body-message-item-error {
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-width: 170px;
        padding: 0 8px 8px 8px;
    }

    #message-boxchat .chat-body-message-item-error.left-error {
        flex-direction: row-reverse;
    }

    #message-boxchat .chat-body-message-item-error-notify {
        font-size: 14px;
        color: #DB342E;
    }

    #message-boxchat .chat-body-message-item-error-btn {
        display: flex;
        align-items: center;
    }

    #message-boxchat .chat-body-message-item-error-btn-resend {
        font-size: 14px;
        color: #0068FF;
        cursor: pointer;
        margin-right: 4px;
    }

    #message-boxchat .chat-body-message-item-error-or {
        font-size: 12px;
        font-weight: 400;
        letter-spacing: normal;
        color: rgba(0, 0, 0, 0.5);
        user-select: none;
        margin-right: 4px;
    }

    #message-boxchat .chat-body-message-item-error-btn-delete {
        font-size: 14px;
        color: #0068FF;
        cursor: pointer;
        margin-right: 4px;
    }

    /* Thông báo cuộc gọi */
    #message-boxchat .chat-body-message-item-call-header {
        font-size: 14px;
        font-weight: 500;
        color: #050505;
        padding: 8px 8px 4px 8px
    }

    #message-boxchat .chat-body-message-item-call-header.miss-call {
        color: #DB342E;
    }

    #message-boxchat .chat-body-message-item-call-body {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        border-bottom: 1px solid rgba(0, 0, 0, 0.25);
        padding: 0 8px 4px 8px;
    }

    #message-boxchat .chat-body-message-item-call-body-icon {
        font-size: 16px;
        margin-right: 6px;
        color: #050505;
        position: relative;
    }

    #message-boxchat .chat-body-message-item-call-body-icon.miss-call {
        color: #DB342E;
    }

    #message-boxchat .chat-body-message-item-call-body-type {
        font-size: 14px;
    }

    #message-boxchat .chat-body-message-item-call-btn {
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        text-transform: uppercase;
        color: #0068FF;
        cursor: pointer;
        padding: 8px;
    }

    #message-boxchat .chat-body-message-item-call-body-icon-mini {
        font-size: 10px;
        position: absolute;
        right: -9px;
        bottom: 0px;
        padding: 0 8px 8px 8px;
    }

    #message-boxchat .chat-body-message-item-call-body-icon-mini.call-video {
        font-size: 10px;
        position: absolute;
        right: -6px;
        bottom: 3px;
    }


    #message-boxchat .chat-body-message-item-call-body-icon-mini.suscess-call {
        color: #3cb473;
    }

    #message-boxchat .chat-body-message-item-call-body-icon-mini.error-call {
        color: #DB342E;
    }

    /* Thông báo group */
    #message-boxchat .chat-body-message-event-content {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 52px;
    }

    #message-boxchat .event-message-content {
        display: flex;
        align-items: center;
        word-break: break-all;
        max-width: 90%;
        background-color: rgba(0, 0, 0, 0.05);
        color: #72808e;
        border-radius: 16px;
        padding: 0 14px;
        z-index: 2;
    }

    #message-boxchat .event-message-content-text {
        font-size: 14px !important;
    }

    #message-boxchat .event-message-content-img {
        margin-right: 8px;
        width: 18px;
        height: 11px;
        object-fit: cover;
        margin-top: 4px;
    }

    #message-boxchat .event-message-content-info {
        font-size: 14px !important;
        font-weight: 400;
        color: #262e36;
        word-wrap: break-word;
    }

    #message-boxchat .event-message-content-link {
        color: #0068FF;
        text-decoration: underline;
        cursor: pointer;
    }

    #message-boxchat .event-message-content-contact:hover {
        color: #0068FF;
        cursor: pointer;
    }

    #message-boxchat .event-message-content-name, .event-message-content-adder {

        font-weight: 500;
        font-size: 14px !important;
    }


    #message-boxchat .event-message-content-info-status-icon {
        width: 22px;
        height: 22px;
        font-size: 22px !important;
        color: #FA6342;
        position: relative;
    }

    #message-boxchat .event-message-content-info.pin-message {
        margin-top: -8px;
    }

    #message-boxchat .event-message-content-info-icon-mini {
        position: absolute;
        bottom: 0;
        right: 0;
        font-size: 8px !important;
        margin-right: 4px;
        color: #FA6342;
    }

    #message-boxchat .event-message-content-message {
        font-size: 14px !important;
        position: relative;
        top: 5px;
        max-width: 60%;
        font-weight: 600;
        display: -webkit-inline-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #001a33;
    }

    #message-boxchat .event-message-content-view {
        color: #0068FF;
        cursor: pointer;
    }

    #message-boxchat .event-message-content-icon {
        color: #0068FF;
        margin-right: 4px;
        font-size: 16px !important;
    }

    /* btn scroll */
    #message-boxchat .chat-body-scroll-top-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: #fff;
        position: fixed;
        bottom: 110px;
        right: 320px;
        z-index: 2;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeIn linear 0.3s;
    }

    #message-boxchat .chat-body-scroll-top-btn i {
        font-size: 20px;
        color: var(--border-color);
    }

    #message-boxchat .chat-body-scroll-top-btn:hover > i {
        color: #005ae0;
    }

    #message-boxchat .chat-body-scroll-top-new-message {
        width: 143px;
        height: 32px;
        position: fixed;
        bottom: 110px;
        right: 320px;
        z-index: 2;
        cursor: pointer;
        border-radius: 4px;
        background-color: #fff;
        color: #0068FF;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        animation: key1 .5s linear infinite alternate;
    }

    #message-boxchat .chat-body-scroll-top-new-message i {
        font-size: 20px;
    }

    /* ............................................................................. */

    /* message status */
    .status-single-chat {
        position: absolute;
        bottom: -16px;
        right: 0;
    }

    /* List message action */
    /* #message-boxchat .chat-body-message-item-action-item.item-action-more:hover > .item-action-more-list{
    display: block;
} */

    #message-boxchat .item-action-more-list {
        position: absolute;
        top: 100%;
        background: var(--white-color);
        padding: 8px;
        border-radius: 4px;
        z-index: 99;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.18);
        border: 1px solid #e1e4ea;
        max-width: 270px;
        min-width: 140px;
        text-align: left;
        /* display: none; */
        animation: fadeIn 0.4s ease-in-out;
    }

    #message-boxchat .item-action-more-list::before {
        content: "";
        width: 100px;
        height: 20px;
        position: absolute;
        top: 100%;
        left: 0;
    }

    #message-boxchat .item-action-more-item {
        height: 32px;
        padding: 0 16px;
        display: flex;
        align-items: center;
        cursor: pointer;
        line-height: normal;
        font-weight: 400;
        text-align: left;
        font-size: 14px;
        letter-spacing: normal;
        color: var(--neutral-base);
        position: relative;
        margin: 0 -8px;
    }

    #message-boxchat .item-action-more-item:hover {
        background-color: var(--input-color);
    }

    #message-boxchat .item-action-more-item.red-color-text {
        color: #DB342E;
    }

    #message-boxchat .item-action-more-icon {
        font-size: 16px;
        margin-right: 8px;
    }


    #message-boxchat .chat-body-message-item-reactions .emoji-container {
        opacity: 0;
        position: absolute;

        bottom: 24px;
        left: calc(100% + 40px);
        margin-left: -146px;
        background: #fff;
        height: 40px;
        width: auto;
        box-shadow: 0 2px 2px rgb(0 0 0 / 20%), 0 0 0 1px rgb(0 0 0 / 5%);
        border-radius: 50px;
        padding: 1px;
        box-sizing: border-box;
        transition: opacity 200ms ease;
        pointer-events: none;
        display: flex;
        align-items: center;
        z-index: 99;
    }

    #message-boxchat .chat-body-message-item-reactions .emoji-container::after {
        display: block;
        content: '';
        background: transparent;
        height: 30px;
        position: absolute;
        width: 200px;
        bottom: -15px;
        left: 0;
        z-index: -1;
    }

    /*#message-boxchat .emoji-container {*/
    /*    display: none;*/
    /*}*/
    /*}*/
    #message-boxchat .chat-body-message-item-reactions .emoji-container .emoji .icon:hover:after {
        opacity: 1;
        transition: opacity 1.5s;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .emoji-container {
        opacity: 1;
        pointer-events: all;
        transition: opacity 1.5s;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .like {
        -webkit-animation-duration: .7333s;
        -webkit-animation-name: head-1-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .like .icon {
        background-position: 0 -144px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .love {
        -webkit-animation-duration: .9833s;
        -webkit-animation-name: head-2-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .love .icon {
        background-position: 0 -192px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .haha {
        -webkit-animation-duration: 1.0833s;
        -webkit-animation-name: head-3-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .haha .icon {
        background-position: 0 -96px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .wow {
        -webkit-animation-duration: .9333s;
        -webkit-animation-name: head-4-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .wow .icon {
        background-position: 0 -288px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .sad {
        -webkit-animation-duration: 1.2167s;
        -webkit-animation-name: head-5-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .sad .icon {
        background-position: 0 -240px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .angry {
        -webkit-animation-duration: 1.2833s;
        -webkit-animation-name: head-6-anim;
    }

    /* nút reply tin nhắn tagname */
    #message-boxchat .chat-message-extra-btn-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 80px;
        height: 30px;
        padding: 4px;
        position: absolute;
        bottom: -20px;
        left: 16px;
    }

    #message-boxchat .extra-btn {
        font-weight: 400;
        font-size: 14px;
        position: relative;
        background-color: rgba(0, 0, 0, 0.25);
        color: #fff;
        margin-bottom: 4px;
        border-color: transparent;
        border-radius: 6px;
        padding: 8px 16px;
        text-transform: uppercase;
    }

    #message-boxchat .extra-btn:hover {
        background-color: #0068FF;
    }

    #message-boxchat .chat-message .extra-btn-icon {
        font-size: 14px;
        margin-right: 6px;
    }

    /* Recation num checked */
    .chat-body-message-item-action-checked-list.right-reaction {
        right: 30%;
        bottom: 9%;
    }

    .chat-body-message-item-action-checked-item {
        width: 20px;
        height: 20px;
        padding: 2px;
        overflow: hidden;
        display: flex;
        align-items: center;
    }

    .chat-body-message-item-action-checked-item-img {
        width: 17px;
        height: 17px;
        border-radius: 50%;
    }

    .chat-body-message-item-action-checked-num {
        width: 20px;
        height: 20px;
        text-align: center;
    }

    /* Message pin */


    #message-boxchat .chat-body-message-element-pin:hover > .chat-body-message-element-pin-option i {
        display: block;
    }


    #message-boxchat .chat-body-message-element-pin-img {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        margin-right: 4px;
    }


    #message-boxchat .chat-body-message-element-pin-option {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        cursor: pointer;
        text-align: center;
        position: relative;
    }

    #message-boxchat .chat-body-message-element-pin-option i {
        font-size: 30px;
        line-height: 35px;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: none;
    }

    #message-boxchat .chat-body-message-element-pin-option::after {
        content: "";
        position: absolute;
        top: -16px;
        left: -20;
        width: 120px;
        height: 20px;
    }

    #message-boxchat .chat-body-message-element-pin-option:hover {
        background-color: #e1e4ea;
    }

    #message-boxchat .chat-body-message-element-pin-option:hover > .chat-body-message-element-pin-option-list {
        display: block;
    }

    #message-boxchat .chat-body-message-element-pin-option-list {
        list-style: none;
        min-width: 140px;
        padding: 8px;
        border-radius: 8px;
        background-color: var(--white-color);
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.18);
        position: absolute;
        bottom: 75%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 99;
        display: none;
    }

    #message-boxchat .chat-body-message-element-pin-option-item {
        height: 32px;
        padding: 0 16px;
        display: flex;
        align-items: center;
        cursor: pointer;
        line-height: normal;
        font-weight: 400;
        text-align: left;
        font-size: 14px;
        letter-spacing: normal;
        color: #001a33;
        position: relative;
        margin: 0 -8px;
    }

    #message-boxchat .chat-body-message-element-pin-option-item:hover {
        background-color: #e1e4ea;
    }

    #message-boxchat .chat-body-message-element-pin-option-item.red-color-text {
        color: #DB342E;
        font-size: 14px;
    }

    #message-boxchat .zmenu-separator {
        height: 1px;
        background: #e1e4ea;
        margin: 4px 8px;
    }


    #message-boxchat .chat-body-message-element-pin-info-message-text {
        font-size: 14px !important;
    }

    /* reply message */
    .chat-body-message-item-reply {
        display: flex;
        align-items: center;
        background-color: #C8DEFF;
        padding: 8px;
        max-width: 100%;
        border-radius: 8px;
    }

    .chat-body-message-item-reply-image {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        margin-right: 4px;
        overflow: hidden;
    }

    .chat-body-message-item-reply-img {
        width: 35px;
        height: 35px;
        -webkit-transition: 0.4s ease;
        transition: 0.4s ease;
        object-fit: cover;
    }

    .chat-body-message-item-reply-boder {
        width: 2px;
        height: 35px;
        border-right: 2px solid #3989FF;
        margin-right: 4px;
    }

    .chat-body-message-item-reply-img:hover {
        opacity: 1;
        -webkit-transform: scale(1.08);
        transform: scale(1.08);
    }

    /*#chat-body-message-popup .chat-body-message-item-reply-info {*/
    /*    max-width: calc(100% - 60px);*/
    /*}*/

    .chat-body-message-item-reply-name {
        color: #394E60;
        font-size: 14px;
        font-weight: 500;
        max-width: 100%;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .chat-body-message-item-reply-text {
        margin-top: 4px;
        color: #001A33;
        font-size: 14px;
    }

    /*--- svg play button ---*/
    #message-boxchat .chat-message-link-thumbnail .play {
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
    }

    #message-boxchat svg {
        stroke: #fff;
    }

    #message-boxchat .edit-phto,
    .add-btn > a {
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
    }

    /*@keyframes spin {*/
    /*    to {*/
    /*        transform: rotate(360deg);*/
    /*    }*/
    /*}*/

    #message-boxchat .stroke-solid {
        stroke-dashoffset: 0;
        stroke-dashArray: 300;
        stroke-width: 4px;
        transition: stroke-dashoffset 1s ease, opacity 1s ease;
        opacity: 0.7;
    }

    #message-boxchat .icon {
        transform: scale(0.8);
        transform-origin: 50% 50%;
        transition: transform 200ms ease-out;
    }

    #message-boxchat .play:hover .stroke-solid {
        opacity: 1;
        stroke-dashoffset: 300;
    }

    #message-boxchat .play:hover .icon {
        transform: scale(0.9);
    }

    #message-boxchat .chat-message-link-thumbnail-img:hover ~ .icon {
        transform: scale(0.9);
    }

    #message-boxchat .play {
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
    }

    /*--- End svg play button ---*/

    #message-boxchat .chat-message-link-thumbnail-img:hover {
        opacity: 1 !important;
    }

    /* message video */
    .chat-body-message-video {
        position: relative;
    }

    .chat-body-message-video.right-message-video {
        margin-right: 8px;
    }

    .chat-body-message-video.left-message-video {
        margin-left: 8px;
    }

    /* message writing */
    #message-boxchat .message-writing {
        width: 50px;
        height: auto;
    }

    .dot1 {
        position: absolute;
        background: cyan;
        height: 8px;
        width: 8px;
        border: none;
        border-radius: 50%;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        animation: func 2s linear infinite;
        animation-delay: .5s;
    }

    .dot2 {
        animation: func 2s linear infinite;
        animation-delay: 0s;
        position: absolute;
        background: cyan;
        height: 8px;
        width: 8px;
        border: none;
        border-radius: 50%;
        left: 35%;
        top: 50%;
        transform: translate(-35%, -50%);
    }

    .dot3 {
        position: absolute;
        background: cyan;
        height: 8px;
        width: 8px;
        border: none;
        border-radius: 50%;
        left: 65%;
        top: 50%;
        transform: translate(-65%, -50%);
        animation: func 2s linear infinite;
        animation-delay: 1s;
    }

    @keyframes func {
        0% {
            opacity: 0;
        }
        50% {
            opacity: 1
        }
        100% {
            opacity: 0;
        }
    }

    /* Modal show grid message */
    #message-boxchat .modal-show-grid-images {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        bottom: 0;
        z-index: 9999;
        background-color: rgba(0, 0, 0, 0.9);
        animation: fadeIn linear 0.2s;
    }


    #close-modal-preview-image {
        position: absolute;
        right: 0;
        top: 20px;
        transform: translateY(-50%);
        font-size: 30px;
    }


    /* emoji css */
    #chat-popup-layout-tms ~ .wrapper {
        z-index: 99;
    }

    /* modal preview image */
    #message-boxchat .modal-show-grid-image-toolbar {
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        background-color: #001a33;
        justify-content: center;
        color: var(--white-color);
        font-size: 26px;
    }

    #message-boxchat .modal-show-grid-image-toolbar-icon {
        cursor: pointer;
        padding: 8px;
    }

    #message-boxchat .modal-show-grid-image-toolbar-icon:hover {
        color: var(--primary-color);
    }

    #message-boxchat .modal-show-grid-image-preview {
        width: 100%;
        height: calc(100% - 180px);
        display: flex;
        justify-content: center;
    }

    #message-boxchat .modal-show-grid-image-preview-images {
        width: 70%;
        height: 100%;
        object-position: 50% 50%;
        border-radius: 5px;
        align-items: center;
        position: relative;
    }

    #message-boxchat .modal-show-grid-image-preview-left-button, .modal-show-grid-image-preview-right-button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    /*#message-boxchat .modal-show-grid-image-preview-left-button:hover, .modal-show-grid-image-preview-right-button:hover {*/
    /*    background-color: rgba(255, 255, 255, 0.3);*/
    /*}*/

    #message-boxchat .modal-show-grid-image-preview-left-button {
        left: -10%;
    }

    #message-boxchat .modal-show-grid-image-preview-button-icon {
        color: var(--white-color);
        font-size: 60px;
    }

    #message-boxchat .modal-show-grid-image-preview-right-button {
        right: -10%;
    }


    #message-boxchat .modal-show-grid-image-preview-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: 50% 50%;
    }

    #message-boxchat .modal-show-grid-image-preview-image:hover {
        opacity: 1 !important;
    }

    #message-boxchat .modal-show-grid-image-thumbnail {
        width: 100%;
        height: 132px;
        border: 1px solid var(--dark-color);
        display: flex;
        align-items: center;
        justify-content: flex-start;
        list-style: none;
        margin-bottom: 8px;
        overflow-x: auto;
        overflow-y: hidden;
        max-height: 100%;
    }

    /* Ẩn thanh scroll */
    .modal-show-grid-image-thumbnail-images {
        min-width: 16%;
        max-width: 16%;
        height: 100%;
        object-fit: contain;
        border-radius: 5px;
        margin: 0 4px;
    }

    .modal-show-grid-image-thumbnail-image {
        width: 100%;
        height: auto;
    }

    /* hiện thông tin */
    #message-boxchat .item-box-message {
        position: relative;
    }

    #message-boxchat .item-box-message:hover > .over-photo {
        bottom: 10px;
        opacity: 1;
        visibility: visible;
    }

    #message-boxchat .photos-list .over-photo .likes.heart {
        margin-right: 6px;
    }

    #message-boxchat .photos-list .over-photo .likes.heart > span {
        font-size: 12px;
    }

    #message-boxchat .over-photo {
        bottom: -10px;
        color: #000;
        display: inline-block;
        left: 0;
        opacity: 1;
        padding: 0 10px;
        position: absolute;
        transition: all 0.2s linear 0s;
        visibility: hidden;
        width: 100%;
        z-index: 2;
    }

    #message-boxchat .over-photo > span {
        color: #eee;
        float: right;
        font-size: 11.4px;
        margin-top: 5px;
        letter-spacing: -0.6px;
    }

    #message-boxchat .over-photo > a, .over-photo > div {
        display: inline-block;
        margin-right: 10px;
        vertical-align: middle;
    }

    #message-boxchat .over-photo > a:last-child,
    .over-photo > div:last-child {
        margin-right: 0;
    }

    /* animation */
    @keyframes key1 {
        0% {
            transform: translateY(0px);
        }
        100% {
            transform: translateY(-6px);
        }
    }

    @keyframes opacity {
        0% {
            opacity: 0;
        }

        10% {
            opacity: 0.1;
        }

        20% {
            opacity: 0.2;
        }

        30% {
            opacity: 0.3;
        }

        40% {
            opacity: 0.4;
        }

        50% {
            opacity: 0.5;
        }

        60% {
            opacity: 0.6;
        }

        70% {
            opacity: 0.7;
        }

        80% {
            opacity: 0.8;
        }

        90% {
            opacity: 0.9;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes bounce {
        0% {
            transform: translateY(0);
        }

        10% {
            transform: translateY(3px);
        }

        20% {
            transform: translateY(6px);
        }

        30% {
            transform: translateY(9px);
        }

        40% {
            transform: translateY(12px);
        }

        50% {
            transform: translateY(15px);
        }

        60% {
            transform: translateY(18px);
        }

        70% {
            transform: translateY(21px);
        }

        80% {
            transform: translateY(24px);
        }

        90% {
            transform: translateY(27px);
        }

        100% {
            transform: translateY(30px);
        }
    }

    @keyframes motionLeft {
        0% {
            transform: translateX(0);
            opacity: 1;
        }
        50% {
            transform: translateX(20px);
            opacity: 0;
        }
        75% {
            transform: translateX(-20px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes motionRight {
        0% {
            transform: translateX(0);
            opacity: 1;
        }
        50% {
            transform: translateX(-20px);
            opacity: 0;
        }
        75% {
            transform: translateX(20px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes animatop {
        0% {
            opacity: 0;
            right: -500px;
        }
        100% {
            opacity: 1;
            right: 0px;
        }
    }

    @keyframes animainfos {
        0% {
            bottom: 10px;
        }
        100% {
            bottom: -42px;
        }
    }

    @keyframes rotatemagic {
        0% {
            opacity: 0;
            transform: rotate(0deg);
            top: -24px;
            left: -253px;
        }
        100% {
            transform: rotate(-30deg);
            top: -24px;
            left: -78px;
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes move-down {
        0% {
            top: 10%;
        }
        50% {
            top: 35%;
        }
        100% {
            top: 50%;
        }
    }

    @-webkit-keyframes stickerAnimation {
        0% {
            background-position: -12px -12px;
        }
        25% {
            background-position: -156px -12px;
        }
        50% {
            background-position: -300px -12px;
        }
        75% {
            background-position: -156px -156px;
        }
        100% {
            background-position: -12px -156px;
        }
    }

    @-webkit-keyframes sk-bouncedelay {
        0%,
        80%,
        100% {
            -webkit-transform: scale(0)
        }
        40% {
            -webkit-transform: scale(1.0)
        }
    }

    /* message animate */
    @keyframes slideRight {
        from {
            opacity: 0;
            transform: translateX(44px);
        }
        to {
            opacity: 1;
            transform: none;
        }
    }

    @keyframes slideLeft {
        from {
            opacity: 0;
            transform: translateX(-44px);
        }
        to {
            opacity: 1;
            transform: none;
        }
    }

    @keyframes slideUpAndRight {
        from {
            transform: translateX(-100px) translateY(44px);
        }
        to {
            transform: none;
        }
    }

    /* reaction animate */
    @-webkit-keyframes head-1-anim {
        0% {
            opacity: .3374;
            transform: translateY(35.7785px) scale(.3374, .3374);
        }
        2.2727% {
            opacity: .5075;
            transform: translateY(26.5963px) scale(.5075, .5075);
        }
        4.5455% {
            opacity: .6569;
            transform: translateY(18.5271px) scale(.6569, .6569);
        }
        6.8182% {
            opacity: .7796;
            transform: translateY(11.9030px) scale(.7796, .7796);
        }
        9.0909% {
            opacity: .8744;
            transform: translateY(6.7839px) scale(.8744, .8744);
        }
        11.3636% {
            opacity: .9433;
            transform: translateY(3.0607px) scale(.9433, .9433);
        }
        13.6364% {
            opacity: .9901;
            transform: translateY(.5333px) scale(.9901, .9901);
        }
        15.9091% {
            opacity: 1;
            transform: translateY(-1.0335px) scale(1.0191, 1.0191);
        }
        18.1818% {
            transform: translateY(-1.8733px) scale(1.0347, 1.0347);
        }
        20.4545% {
            transform: translateY(-2.1963px) scale(1.0407, 1.0407);
        }
        22.7273% {
            transform: translateY(-2.1782px) scale(1.0403, 1.0403);
        }
        25.0000% {
            transform: translateY(-1.9574px) scale(1.0362, 1.0362);
        }
        27.2727% {
            transform: translateY(-1.6364px) scale(1.0303, 1.0303);
        }
        29.5455% {
            transform: translateY(-1.2861px) scale(1.0238, 1.0238);
        }
        31.8182% {
            transform: translateY(-0.9522px) scale(1.0176, 1.0176);
        }
        34.0909% {
            transform: translateY(-0.6601px) scale(1.0122, 1.0122);
        }
        36.3636% {
            transform: translateY(-0.4214px) scale(1.0078, 1.0078);
        }
        38.6364% {
            transform: translateY(-0.2376px) scale(1.0044, 1.0044);
        }
        40.9091% {
            transform: translateY(-0.1046px) scale(1.0019, 1.0019);
        }
        43.1818% {
            opacity: 1;
            transform: translateY(-0.0147px) scale(1.0003, 1.0003);
        }
        45.4545% {
            opacity: .9992;
            transform: translateY(.0406px) scale(.9992, .9992);
        }
        47.7273% {
            opacity: .9987;
            transform: translateY(.0699px) scale(.9987, .9987);
        }
        50% {
            opacity: .9985;
            transform: translateY(.0807px) scale(.9985, .9985);
        }
        52.2727% {
            opacity: .9985;
            transform: translateY(.0794px) scale(.9985, .9985);
        }
        54.5455% {
            opacity: .9987;
            transform: translateY(.0709px) scale(.9987, .9987);
        }
        56.8182% {
            opacity: .9989;
            transform: translateY(.0590px) scale(.9989, .9989);
        }
        59.0909% {
            opacity: .9991;
            transform: translateY(.0462px) scale(.9991, .9991);
        }
        61.3636% {
            opacity: .9994;
            transform: translateY(.0341px) scale(.9994, .9994);
        }
        63.6364% {
            opacity: .9996;
            transform: translateY(.0235px) scale(.9996, .9996);
        }
        65.9091% {
            opacity: .9997;
            transform: translateY(.0149px) scale(.9997, .9997);
        }
        68.1818% {
            opacity: .9998;
            transform: translateY(.0083px) scale(.9998, .9998);
        }
        70.4545% {
            opacity: .9999;
            transform: translateY(.0036px) scale(.9999, .9999);
        }
        72.7273% {
            opacity: 1;
            transform: translateY(.0004px) scale(1, 1);
        }
        75.0000% {
            transform: translateY(-0.0016px) scale(1, 1);
        }
        77.2727% {
            transform: translateY(-0.0026px) scale(1, 1);
        }
        79.5455% {
            transform: translateY(-0.003px) scale(1.0001, 1.0001);
        }
        81.8182% {
            transform: translateY(-0.0029px) scale(1.0001, 1.0001);
        }
        84.0909% {
            transform: translateY(-0.0026px) scale(1, 1);
        }
        86.3636% {
            transform: translateY(-0.0021px) scale(1, 1);
        }
        88.6364% {
            transform: translateY(-0.0017px) scale(1, 1);
        }
        90.9091% {
            transform: translateY(-0.0012px) scale(1, 1);
        }
        93.1818% {
            transform: translateY(-0.0008px) scale(1, 1);
        }
        95.4545% {
            transform: translateY(-0.0005px) scale(1, 1);
        }
        97.7273% {
            transform: translateY(-0.0003px) scale(1, 1);
        }
        100% {
            opacity: 1;
            transform: translateY(-0.0001px) scale(1, 1);
        }
    }

    @-webkit-keyframes head-2-anim {
        0% {
            opacity: .0825;
            transform: translateY(49.5448px) scale(.0825, .0825);
        }
        1.6949% {
            opacity: .1684;
            transform: translateY(44.9066px) scale(.1684, .1684);
        }
        3.3898% {
            opacity: .2765;
            transform: translateY(39.0668px) scale(.2765, .2765);
        }
        5.0847% {
            opacity: .3977;
            transform: translateY(32.5232px) scale(.3977, .3977);
        }
        6.7797% {
            opacity: .5224;
            transform: translateY(25.7913px) scale(.5224, .5224);
        }
        8.4746% {
            opacity: .6421;
            transform: translateY(19.3257px) scale(.6421, .6421);
        }
        10.1695% {
            opacity: .7504;
            transform: translateY(13.4760px) scale(.7504, .7504);
        }
        11.8644% {
            opacity: .8432;
            transform: translateY(8.4697px) scale(.8432, .8432);
        }
        13.5593% {
            opacity: .9182;
            transform: translateY(4.4173px) scale(.9182, .9182);
        }
        15.2542% {
            opacity: .9754;
            transform: translateY(1.3294px) scale(.9754, .9754);
        }
        16.9492% {
            opacity: 1;
            transform: translateY(-0.859px) scale(1.0159, 1.0159);
        }
        18.6441% {
            transform: translateY(-2.2629px) scale(1.0419, 1.0419);
        }
        20.3390% {
            transform: translateY(-3.0237px) scale(1.0560, 1.0560);
        }
        22.0339% {
            transform: translateY(-3.29px) scale(1.0609, 1.0609);
        }
        23.7288% {
            transform: translateY(-3.203px) scale(1.0593, 1.0593);
        }
        25.4237% {
            transform: translateY(-2.887px) scale(1.0535, 1.0535);
        }
        27.1186% {
            transform: translateY(-2.4446px) scale(1.0453, 1.0453);
        }
        28.8136% {
            transform: translateY(-1.9549px) scale(1.0362, 1.0362);
        }
        30.5085% {
            transform: translateY(-1.4744px) scale(1.0273, 1.0273);
        }
        32.2034% {
            transform: translateY(-1.0398px) scale(1.0193, 1.0193);
        }
        33.8983% {
            transform: translateY(-0.6716px) scale(1.0124, 1.0124);
        }
        35.5932% {
            transform: translateY(-0.3774px) scale(1.0070, 1.0070);
        }
        37.2881% {
            transform: translateY(-0.1562px) scale(1.0029, 1.0029);
        }
        38.9831% {
            opacity: 1;
            transform: translateY(-0.001px) scale(1, 1);
        }
        40.6780% {
            opacity: .9982;
            transform: translateY(.0985px) scale(.9982, .9982);
        }
        42.3729% {
            opacity: .9972;
            transform: translateY(.1536px) scale(.9972, .9972);
        }
        44.0678% {
            opacity: .9968;
            transform: translateY(.1754px) scale(.9968, .9968);
        }
        45.7627% {
            opacity: .9968;
            transform: translateY(.1741px) scale(.9968, .9968);
        }
        47.4576% {
            opacity: .9971;
            transform: translateY(.1582px) scale(.9971, .9971);
        }
        49.1525% {
            opacity: .9975;
            transform: translateY(.1342px) scale(.9975, .9975);
        }
        50.8475% {
            opacity: .9980;
            transform: translateY(.1073px) scale(.9980, .9980);
        }
        52.5424% {
            opacity: .9985;
            transform: translateY(.0809px) scale(.9985, .9985);
        }
        54.2373% {
            opacity: .9989;
            transform: translateY(.0571px) scale(.9989, .9989);
        }
        55.9322% {
            opacity: .9993;
            transform: translateY(.0370px) scale(.9993, .9993);
        }
        57.6271% {
            opacity: .9996;
            transform: translateY(.0211px) scale(.9996, .9996);
        }
        59.3220% {
            opacity: .9998;
            transform: translateY(.0092px) scale(.9998, .9998);
        }
        61.0169% {
            opacity: 1;
            transform: translateY(.0009px) scale(1, 1);
        }
        62.7119% {
            transform: translateY(-0.0044px) scale(1.0001, 1.0001);
        }
        64.4068% {
            transform: translateY(-0.0073px) scale(1.0001, 1.0001);
        }
        66.1017% {
            transform: translateY(-0.0085px) scale(1.0002, 1.0002);
        }
        67.7966% {
            transform: translateY(-0.0084px) scale(1.0002, 1.0002);
        }
        69.4915% {
            transform: translateY(-0.0077px) scale(1.0001, 1.0001);
        }
        71.1864% {
            transform: translateY(-0.0065px) scale(1.0001, 1.0001);
        }
        72.8814% {
            transform: translateY(-0.0052px) scale(1.0001, 1.0001);
        }
        74.5763% {
            transform: translateY(-0.0039px) scale(1.0001, 1.0001);
        }
        76.2712% {
            transform: translateY(-0.0027px) scale(1.0001, 1.0001);
        }
        77.9661% {
            transform: translateY(-0.0018px) scale(1, 1);
        }
        79.6610% {
            transform: translateY(-0.001px) scale(1, 1);
        }
        81.3559% {
            transform: translateY(-0.0004px) scale(1, 1);
        }
        83.0508% {
            transform: translateY(-0.0001px) scale(1, 1);
        }
        84.7458% {
            transform: translateY(.0002px) scale(1, 1);
        }
        86.4407% {
            transform: translateY(.0003px) scale(1, 1);
        }
        88.1356% {
            transform: translateY(.0004px) scale(1, 1);
        }
        89.8305% {
            transform: translateY(.0004px) scale(1, 1);
        }
        91.5254% {
            transform: translateY(.0003px) scale(1, 1);
        }
        93.2203% {
            transform: translateY(.0003px) scale(1, 1);
        }
        94.9153% {
            transform: translateY(.0002px) scale(1, 1);
        }
        96.6102% {
            transform: translateY(.0002px) scale(1, 1);
        }
        98.3051% {
            transform: translateY(.0001px) scale(1, 1);
        }
        100% {
            opacity: 1;
            transform: translateY(.0001px) scale(1, 1);
        }
    }

    @-webkit-keyframes head-3-anim {
        0% {
            opacity: .0178;
            transform: translateY(53.0397px) scale(.0178, .0178);
        }
        1.5385% {
            opacity: .0460;
            transform: translateY(51.5168px) scale(.0460, .0460);
        }
        3.0769% {
            opacity: .0920;
            transform: translateY(49.0301px) scale(.0920, .0920);
        }
        4.6154% {
            opacity: .1569;
            transform: translateY(45.5294px) scale(.1569, .1569);
        }
        6.1538% {
            opacity: .2389;
            transform: translateY(41.0973px) scale(.2389, .2389);
        }
        7.6923% {
            opacity: .3347;
            transform: translateY(35.9277px) scale(.3347, .3347);
        }
        9.2308% {
            opacity: .4391;
            transform: translateY(30.2897px) scale(.4391, .4391);
        }
        10.7692% {
            opacity: .5466;
            transform: translateY(24.4858px) scale(.5466, .5466);
        }
        12.3077% {
            opacity: .6516;
            transform: translateY(18.8122px) scale(.6516, .6516);
        }
        13.8462% {
            opacity: .7495;
            transform: translateY(13.5277px) scale(.7495, .7495);
        }
        15.3846% {
            opacity: .8364;
            transform: translateY(8.8324px) scale(.8364, .8364);
        }
        16.9231% {
            opacity: .9100;
            transform: translateY(4.8579px) scale(.9100, .9100);
        }
        18.4615% {
            opacity: .9691;
            transform: translateY(1.6664px) scale(.9691, .9691);
        }
        20% {
            opacity: 1;
            transform: translateY(-0.7419px) scale(1.0137, 1.0137);
        }
        21.5385% {
            transform: translateY(-2.4176px) scale(1.0448, 1.0448);
        }
        23.0769% {
            transform: translateY(-3.4473px) scale(1.0638, 1.0638);
        }
        24.6154% {
            transform: translateY(-3.9398px) scale(1.0730, 1.0730);
        }
        26.1538% {
            transform: translateY(-4.0124px) scale(1.0743, 1.0743);
        }
        27.6923% {
            transform: translateY(-3.7806px) scale(1.0700, 1.0700);
        }
        29.2308% {
            transform: translateY(-3.3496px) scale(1.0620, 1.0620);
        }
        30.7692% {
            transform: translateY(-2.8095px) scale(1.0520, 1.0520);
        }
        32.3077% {
            transform: translateY(-2.2324px) scale(1.0413, 1.0413);
        }
        33.8462% {
            transform: translateY(-1.6721px) scale(1.0310, 1.0310);
        }
        35.3846% {
            transform: translateY(-1.1651px) scale(1.0216, 1.0216);
        }
        36.9231% {
            transform: translateY(-0.733px) scale(1.0136, 1.0136);
        }
        38.4615% {
            transform: translateY(-0.3849px) scale(1.0071, 1.0071);
        }
        40% {
            opacity: 1;
            transform: translateY(-0.1208px) scale(1.0022, 1.0022);
        }
        41.5385% {
            opacity: .9988;
            transform: translateY(.0659px) scale(.9988, .9988);
        }
        43.0769% {
            opacity: .9966;
            transform: translateY(.1857px) scale(.9966, .9966);
        }
        44.6154% {
            opacity: .9954;
            transform: translateY(.2511px) scale(.9954, .9954);
        }
        46.1538% {
            opacity: .9949;
            transform: translateY(.2747px) scale(.9949, .9949);
        }
        47.6923% {
            opacity: .9950;
            transform: translateY(.2685px) scale(.9950, .9950);
        }
        49.2308% {
            opacity: .9955;
            transform: translateY(.2428px) scale(.9955, .9955);
        }
        50.7692% {
            opacity: .9962;
            transform: translateY(.2063px) scale(.9962, .9962);
        }
        52.3077% {
            opacity: .9969;
            transform: translateY(.1656px) scale(.9969, .9969);
        }
        53.8462% {
            opacity: .9977;
            transform: translateY(.1253px) scale(.9977, .9977);
        }
        55.3846% {
            opacity: .9984;
            transform: translateY(.0887px) scale(.9984, .9984);
        }
        56.9231% {
            opacity: .9989;
            transform: translateY(.0574px) scale(.9989, .9989);
        }
        58.4615% {
            opacity: .9994;
            transform: translateY(.0322px) scale(.9994, .9994);
        }
        60% {
            opacity: .9998;
            transform: translateY(.0131px) scale(.9998, .9998);
        }
        61.5385% {
            opacity: 1;
            transform: translateY(-0.0004px) scale(1, 1);
        }
        63.0769% {
            transform: translateY(-0.0092px) scale(1.0002, 1.0002);
        }
        64.6154% {
            transform: translateY(-0.0141px) scale(1.0003, 1.0003);
        }
        66.1538% {
            transform: translateY(-0.0161px) scale(1.0003, 1.0003);
        }
        67.6923% {
            transform: translateY(-0.0161px) scale(1.0003, 1.0003);
        }
        69.2308% {
            transform: translateY(-0.0147px) scale(1.0003, 1.0003);
        }
        70.7692% {
            transform: translateY(-0.0125px) scale(1.0002, 1.0002);
        }
        72.3077% {
            transform: translateY(-0.0101px) scale(1.0002, 1.0002);
        }
        73.8462% {
            transform: translateY(-0.0077px) scale(1.0001, 1.0001);
        }
        75.3846% {
            transform: translateY(-0.0054px) scale(1.0001, 1.0001);
        }
        76.9231% {
            transform: translateY(-0.0036px) scale(1.0001, 1.0001);
        }
        78.4615% {
            transform: translateY(-0.002px) scale(1, 1);
        }
        80% {
            transform: translateY(-0.0009px) scale(1, 1);
        }
        81.5385% {
            transform: translateY(-0.0001px) scale(1, 1);
        }
        83.0769% {
            transform: translateY(.0004px) scale(1, 1);
        }
        84.6154% {
            transform: translateY(.0007px) scale(1, 1);
        }
        86.1538% {
            transform: translateY(.0009px) scale(1, 1);
        }
        87.6923% {
            transform: translateY(.0009px) scale(1, 1);
        }
        89.2308% {
            transform: translateY(.0008px) scale(1, 1);
        }
        90.7692% {
            transform: translateY(.0007px) scale(1, 1);
        }
        92.3077% {
            transform: translateY(.0005px) scale(1, 1);
        }
        93.8462% {
            transform: translateY(.0004px) scale(1, 1);
        }
        95.3846% {
            transform: translateY(.0003px) scale(1, 1);
        }
        96.9231% {
            transform: translateY(.0002px) scale(1, 1);
        }
        98.4615% {
            transform: translateY(.0001px) scale(1, 1);
        }
        100% {
            opacity: 1;
            transform: translateY(.0001px) scale(1, 1);
        }
    }

    @-webkit-keyframes head-4-anim {
        0% {
            opacity: .0036;
            transform: translateY(53.8066px) scale(.0036, .0036);
        }
        1.7857% {
            opacity: .0112;
            transform: translateY(53.3939px) scale(.0112, .0112);
        }
        3.5714% {
            opacity: .0265;
            transform: translateY(52.5668px) scale(.0265, .0265);
        }
        5.3571% {
            opacity: .0524;
            transform: translateY(51.1686px) scale(.0524, .0524);
        }
        7.1429% {
            opacity: .0912;
            transform: translateY(49.0760px) scale(.0912, .0912);
        }
        8.9286% {
            opacity: .1440;
            transform: translateY(46.2232px) scale(.1440, .1440);
        }
        10.7143% {
            opacity: .2108;
            transform: translateY(42.6163px) scale(.2108, .2108);
        }
        12.5000% {
            opacity: .2901;
            transform: translateY(38.3347px) scale(.2901, .2901);
        }
        14.2857% {
            opacity: .3792;
            transform: translateY(33.5229px) scale(.3792, .3792);
        }
        16.0714% {
            opacity: .4746;
            transform: translateY(28.3723px) scale(.4746, .4746);
        }
        17.8571% {
            opacity: .5722;
            transform: translateY(23.1004px) scale(.5722, .5722);
        }
        19.6429% {
            opacity: .6680;
            transform: translateY(17.9267px) scale(.6680, .6680);
        }
        21.4286% {
            opacity: .7583;
            transform: translateY(13.0531px) scale(.7583, .7583);
        }
        23.2143% {
            opacity: .8399;
            transform: translateY(8.6473px) scale(.8399, .8399);
        }
        25.0000% {
            opacity: .9105;
            transform: translateY(4.8318px) scale(.9105, .9105);
        }
        26.7857% {
            opacity: .9689;
            transform: translateY(1.6802px) scale(.9689, .9689);
        }
        28.5714% {
            opacity: 1;
            transform: translateY(-0.7827px) scale(1.0145, 1.0145);
        }
        30.3571% {
            transform: translateY(-2.5753px) scale(1.0477, 1.0477);
        }
        32.1429% {
            transform: translateY(-3.7516px) scale(1.0695, 1.0695);
        }
        33.9286% {
            transform: translateY(-4.3905px) scale(1.0813, 1.0813);
        }
        35.7143% {
            transform: translateY(-4.5866px) scale(1.0849, 1.0849);
        }
        37.5000% {
            transform: translateY(-4.4404px) scale(1.0822, 1.0822);
        }
        39.2857% {
            transform: translateY(-4.05px) scale(1.0750, 1.0750);
        }
        41.0714% {
            transform: translateY(-3.5055px) scale(1.0649, 1.0649);
        }
        42.8571% {
            transform: translateY(-2.8841px) scale(1.0534, 1.0534);
        }
        44.6429% {
            transform: translateY(-2.2483px) scale(1.0416, 1.0416);
        }
        46.4286% {
            transform: translateY(-1.6452px) scale(1.0305, 1.0305);
        }
        48.2143% {
            transform: translateY(-1.1067px) scale(1.0205, 1.0205);
        }
        50% {
            transform: translateY(-0.6515px) scale(1.0121, 1.0121);
        }
        51.7857% {
            transform: translateY(-0.2875px) scale(1.0053, 1.0053);
        }
        53.5714% {
            opacity: 1;
            transform: translateY(-0.0135px) scale(1.0002, 1.0002);
        }
        55.3571% {
            opacity: .9967;
            transform: translateY(.1776px) scale(.9967, .9967);
        }
        57.1429% {
            opacity: .9945;
            transform: translateY(.2968px) scale(.9945, .9945);
        }
        58.9286% {
            opacity: .9934;
            transform: translateY(.3572px) scale(.9934, .9934);
        }
        60.7143% {
            opacity: .9931;
            transform: translateY(.3724px) scale(.9931, .9931);
        }
        62.5000% {
            opacity: .9934;
            transform: translateY(.3551px) scale(.9934, .9934);
        }
        64.2857% {
            opacity: .9941;
            transform: translateY(.3167px) scale(.9941, .9941);
        }
        66.0714% {
            opacity: .9951;
            transform: translateY(.2666px) scale(.9951, .9951);
        }
        67.8571% {
            opacity: .9961;
            transform: translateY(.2124px) scale(.9961, .9961);
        }
        69.6429% {
            opacity: .9970;
            transform: translateY(.1595px) scale(.9970, .9970);
        }
        71.4286% {
            opacity: .9979;
            transform: translateY(.1115px) scale(.9979, .9979);
        }
        73.2143% {
            opacity: .9987;
            transform: translateY(.0705px) scale(.9987, .9987);
        }
        75.0000% {
            opacity: .9993;
            transform: translateY(.0375px) scale(.9993, .9993);
        }
        76.7857% {
            opacity: .9998;
            transform: translateY(.0124px) scale(.9998, .9998);
        }
        78.5714% {
            opacity: 1;
            transform: translateY(-0.0054px) scale(1.0001, 1.0001);
        }
        80.3571% {
            transform: translateY(-0.0169px) scale(1.0003, 1.0003);
        }
        82.1429% {
            transform: translateY(-0.0232px) scale(1.0004, 1.0004);
        }
        83.9286% {
            transform: translateY(-0.0256px) scale(1.0005, 1.0005);
        }
        85.7143% {
            transform: translateY(-0.0251px) scale(1.0005, 1.0005);
        }
        87.5000% {
            transform: translateY(-0.0228px) scale(1.0004, 1.0004);
        }
        89.2857% {
            transform: translateY(-0.0194px) scale(1.0004, 1.0004);
        }
        91.0714% {
            transform: translateY(-0.0156px) scale(1.0003, 1.0003);
        }
        92.8571% {
            transform: translateY(-0.0119px) scale(1.0002, 1.0002);
        }
        94.6429% {
            transform: translateY(-0.0084px) scale(1.0002, 1.0002);
        }
        96.4286% {
            transform: translateY(-0.0055px) scale(1.0001, 1.0001);
        }
        98.2143% {
            transform: translateY(-0.0031px) scale(1.0001, 1.0001);
        }
        100% {
            opacity: 1;
            transform: translateY(-0.0013px) scale(1, 1);
        }
    }

    @-webkit-keyframes head-5-anim {
        0% {
            opacity: .0007;
            transform: translateY(53.9627px) scale(.0007, .0007);
        }
        1.3699% {
            opacity: .0025;
            transform: translateY(53.8625px) scale(.0025, .0025);
        }
        2.7397% {
            opacity: .0070;
            transform: translateY(53.6246px) scale(.0070, .0070);
        }
        4.1096% {
            opacity: .0156;
            transform: translateY(53.1558px) scale(.0156, .0156);
        }
        5.4795% {
            opacity: .0306;
            transform: translateY(52.3476px) scale(.0306, .0306);
        }
        6.8493% {
            opacity: .0539;
            transform: translateY(51.0902px) scale(.0539, .0539);
        }
        8.2192% {
            opacity: .0872;
            transform: translateY(49.2888px) scale(.0872, .0872);
        }
        9.5890% {
            opacity: .1319;
            transform: translateY(46.8789px) scale(.1319, .1319);
        }
        10.9589% {
            opacity: .1882;
            transform: translateY(43.8388px) scale(.1882, .1882);
        }
        12.3288% {
            opacity: .2556;
            transform: translateY(40.1957px) scale(.2556, .2556);
        }
        13.6986% {
            opacity: .3328;
            transform: translateY(36.0263px) scale(.3328, .3328);
        }
        15.0685% {
            opacity: .4176;
            transform: translateY(31.4508px) scale(.4176, .4176);
        }
        16.4384% {
            opacity: .5070;
            transform: translateY(26.6223px) scale(.5070, .5070);
        }
        17.8082% {
            opacity: .5979;
            transform: translateY(21.7127px) scale(.5979, .5979);
        }
        19.1781% {
            opacity: .6871;
            transform: translateY(16.8978px) scale(.6871, .6871);
        }
        20.5479% {
            opacity: .7714;
            transform: translateY(12.3424px) scale(.7714, .7714);
        }
        21.9178% {
            opacity: .8484;
            transform: translateY(8.1883px) scale(.8484, .8484);
        }
        23.2877% {
            opacity: .9158;
            transform: translateY(4.5454px) scale(.9158, .9158);
        }
        24.6575% {
            opacity: .9725;
            transform: translateY(1.4862px) scale(.9725, .9725);
        }
        26.0274% {
            opacity: 1;
            transform: translateY(-0.9554px) scale(1.0177, 1.0177);
        }
        27.3973% {
            transform: translateY(-2.7819px) scale(1.0515, 1.0515);
        }
        28.7671% {
            transform: translateY(-4.0276px) scale(1.0746, 1.0746);
        }
        30.1370% {
            transform: translateY(-4.7517px) scale(1.0880, 1.0880);
        }
        31.5068% {
            transform: translateY(-5.0309px) scale(1.0932, 1.0932);
        }
        32.8767% {
            transform: translateY(-4.9516px) scale(1.0917, 1.0917);
        }
        34.2466% {
            transform: translateY(-4.6028px) scale(1.0852, 1.0852);
        }
        35.6164% {
            transform: translateY(-4.07px) scale(1.0754, 1.0754);
        }
        36.9863% {
            transform: translateY(-3.4305px) scale(1.0635, 1.0635);
        }
        38.3562% {
            transform: translateY(-2.75px) scale(1.0509, 1.0509);
        }
        39.7260% {
            transform: translateY(-2.0814px) scale(1.0385, 1.0385);
        }
        41.0959% {
            transform: translateY(-1.4636px) scale(1.0271, 1.0271);
        }
        42.4658% {
            transform: translateY(-0.9228px) scale(1.0171, 1.0171);
        }
        43.8356% {
            transform: translateY(-0.4734px) scale(1.0088, 1.0088);
        }
        45.2055% {
            opacity: 1;
            transform: translateY(-0.1199px) scale(1.0022, 1.0022);
        }
        46.5753% {
            opacity: .9974;
            transform: translateY(.1404px) scale(.9974, .9974);
        }
        47.9452% {
            opacity: .9941;
            transform: translateY(.3161px) scale(.9941, .9941);
        }
        49.3151% {
            opacity: .9922;
            transform: translateY(.4190px) scale(.9922, .9922);
        }
        50.6849% {
            opacity: .9914;
            transform: translateY(.4628px) scale(.9914, .9914);
        }
        52.0548% {
            opacity: .9915;
            transform: translateY(.4615px) scale(.9915, .9915);
        }
        53.4247% {
            opacity: .9921;
            transform: translateY(.4282px) scale(.9921, .9921);
        }
        54.7945% {
            opacity: .9931;
            transform: translateY(.3747px) scale(.9931, .9931);
        }
        56.1644% {
            opacity: .9942;
            transform: translateY(.3106px) scale(.9942, .9942);
        }
        57.5342% {
            opacity: .9955;
            transform: translateY(.2438px) scale(.9955, .9955);
        }
        58.9041% {
            opacity: .9967;
            transform: translateY(.1798px) scale(.9967, .9967);
        }
        60.2740% {
            opacity: .9977;
            transform: translateY(.1224px) scale(.9977, .9977);
        }
        61.6438% {
            opacity: .9986;
            transform: translateY(.0739px) scale(.9986, .9986);
        }
        63.0137% {
            opacity: .9994;
            transform: translateY(.0350px) scale(.9994, .9994);
        }
        64.3836% {
            opacity: .9999;
            transform: translateY(.0057px) scale(.9999, .9999);
        }
        65.7534% {
            opacity: 1;
            transform: translateY(-0.0148px) scale(1.0003, 1.0003);
        }
        67.1233% {
            transform: translateY(-0.0277px) scale(1.0005, 1.0005);
        }
        68.4932% {
            transform: translateY(-0.0345px) scale(1.0006, 1.0006);
        }
        69.8630% {
            transform: translateY(-0.0364px) scale(1.0007, 1.0007);
        }
        71.2329% {
            transform: translateY(-0.035px) scale(1.0006, 1.0006);
        }
        72.6027% {
            transform: translateY(-0.0314px) scale(1.0006, 1.0006);
        }
        73.9726% {
            transform: translateY(-0.0265px) scale(1.0005, 1.0005);
        }
        75.3425% {
            transform: translateY(-0.0212px) scale(1.0004, 1.0004);
        }
        76.7123% {
            transform: translateY(-0.016px) scale(1.0003, 1.0003);
        }
        78.0822% {
            transform: translateY(-0.0112px) scale(1.0002, 1.0002);
        }
        79.4521% {
            transform: translateY(-0.0071px) scale(1.0001, 1.0001);
        }
        80.8219% {
            transform: translateY(-0.0038px) scale(1.0001, 1.0001);
        }
        82.1918% {
            transform: translateY(-0.0013px) scale(1, 1);
        }
        83.5616% {
            transform: translateY(.0005px) scale(1, 1);
        }
        84.9315% {
            transform: translateY(.0016px) scale(1, 1);
        }
        86.3014% {
            transform: translateY(.0023px) scale(1, 1);
        }
        87.6712% {
            transform: translateY(.0025px) scale(1, 1);
        }
        89.0411% {
            transform: translateY(.0025px) scale(1, 1);
        }
        90.4110% {
            transform: translateY(.0023px) scale(1, 1);
        }
        91.7808% {
            transform: translateY(.0019px) scale(1, 1);
        }
        93.1507% {
            transform: translateY(.0016px) scale(1, 1);
        }
        94.5205% {
            transform: translateY(.0012px) scale(1, 1);
        }
        95.8904% {
            transform: translateY(.0008px) scale(1, 1);
        }
        97.2603% {
            transform: translateY(.0005px) scale(1, 1);
        }
        98.6301% {
            transform: translateY(.0003px) scale(1, 1);
        }
        100% {
            opacity: 1;
            transform: translateY(.0001px) scale(1, 1);
        }
    }

    @-webkit-keyframes head-6-anim {
        0% {
            opacity: .0001;
            transform: translateY(53.9930px) scale(.0001, .0001);
        }
        1.2987% {
            opacity: .0005;
            transform: translateY(53.9704px) scale(.0005, .0005);
        }
        2.5974% {
            opacity: .0017;
            transform: translateY(53.9083px) scale(.0017, .0017);
        }
        3.8961% {
            opacity: .0043;
            transform: translateY(53.7685px) scale(.0043, .0043);
        }
        5.1948% {
            opacity: .0093;
            transform: translateY(53.4960px) scale(.0093, .0093);
        }
        6.4935% {
            opacity: .0181;
            transform: translateY(53.0204px) scale(.0181, .0181);
        }
        7.7922% {
            opacity: .0322;
            transform: translateY(52.2602px) scale(.0322, .0322);
        }
        9.0909% {
            opacity: .0531;
            transform: translateY(51.1316px) scale(.0531, .0531);
        }
        10.3896% {
            opacity: .0823;
            transform: translateY(49.5575px) scale(.0823, .0823);
        }
        11.6883% {
            opacity: .1208;
            transform: translateY(47.4782px) scale(.1208, .1208);
        }
        12.9870% {
            opacity: .1692;
            transform: translateY(44.8610px) scale(.1692, .1692);
        }
        14.2857% {
            opacity: .2277;
            transform: translateY(41.7064px) scale(.2277, .2277);
        }
        15.5844% {
            opacity: .2953;
            transform: translateY(38.0522px) scale(.2953, .2953);
        }
        16.8831% {
            opacity: .3709;
            transform: translateY(33.9721px) scale(.3709, .3709);
        }
        18.1818% {
            opacity: .4524;
            transform: translateY(29.5720px) scale(.4524, .4524);
        }
        19.4805% {
            opacity: .5374;
            transform: translateY(24.9815px) scale(.5374, .5374);
        }
        20.7792% {
            opacity: .6232;
            transform: translateY(20.3447px) scale(.6232, .6232);
        }
        22.0779% {
            opacity: .7072;
            transform: translateY(15.8086px) scale(.7072, .7072);
        }
        23.3766% {
            opacity: .7868;
            transform: translateY(11.5126px) scale(.7868, .7868);
        }
        24.6753% {
            opacity: .8597;
            transform: translateY(7.5788px) scale(.8597, .8597);
        }
        25.9740% {
            opacity: .9240;
            transform: translateY(4.1046px) scale(.9240, .9240);
        }
        27.2727% {
            opacity: .9786;
            transform: translateY(1.1580px) scale(.9786, .9786);
        }
        28.5714% {
            opacity: 1;
            transform: translateY(-1.2247px) scale(1.0227, 1.0227);
        }
        29.8701% {
            transform: translateY(-3.0381px) scale(1.0563, 1.0563);
        }
        31.1688% {
            transform: translateY(-4.3048px) scale(1.0797, 1.0797);
        }
        32.4675% {
            transform: translateY(-5.0707px) scale(1.0939, 1.0939);
        }
        33.7662% {
            transform: translateY(-5.3993px) scale(1.1000, 1.1000);
        }
        35.0649% {
            transform: translateY(-5.3657px) scale(1.0994, 1.0994);
        }
        36.3636% {
            transform: translateY(-5.0499px) scale(1.0935, 1.0935);
        }
        37.6623% {
            transform: translateY(-4.5316px) scale(1.0839, 1.0839);
        }
        38.9610% {
            transform: translateY(-3.8857px) scale(1.0720, 1.0720);
        }
        40.2597% {
            transform: translateY(-3.1781px) scale(1.0589, 1.0589);
        }
        41.5584% {
            transform: translateY(-2.4645px) scale(1.0456, 1.0456);
        }
        42.8571% {
            transform: translateY(-1.7879px) scale(1.0331, 1.0331);
        }
        44.1558% {
            transform: translateY(-1.1798px) scale(1.0218, 1.0218);
        }
        45.4545% {
            transform: translateY(-0.6597px) scale(1.0122, 1.0122);
        }
        46.7532% {
            opacity: 1;
            transform: translateY(-0.2373px) scale(1.0044, 1.0044);
        }
        48.0519% {
            opacity: .9984;
            transform: translateY(.0862px) scale(.9984, .9984);
        }
        49.3506% {
            opacity: .9941;
            transform: translateY(.3163px) scale(.9941, .9941);
        }
        50.6494% {
            opacity: .9914;
            transform: translateY(.4629px) scale(.9914, .9914);
        }
        51.9481% {
            opacity: .9900;
            transform: translateY(.5389px) scale(.9900, .9900);
        }
        53.2468% {
            opacity: .9897;
            transform: translateY(.5583px) scale(.9897, .9897);
        }
        54.5455% {
            opacity: .9901;
            transform: translateY(.5354px) scale(.9901, .9901);
        }
        55.8442% {
            opacity: .9911;
            transform: translateY(.4833px) scale(.9911, .9911);
        }
        57.1429% {
            opacity: .9923;
            transform: translateY(.4136px) scale(.9923, .9923);
        }
        58.4416% {
            opacity: .9938;
            transform: translateY(.3359px) scale(.9938, .9938);
        }
        59.7403% {
            opacity: .9952;
            transform: translateY(.2579px) scale(.9952, .9952);
        }
        61.0390% {
            opacity: .9966;
            transform: translateY(.1849px) scale(.9966, .9966);
        }
        62.3377% {
            opacity: .9978;
            transform: translateY(.1206px) scale(.9978, .9978);
        }
        63.6364% {
            opacity: .9988;
            transform: translateY(.0669px) scale(.9988, .9988);
        }
        64.9351% {
            opacity: .9995;
            transform: translateY(.0245px) scale(.9995, .9995);
        }
        66.2338% {
            opacity: 1;
            transform: translateY(-0.0069px) scale(1.0001, 1.0001);
        }
        67.5325% {
            transform: translateY(-0.0284px) scale(1.0005, 1.0005);
        }
        68.8312% {
            transform: translateY(-0.0413px) scale(1.0008, 1.0008);
        }
        70.1299% {
            transform: translateY(-0.0473px) scale(1.0009, 1.0009);
        }
        71.4286% {
            transform: translateY(-0.0481px) scale(1.0009, 1.0009);
        }
        72.7273% {
            transform: translateY(-0.0451px) scale(1.0008, 1.0008);
        }
        74.0260% {
            transform: translateY(-0.0397px) scale(1.0007, 1.0007);
        }
        75.3247% {
            transform: translateY(-0.0331px) scale(1.0006, 1.0006);
        }
        76.6234% {
            transform: translateY(-0.0261px) scale(1.0005, 1.0005);
        }
        77.9221% {
            transform: translateY(-0.0194px) scale(1.0004, 1.0004);
        }
        79.2208% {
            transform: translateY(-0.0133px) scale(1.0002, 1.0002);
        }
        80.5195% {
            transform: translateY(-0.0081px) scale(1.0002, 1.0002);
        }
        81.8182% {
            transform: translateY(-0.004px) scale(1.0001, 1.0001);
        }
        83.1169% {
            transform: translateY(-0.0009px) scale(1, 1);
        }
        84.4156% {
            transform: translateY(.0013px) scale(1, 1);
        }
        85.7143% {
            opacity: 1;
            transform: translateY(.0027px) scale(1, 1);
        }
        87.0130% {
            opacity: .9999;
            transform: translateY(.0034px) scale(.9999, .9999);
        }
        88.3117% {
            transform: translateY(.0037px) scale(.9999, .9999);
        }
        89.6104% {
            transform: translateY(.0036px) scale(.9999, .9999);
        }
        90.9091% {
            transform: translateY(.0032px) scale(.9999, .9999);
        }
        92.2078% {
            opacity: .9999;
            transform: translateY(.0027px) scale(.9999, .9999);
        }
        93.5065% {
            opacity: 1;
            transform: translateY(.0022px) scale(1, 1);
        }
        94.8052% {
            transform: translateY(.0016px) scale(1, 1);
        }
        96.1039% {
            transform: translateY(.0012px) scale(1, 1);
        }
        97.4026% {
            transform: translateY(.0007px) scale(1, 1);
        }
        98.7013% {
            transform: translateY(.0004px) scale(1, 1);
        }
        100% {
            opacity: 1;
            transform: translateY(.0001px) scale(1, 1);
        }
    }

    @-webkit-keyframes head-7-anim {
        0% {
            opacity: 0;
            transform: translateY(53.9987px) scale(0, 0);
        }
        1.0870% {
            opacity: .0001;
            transform: translateY(53.9939px) scale(.0001, .0001);
        }
        2.1739% {
            opacity: .0004;
            transform: translateY(53.9787px) scale(.0004, .0004);
        }
        3.2609% {
            opacity: .0011;
            transform: translateY(53.9404px) scale(.0011, .0011);
        }
        4.3478% {
            opacity: .0026;
            transform: translateY(53.8572px) scale(.0026, .0026);
        }
        5.4348% {
            opacity: .0056;
            transform: translateY(53.6962px) scale(.0056, .0056);
        }
        6.5217% {
            opacity: .0109;
            transform: translateY(53.4127px) scale(.0109, .0109);
        }
        7.6087% {
            opacity: .0194;
            transform: translateY(52.9506px) scale(.0194, .0194);
        }
        8.6957% {
            opacity: .0325;
            transform: translateY(52.2458px) scale(.0325, .0325);
        }
        9.7826% {
            opacity: .0513;
            transform: translateY(51.2306px) scale(.0513, .0513);
        }
        10.8696% {
            opacity: .0770;
            transform: translateY(49.8406px) scale(.0770, .0770);
        }
        11.9565% {
            opacity: .1107;
            transform: translateY(48.0213px) scale(.1107, .1107);
        }
        13.0435% {
            opacity: .1530;
            transform: translateY(45.7358px) scale(.1530, .1530);
        }
        14.1304% {
            opacity: .2042;
            transform: translateY(42.9705px) scale(.2042, .2042);
        }
        15.2174% {
            opacity: .2641;
            transform: translateY(39.7396px) scale(.2641, .2641);
        }
        16.3043% {
            opacity: .3317;
            transform: translateY(36.0862px) scale(.3317, .3317);
        }
        17.3913% {
            opacity: .4059;
            transform: translateY(32.0817px) scale(.4059, .4059);
        }
        18.4783% {
            opacity: .4848;
            transform: translateY(27.8219px) scale(.4848, .4848);
        }
        19.5652% {
            opacity: .5663;
            transform: translateY(23.4210px) scale(.5663, .5663);
        }
        20.6522% {
            opacity: .6481;
            transform: translateY(19.0036px) scale(.6481, .6481);
        }
        21.7391% {
            opacity: .7278;
            transform: translateY(14.6966px) scale(.7278, .7278);
        }
        22.8261% {
            opacity: .8033;
            transform: translateY(10.6207px) scale(.8033, .8033);
        }
        23.9130% {
            opacity: .8725;
            transform: translateY(6.8826px) scale(.8725, .8725);
        }
        25.0000% {
            opacity: .9339;
            transform: translateY(3.5691px) scale(.9339, .9339);
        }
        26.0870% {
            opacity: .9863;
            transform: translateY(.7423px) scale(.9863, .9863);
        }
        27.1739% {
            opacity: 1;
            transform: translateY(-1.5619px) scale(1.0289, 1.0289);
        }
        28.2609% {
            transform: translateY(-3.3344px) scale(1.0617, 1.0617);
        }
        29.3478% {
            transform: translateY(-4.5908px) scale(1.0850, 1.0850);
        }
        30.4348% {
            transform: translateY(-5.3682px) scale(1.0994, 1.0994);
        }
        31.5217% {
            transform: translateY(-5.7205px) scale(1.1059, 1.1059);
        }
        32.6087% {
            transform: translateY(-5.7136px) scale(1.1058, 1.1058);
        }
        33.6957% {
            transform: translateY(-5.4198px) scale(1.1004, 1.1004);
        }
        34.7826% {
            transform: translateY(-4.9131px) scale(1.0910, 1.0910);
        }
        35.8696% {
            transform: translateY(-4.2648px) scale(1.0790, 1.0790);
        }
        36.9565% {
            transform: translateY(-3.5398px) scale(1.0656, 1.0656);
        }
        38.0435% {
            transform: translateY(-2.7942px) scale(1.0517, 1.0517);
        }
        39.1304% {
            transform: translateY(-2.0737px) scale(1.0384, 1.0384);
        }
        40.2174% {
            transform: translateY(-1.4128px) scale(1.0262, 1.0262);
        }
        41.3043% {
            transform: translateY(-0.8351px) scale(1.0155, 1.0155);
        }
        42.3913% {
            opacity: 1;
            transform: translateY(-0.3543px) scale(1.0066, 1.0066);
        }
        43.4783% {
            opacity: .9995;
            transform: translateY(.0250px) scale(.9995, .9995);
        }
        44.5652% {
            opacity: .9944;
            transform: translateY(.3050px) scale(.9944, .9944);
        }
        45.6522% {
            opacity: .9909;
            transform: translateY(.4937px) scale(.9909, .9909);
        }
        46.7391% {
            opacity: .9888;
            transform: translateY(.6025px) scale(.9888, .9888);
        }
        47.8261% {
            opacity: .9881;
            transform: translateY(.6450px) scale(.9881, .9881);
        }
        48.9130% {
            opacity: .9882;
            transform: translateY(.6358px) scale(.9882, .9882);
        }
        50% {
            opacity: .9891;
            transform: translateY(.5888px) scale(.9891, .9891);
        }
        51.0870% {
            opacity: .9904;
            transform: translateY(.5171px) scale(.9904, .9904);
        }
        52.1739% {
            opacity: .9920;
            transform: translateY(.4317px) scale(.9920, .9920);
        }
        53.2609% {
            opacity: .9937;
            transform: translateY(.3419px) scale(.9937, .9937);
        }
        54.3478% {
            opacity: .9953;
            transform: translateY(.2548px) scale(.9953, .9953);
        }
        55.4348% {
            opacity: .9968;
            transform: translateY(.1753px) scale(.9968, .9968);
        }
        56.5217% {
            opacity: .9980;
            transform: translateY(.1066px) scale(.9980, .9980);
        }
        57.6087% {
            opacity: .9991;
            transform: translateY(.0504px) scale(.9991, .9991);
        }
        58.6957% {
            opacity: .9999;
            transform: translateY(.0068px) scale(.9999, .9999);
        }
        59.7826% {
            opacity: 1;
            transform: translateY(-0.0246px) scale(1.0005, 1.0005);
        }
        60.8696% {
            transform: translateY(-0.0452px) scale(1.0008, 1.0008);
        }
        61.9565% {
            transform: translateY(-0.0567px) scale(1.0011, 1.0011);
        }
        63.0435% {
            transform: translateY(-0.0609px) scale(1.0011, 1.0011);
        }
        64.1304% {
            transform: translateY(-0.0596px) scale(1.0011, 1.0011);
        }
        65.2174% {
            transform: translateY(-0.0545px) scale(1.0010, 1.0010);
        }
        66.3043% {
            transform: translateY(-0.0471px) scale(1.0009, 1.0009);
        }
        67.3913% {
            transform: translateY(-0.0386px) scale(1.0007, 1.0007);
        }
        68.4783% {
            transform: translateY(-0.0299px) scale(1.0006, 1.0006);
        }
        69.5652% {
            transform: translateY(-0.0217px) scale(1.0004, 1.0004);
        }
        70.6522% {
            transform: translateY(-0.0144px) scale(1.0003, 1.0003);
        }
        71.7391% {
            transform: translateY(-0.0083px) scale(1.0002, 1.0002);
        }
        72.8261% {
            transform: translateY(-0.0034px) scale(1.0001, 1.0001);
        }
        73.9130% {
            transform: translateY(.0002px) scale(1, 1);
        }
        75.0000% {
            opacity: 1;
            transform: translateY(.0026px) scale(1, 1);
        }
        76.0870% {
            opacity: .9999;
            transform: translateY(.0042px) scale(.9999, .9999);
        }
        77.1739% {
            transform: translateY(.0049px) scale(.9999, .9999);
        }
        78.2609% {
            transform: translateY(.0050px) scale(.9999, .9999);
        }
        79.3478% {
            transform: translateY(.0048px) scale(.9999, .9999);
        }
        80.4348% {
            transform: translateY(.0042px) scale(.9999, .9999);
        }
        81.5217% {
            transform: translateY(.0035px) scale(.9999, .9999);
        }
        82.6087% {
            opacity: .9999;
            transform: translateY(.0028px) scale(.9999, .9999);
        }
        83.6957% {
            opacity: 1;
            transform: translateY(.0021px) scale(1, 1);
        }
        84.7826% {
            transform: translateY(.0014px) scale(1, 1);
        }
        85.8696% {
            transform: translateY(.0009px) scale(1, 1);
        }
        86.9565% {
            transform: translateY(.0005px) scale(1, 1);
        }
        88.0435% {
            transform: translateY(.0001px) scale(1, 1);
        }
        89.1304% {
            transform: translateY(-0.0001px) scale(1, 1);
        }
        90.2174% {
            transform: translateY(-0.0003px) scale(1, 1);
        }
        91.3043% {
            transform: translateY(-0.0003px) scale(1, 1);
        }
        92.3913% {
            transform: translateY(-0.0004px) scale(1, 1);
        }
        93.4783% {
            transform: translateY(-0.0004px) scale(1, 1);
        }
        94.5652% {
            transform: translateY(-0.0003px) scale(1, 1);
        }
        95.6522% {
            transform: translateY(-0.0003px) scale(1, 1);
        }
        96.7391% {
            transform: translateY(-0.0002px) scale(1, 1);
        }
        97.8261% {
            transform: translateY(-0.0002px) scale(1, 1);
        }
        98.9130% {
            transform: translateY(-0.0001px) scale(1, 1);
        }
        100% {
            opacity: 1;
            transform: translateY(-0.0001px) scale(1, 1);
        }
    }

    @-webkit-keyframes head-8-anim {
        0% {
            opacity: 0;
            transform: translateY(53.9998px) scale(0, 0);
        }
        1.1905% {
            opacity: 0;
            transform: translateY(53.9988px) scale(0, 0);
        }
        2.3810% {
            opacity: .0001;
            transform: translateY(53.9953px) scale(.0001, .0001);
        }
        3.5714% {
            opacity: .0003;
            transform: translateY(53.9854px) scale(.0003, .0003);
        }
        4.7619% {
            opacity: .0007;
            transform: translateY(53.9618px) scale(.0007, .0007);
        }
        5.9524% {
            opacity: .0016;
            transform: translateY(53.9118px) scale(.0016, .0016);
        }
        7.1429% {
            opacity: .0034;
            transform: translateY(53.8156px) scale(.0034, .0034);
        }
        8.3333% {
            opacity: .0066;
            transform: translateY(53.6449px) scale(.0066, .0066);
        }
        9.5238% {
            opacity: .0118;
            transform: translateY(53.3627px) scale(.0118, .0118);
        }
        10.7143% {
            opacity: .0199;
            transform: translateY(52.9230px) scale(.0199, .0199);
        }
        11.9048% {
            opacity: .0320;
            transform: translateY(52.2733px) scale(.0320, .0320);
        }
        13.0952% {
            opacity: .0489;
            transform: translateY(51.3576px) scale(.0489, .0489);
        }
        14.2857% {
            opacity: .0718;
            transform: translateY(50.1204px) scale(.0718, .0718);
        }
        15.4762% {
            opacity: .1016;
            transform: translateY(48.5126px) scale(.1016, .1016);
        }
        16.6667% {
            opacity: .1390;
            transform: translateY(46.4962px) scale(.1390, .1390);
        }
        17.8571% {
            opacity: .1843;
            transform: translateY(44.0501px) scale(.1843, .1843);
        }
        19.0476% {
            opacity: .2375;
            transform: translateY(41.1737px) scale(.2375, .2375);
        }
        20.2381% {
            opacity: .2983;
            transform: translateY(37.8896px) scale(.2983, .2983);
        }
        21.4286% {
            opacity: .3658;
            transform: translateY(34.2443px) scale(.3658, .3658);
        }
        22.6190% {
            opacity: .4388;
            transform: translateY(30.3070px) scale(.4388, .4388);
        }
        23.8095% {
            opacity: .5154;
            transform: translateY(26.1660px) scale(.5154, .5154);
        }
        25.0000% {
            opacity: .5940;
            transform: translateY(21.9240px) scale(.5940, .5940);
        }
        26.1905% {
            opacity: .6724;
            transform: translateY(17.6916px) scale(.6724, .6724);
        }
        27.3810% {
            opacity: .7485;
            transform: translateY(13.5807px) scale(.7485, .7485);
        }
        28.5714% {
            opacity: .8204;
            transform: translateY(9.6975px) scale(.8204, .8204);
        }
        29.7619% {
            opacity: .8864;
            transform: translateY(6.1365px) scale(.8864, .8864);
        }
        30.9524% {
            opacity: .9449;
            transform: translateY(2.9751px) scale(.9449, .9449);
        }
        32.1429% {
            opacity: .9950;
            transform: translateY(.2699px) scale(.9950, .9950);
        }
        33.3333% {
            opacity: 1;
            transform: translateY(-1.9453px) scale(1.0360, 1.0360);
        }
        34.5238% {
            opacity: 1;
            transform: translateY(-3.6599px) scale(1.0678, 1.0678);
        }
        35.7143% {
            opacity: 1;
            transform: translateY(-4.8855px) scale(1.0905, 1.0905);
        }
        36.9048% {
            opacity: 1;
            transform: translateY(-5.653px) scale(1.1047, 1.1047);
        }
        38.0952% {
            opacity: 1;
            transform: translateY(-6.0095px) scale(1.1113, 1.1113);
        }
        39.2857% {
            opacity: 1;
            transform: translateY(-6.0136px) scale(1.1114, 1.1114);
        }
        40.4762% {
            opacity: 1;
            transform: translateY(-5.7312px) scale(1.1061, 1.1061);
        }
        41.6667% {
            opacity: 1;
            transform: translateY(-5.2311px) scale(1.0969, 1.0969);
        }
        42.8571% {
            opacity: 1;
            transform: translateY(-4.5808px) scale(1.0848, 1.0848);
        }
        44.0476% {
            opacity: 1;
            transform: translateY(-3.8433px) scale(1.0712, 1.0712);
        }
        45.2381% {
            opacity: 1;
            transform: translateY(-3.0742px) scale(1.0569, 1.0569);
        }
        46.4286% {
            opacity: 1;
            transform: translateY(-2.3201px) scale(1.0430, 1.0430);
        }
        47.6190% {
            opacity: 1;
            transform: translateY(-1.6176px) scale(1.0300, 1.0300);
        }
        48.8095% {
            opacity: 1;
            transform: translateY(-0.9932px) scale(1.0184, 1.0184);
        }
        50% {
            opacity: 1;
            transform: translateY(-0.4634px) scale(1.0086, 1.0086);
        }
        51.1905% {
            opacity: 1;
            transform: translateY(-0.0361px) scale(1.0007, 1.0007);
        }
        52.3810% {
            opacity: .9947;
            transform: translateY(.2886px) scale(.9947, .9947);
        }
        53.5714% {
            opacity: .9904;
            transform: translateY(.5161px) scale(.9904, .9904);
        }
        54.7619% {
            opacity: .9878;
            transform: translateY(.6565px) scale(.9878, .9878);
        }
        55.9524% {
            opacity: .9866;
            transform: translateY(.7226px) scale(.9866, .9866);
        }
        57.1429% {
            opacity: .9865;
            transform: translateY(.7288px) scale(.9865, .9865);
        }
        58.3333% {
            opacity: .9872;
            transform: translateY(.6895px) scale(.9872, .9872);
        }
        59.5238% {
            opacity: .9885;
            transform: translateY(.6184px) scale(.9885, .9885);
        }
        60.7143% {
            opacity: .9902;
            transform: translateY(.5280px) scale(.9902, .9902);
        }
        61.9048% {
            opacity: .9921;
            transform: translateY(.4288px) scale(.9921, .9921);
        }
        63.0952% {
            opacity: .9939;
            transform: translateY(.3292px) scale(.9939, .9939);
        }
        64.2857% {
            opacity: .9956;
            transform: translateY(.2357px) scale(.9956, .9956);
        }
        65.4762% {
            opacity: .9972;
            transform: translateY(.1525px) scale(.9972, .9972);
        }
        66.6667% {
            opacity: .9985;
            transform: translateY(.0822px) scale(.9985, .9985);
        }
        67.8571% {
            opacity: .9995;
            transform: translateY(.0260px) scale(.9995, .9995);
        }
        69.0476% {
            opacity: 1;
            transform: translateY(-0.0164px) scale(1.0003, 1.0003);
        }
        70.2381% {
            opacity: 1;
            transform: translateY(-0.0459px) scale(1.0008, 1.0008);
        }
        71.4286% {
            opacity: 1;
            transform: translateY(-0.0641px) scale(1.0012, 1.0012);
        }
        72.6190% {
            opacity: 1;
            transform: translateY(-0.0729px) scale(1.0013, 1.0013);
        }
        73.8095% {
            opacity: 1;
            transform: translateY(-0.0743px) scale(1.0014, 1.0014);
        }
        75.0000% {
            opacity: 1;
            transform: translateY(-0.0703px) scale(1.0013, 1.0013);
        }
        76.1905% {
            opacity: 1;
            transform: translateY(-0.0627px) scale(1.0012, 1.0012);
        }
        77.3810% {
            opacity: 1;
            transform: translateY(-0.053px) scale(1.0010, 1.0010);
        }
        78.5714% {
            opacity: 1;
            transform: translateY(-0.0425px) scale(1.0008, 1.0008);
        }
        79.7619% {
            opacity: 1;
            transform: translateY(-0.0321px) scale(1.0006, 1.0006);
        }
        80.9524% {
            opacity: 1;
            transform: translateY(-0.0226px) scale(1.0004, 1.0004);
        }
        82.1429% {
            opacity: 1;
            transform: translateY(-0.0143px) scale(1.0003, 1.0003);
        }
        83.3333% {
            opacity: 1;
            transform: translateY(-0.0074px) scale(1.0001, 1.0001);
        }
        84.5238% {
            opacity: 1;
            transform: translateY(-0.002px) scale(1, 1);
        }
        85.7143% {
            opacity: 1;
            transform: translateY(.0019px) scale(1, 1);
        }
        86.9048% {
            opacity: .9999;
            transform: translateY(.0045px) scale(.9999, .9999);
        }
        88.0952% {
            opacity: .9999;
            transform: translateY(.0060px) scale(.9999, .9999);
        }
        89.2857% {
            opacity: .9999;
            transform: translateY(.0066px) scale(.9999, .9999);
        }
        90.4762% {
            opacity: .9999;
            transform: translateY(.0065px) scale(.9999, .9999);
        }
        91.6667% {
            opacity: .9999;
            transform: translateY(.0060px) scale(.9999, .9999);
        }
        92.8571% {
            opacity: .9999;
            transform: translateY(.0053px) scale(.9999, .9999);
        }
        94.0476% {
            opacity: .9999;
            transform: translateY(.0043px) scale(.9999, .9999);
        }
        95.2381% {
            opacity: .9999;
            transform: translateY(.0034px) scale(.9999, .9999);
        }
        96.4286% {
            opacity: 1;
            transform: translateY(.0025px) scale(1, 1);
        }
        97.6190% {
            opacity: 1;
            transform: translateY(.0017px) scale(1, 1);
        }
        98.8095% {
            opacity: 1;
            transform: translateY(.0010px) scale(1, 1);
        }
        100% {
            opacity: 1;
            transform: translateY(.0004px) scale(1, 1);
        }
    }

    /* reaction ver 2 */
    .reactionss-emoji {
        width: auto;
        height: auto;
        float: left;
        display: flex;
        align-items: center;
        border: 1px solid rgba(0, 0, 0, .3);
        background-color: white;
        border-radius: 90px;
        overflow: hidden;
        -webkit-box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.1);
        position: absolute;
        bottom: 100%;
        left: -100px;
        /* display: none; */
    }

    .reactionss-emoji-boder {
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }

    .reactionss-emoji-img {
        width: 35px;
        height: 35px;
    }

    .circle {
        -webkit-transition: .2s ease all;
        transition: .2s ease all;
        -webkit-animation: emo .3s ease-in-out .1s;
        animation: emo .3s ease-in-out .1s;
    }

    .circle:hover {
        -webkit-transform: scale(1.4);
        transform: scale(1.4);
        cursor: pointer;
    }

    .reactionss-emoji-img.circle {
        background-repeat: no-repeat;
        background-size: 35px 35px;
        border-radius: 50%;
    }

    .reactionss-emoji-img.circle.like {
        background-image: url("../../../images/message/like.gif");
        /* animation: tranEmo ease-in .3s; */
    }

    .reactionss-emoji-img.circle.love {
        background-image: url("../../../images/message/love.gif");
        /* animation: tranEmo ease-in .4s; */
    }

    .reactionss-emoji-img.circle.haha {
        background-image: url("../../../images/message/haha.gif");
        /* animation: tranEmo ease-in .5s; */
    }

    .reactionss-emoji-img.circle.wow {
        background-image: url("../../../images/message/wow.gif");
        /* animation: tranEmo ease-in .6s; */
    }

    .reactionss-emoji-img.circle.sad {
        background-image: url("../../../images/message/sad.gif");
        /* animation: tranEmo ease-in .7s; */
    }

    .reactionss-emoji-img.circle.angry {
        background-image: url("../../../images/message/angry.gif");
        /* animation: tranEmo ease-in .8s; */
    }

    .reactionss-message-visible {
        position: relative;
        width: 350px;
        height: auto;
    }

    .reactionss-btn {
        position: relative;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .3);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    @-webkit-keyframes emo {
        0% {
            -webkit-transform: scale(5) translate(0px, -1px);
            transform: scale(5) translate(0px, 400px);
        }
        100% {
            -webkit-transform: scale(1) translate(0px, 0px);
            transform: scale(1) translate(0px, 0px);
        }
    }

    @keyframes emo {
        0% {
            -webkit-transform: scale(5) translate(0px, -1px);
            transform: scale(5) translate(0px, 400px);
        }
        100% {
            -webkit-transform: scale(1) translate(0px, 0px);
            transform: scale(1) translate(0px, 0px);
        }
    }

    @keyframes tranEmo {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translate(0px);
        }
    }

    /* Loadding message */
    .loading-message-content {
        margin: 16px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .spinner-chat-message {
        --color: rgb(255 255 255);
        --fade-color: rgba(255 255 255 / 50%);
        --scale: 1;
        --x-speed: 1;
        position: relative;
        display: block;
        width: 46px;
        height: 46px;
        transform: scale(var(--scale)) rotateZ(0);
        animation: ps-spin calc(15s / var(--x-speed)) linear infinite
    }

    @keyframes ps-spin {
        from {
            transform: scale(var(--scale)) rotateZ(0);
        }
        to {
            transform: scale(var(--scale)) rotateZ(-360deg);
        }
    }

    .spinner-chat-message span {
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .spinner-chat-message span::before,
    .spinner-chat-message span::after {
        content: "";
        position: absolute;
        width: 12px;
        height: 12px;
        top: 50%;
        transform: translateY(-50%) scale(.3);
        background-color: rgba(var(--color) / 50%);
        border-radius: 50%;
        animation: ps-spinner-scale calc(1.2s / var(--x-speed)) linear infinite
    }

    @keyframes ps-spinner-scale {
        0% {
            background-color: var(--fade-color);
            transform: translateY(-50%) scale(.3);
        }
        25% {
            background-color: var(--color);
            transform: translateY(-50%) scale(1);
        }
        80% {
            background-color: var(--fade-color);
            transform: translateY(-50%) scale(.3);
        }
        100% {
            background-color: var(--fade-color);
            transform: translateY(-50%) scale(.3);
        }
    }

    .spinner-chat-message span::before {
        left: 0;
    }

    .spinner-chat-message span::after {
        right: 0;
    }

    .spinner-chat-message span:first-of-type {
        transform: rotateZ(-45deg);
    }

    .spinner-chat-message span:last-of-type {
        transform: rotateZ(45deg);
    }

    .spinner-chat-message span:nth-of-type(2) {
        transform: rotateZ(90deg);
    }

    .spinner-chat-message span:nth-of-type(3)::after {
        animation-delay: calc(0.15s / var(--x-speed));
    }

    .spinner-chat-message span:last-of-type::after {
        animation-delay: calc(.3s / var(--x-speed));
    }

    .spinner-chat-message span:nth-of-type(2)::after {
        animation-delay: calc(.45s / var(--x-speed));
    }

    .spinner-chat-message span:first-of-type::before {
        animation-delay: calc(.6s / var(--x-speed));
    }

    .spinner-chat-message span:nth-of-type(3)::before {
        animation-delay: calc(.75s / var(--x-speed));
    }

    .spinner-chat-message span:last-of-type::before {
        animation-delay: calc(.9s / var(--x-speed));
    }

    .spinner-chat-message span:nth-of-type(2)::before {
        animation-delay: calc(1.05s / var(--x-speed));
    }

    /*  */
    /* reponive */
    /* mobile & tablet */
    /* @media (max-width: 1023px) {

}

@media (max-width: 1000px) {
    #message-boxchat .chater-info {
        display: none;
    }
    #message-boxchat .mesg-area-head {
        width: calc(100% + 300px + 175px);
    }
    #message-boxchat .body-model {
        width: calc(100% + 300px + 175px);
    }
} */

    /* Tablet */
    /* @media (min-width: 740px) and (max-width: 1023px) {

} */

    /* mobile */
    /* @media (max-width: 739px) {

} */


    /* cusstom reponsive */

    .main-visible-message {
        position: fixed;
        left: 175px;
        top: 56px;
        width: calc(100% - 175px);
        height: calc(100vh - 56px);
        display: flex;
    }

    .sidebar-visible-message {
        width: 300px;
        height: 100%;
    }

    .body-message {
        flex: 1;
        height: 100%;
        position: relative;
    }

    .about-message {
        width: 300px;
        height: 100%;
        position: relative;
    }

    .header-chat-message {
        width: 100%;
        height: 68px;

    }

    .body-chat-message {
        width: 100%;
        height: calc(100% - 150px);
    }

    .footer-chat-message {
        width: 100%;
        height: 150px;
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
    }

    @media (max-width: 993px) {
        .sidebar {
            display: none;
        }

        .main-visible-message {
            left: 0;
            width: 100%;
        }
    }

    @media (max-width: 1201px) {
        .about-message {
            display: none;
        }
    }

    @media (max-width: 801px) {
        .sidebar-visible-message {
            display: none;
        }
    }

    :root {
        --primary-color: #0072bc;
        --secondary-color: #f1aa4d;
        --white-color: #fafafb;
        --background-color: #f0f2f5;
        --offline-color: #b5b5be;
        --subtitle-color: #65676b;
        --dark-grey-color: #292932;
        --online-color: #79d861;
        --works-color: #ff5050;
        --text-color: #333;
        --title-color: #050505;
        /*--blue-color: #2aa1f0;*/
        --input-color: #f0f2f5;
        --icon-color: rgb(188 192 196);

        --nav-height: 56px;
        --chat-form-height: 450px;
        --chat-header-height: 48px;
        --chat-footer-height: 50px;
        --chat-form-width: 350px;
        --chat-header-box-width: 90px;
    }

    .w-80 {
        width: 80% !important;
    }

    .icon-font-size-22 {
        font-size: 16.5px !important;
    }

    .m-l-10 {
        margin-left: 10px !important;
    }

    .m-r-10 {
        margin-right: 10px !important;
    }

    .online-status {
        background-color: var(--online-color) !important;
    }

    .works-status {
        background-color: var(--works-color) !important;
    }

    .offline-status {
        background-color: var(--offline-color) !important;
    }

    /* sidebar */
    .side-bar {
        width: 0px;
        padding: 0;
        background-color: var(--white-color);
        position: fixed;
        transition: all 0.1s linear;
        top: var(--nav-height);
        right: 0;
        bottom: 0;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        z-index: 99;
    }

    .nav-button-open {
        position: absolute;
        bottom: 40px;
        right: 0;
        font-size: 18px;
        cursor: pointer;
        color: var(--white-color);
        background: var(--blue-color);
        width: 25px;
        height: 25px;
        outline: none !important;
        border: 2px solid #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .nav-button-open:hover {
        box-shadow: 0 0 10px var(--primary-color);
    }

    .nav-button-open i {
        line-height: 25px;
    }

    .nav-button-open:hover i {
        backface-visibility: hidden;
        animation: motionRight 0.6s linear 1;
    }

    /* Chat-list-sidebar */
    .chat-list-sidebar {
        font-size: 12px;
        overflow-x: hidden;
        overflow-y: auto;
        -ms-overflow-style: none;
        scrollbar-width: none;
        max-height: 100%;
    }
    /* Ẩn thanh scroll */
    .chat-list-sidebar::-webkit-scrollbar {
        display: none;
    }
    /* Chat item sidebar */
    .chat-list-sidebar .chat-item-sidebar {
        position: relative;
        display: flex;
        align-items: center;
        color: var(--offline-color);
        cursor: pointer;
        padding: 6px 10px;
    }

    .chat-list-sidebar .chat-item-sidebar:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-avatar-wrapper {
        width: 34px;
        height: 34px;
        position: relative;
        border-radius: 50%;
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-avatar-wrapper img {
        opacity: 1 !important;
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-avatar-wrapper .chat-item-sidebar-number-label {
        position: absolute;
        top: -3px;
        left: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15px;
        height: 15px;
        line-height: 15px;
        background-color: var(--works-color);
        color: var(--white-color);
        border-radius: 50%;
        font-weight: 500;
        text-align: center;
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-avatar-wrapper::before {
        content: "";
        position: absolute;
        bottom: -4px;
        right: -4px;
        border-radius: 50%;
        height: 12px;
        width: 12px;
        opacity: 1;
        transition: 0.6s linear;
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-avatar-wrapper.online-status::before {
        background-color: var(--online-color);
        border: 1px solid var(--white-color);
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-avatar-wrapper.offline-status::before {
        background-color: var(--offline-color);
        border: 1px solid var(--white-color);
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-avatar-wrapper.works-status::before {
        background-color: var(--works-color);
        border: 1px solid var(--white-color);
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-avatar {
        object-fit: cover;
        object-position: top;
        height: 36px;
        width: 36px;
        border-radius: 50%;
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-number {
        position: absolute;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 45%;
        right: 4%;
        transform: translateY(-50%);
        background-color: var(--works-color);
        border-radius: 50%;
        color: var(--white-color);
        opacity: 1;
        transition: 1s ease-in;
    }

    .chat-item-sidebar-info {
        margin-left: 16px;
        flex: 1;
    }

    .chat-item-sidebar-name,
    .chat-item-sidebar-des {
        white-space: nowrap;
        transition: opacity 0.6s ease;
        opacity: 1;
        margin-left: 14px;
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-name {
        font-size: 14px !important;
        font-weight: 500;
        color: var(--title-color);
        margin-bottom: 2px;
    }

    .chat-list-sidebar .chat-item-sidebar .chat-item-sidebar-des {
        font-size: 12px;
        color: var(--subtitle-color);
        margin-top: 2px;
    }

    .side-bar.collapsed .message:hover .tooltip,
    .features-item:hover .tooltip,
    .category-item:hover .tooltip,
    .chat-new-btn:hover .tooltip {
        top: 50%;
        transform: translateY(-50%);
        transition: all 0.5s ease;
        opacity: 1;
    }

    .side-bar.collapsed {
        width: 47px;
        display: flex;
        flex-direction: column;
        border-left: 1px solid #c4c4c4;
        box-shadow: rgb(99 99 99 / 80%) 0px 2px 8px 0px;
    }

    .side-bar.collapsed .tooltip {
        display: block;
    }

    .side-bar.collapsed .logo-name,
    .side-bar.collapsed .category-header,
    .side-bar.collapsed .chat-header,
    .side-bar.collapsed .chat-new-btn-text,
    .side-bar.collapsed .features-item-text,
    .side-bar.collapsed .inbox-number,
    .side-bar.collapsed .category-item-text,
    .side-bar.collapsed .category-item-number,
    .side-bar.collapsed .message-text,
    .side-bar.collapsed .chat-item-sidebar-name,
    .side-bar.collapsed .chat-item-sidebar-des,
    .side-bar.collapsed .chat-item-sidebar-number,
    .side-bar.collapsed .chat-item-sidebar-status {
        opacity: 0;
        pointer-events: none;
    }

    .side-bar.collapsed .chat-item-sidebar-number {
        transition: 0.1s linear;
    }

    .side-bar.collapsed .chat-list-sidebar {
        margin-left: unset;
        width: 60px;
    }

    .side-bar.collapsed .chat-item-sidebar {
        padding: 6px 4px;
    }

    .side-bar.collapsed .chat-item-sidebar:hover > .chat-item-sidebar-avatar-wrapper {
        box-shadow: 0 0 5px #4267b2;
    }

    .side-bar.collapsed .chat-item-sidebar-avatar:hover {
        opacity: 1 !important;
    }

    .side-bar.collapsed .nav-button-open {
        left: 15px;
    }

    .side-bar.collapsed .nav-button-open:hover i {
        animation: motionLeft 0.6s linear 1;
    }

    .side-bar.collapsed .message-text {
        opacity: 0;
        pointer-events: none;
        transform: translateX(0);
    }
    .side-bar.collapsed .messages-category-icon {
        transform: translateX(0);
    }


    .side-bar.collapsed .inbox-icon .status,
    .side-bar.collapsed .chat-item-sidebar-avatar-wrapper::before {
        opacity: 1;
    }

    .side-bar.collapsed ~ .chat-contain {
        transition: all 0.1s linear;
        right: 50px;
    }

    .side-bar.collapsed ~ .popup-card {
        display: none;
    }

    .side-bar.collapsed > .chat-view-all {
        display: none;
    }

    .side-bar.collapsed > .scroll-prompt {
        display: none;
    }

    /* Chat */
    .chat-contain {
        display: flex;
        flex-direction: row-reverse;
        position: fixed;
        right: 90px;
        bottom: 0px;
        transition: all 0.3s linear;
        width: auto;
        max-width: calc(100% - 175px);
        z-index: 99;
    }

    .chat-contain .active-icon-popup{
        color: #BCC0C4 !important;
    }

    .chat-contain.focus-input .active-icon-popup{
        color: #0084ff !important;
    }

    .list-infor-detail-popup-message .active-icon-popup{
        color: #0084ff !important;
    }

    .chat-form {
        position: relative;
        border-radius: 8px;
        width: var(--chat-form-width);
        height: 450px;
        background-color: #fff;
        border: 1px #ddd5d5 solid;
        box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
    }

    /* Chat header */
    .chat-header {
        height: 48px;
        display: flex;
        padding: 8px 0;
        align-items: center;
        justify-content: space-between;
        max-width: 100%;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        box-shadow: rgb(147 148 149) 0px 20px 30px -12px;
        border-bottom: 1px solid #f1f1f1;
    }

    .chat-header-avatar {
        width: 48px;
        border-radius: 50%;
        padding: 6px 6px 6px 0;
        height: 48px;
        position: relative;
    }

    .chat-avatar-image {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
        cursor: pointer;
    }

    .chat-avatar-image:hover {
        opacity: 1;
    }

    .chat-header-info {
        padding-left: 8px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chat-header-info-avatar {
        display: flex;
        align-items: center;
    }

    .chat-header-info:hover {
        background-color: #f0f2f5;
        border-radius: 8px;
    }

    .header-chat-display {
        padding-left: 0;
    }

    .header-chat-display-name {
        font-size: 14px !important;
        line-height: 14px;
        color: rgba(5, 5, 5, 0.8);
        font-weight: 500;
        margin: 0;
        cursor: pointer;
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        max-width: 150px;
        height: 16px;
    }

    .header-chat-display-category {
        font-size: 12px;
        color: var(--subtitle-color);
        font-weight: 400;
        padding: 0px 0px 1px;
        margin: 0;
        cursor: pointer;
    }

    .header-chat-display-option {
        text-decoration: none;
    }

    .header-chat-display-icon {
        font-size: 20px;
        color: var(--offline-color);
        padding-left: 8px;
        cursor: pointer;
    }

    .chat-box-tools {
        width: var(--chat-header-box-width);
    }

    .chat-box-tools-link {
        text-decoration: none;
    }

    .box-tools-flex {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    .box-tools-flex > div{
        cursor: pointer;
    }

    .chat-box-tools-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        position: relative;
        margin: 7px;
    }

    .box-tools-icon {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        color: var(--icon-color);
        font-size: 18px;
        line-height: 22px !important;
        text-align: center;
    }

    .box-tools-icon:hover {
        background-color: var(--input-color);
    }

    .chat-status {
        position: absolute;
        right: 24%;
        top: 68%;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        border: 1px solid var(--white-color);
    }

    /* Chat body */
    #chat-popup-layout .chat-body {
        width: 100%;
        height: calc(var(--chat-form-height) - var(--chat-header-height) - var(--chat-footer-height));
        -ms-overflow-style: none;
        display: flex;
        flex-direction: column-reverse;
    }

    #chat-body-message-popup{
        display: flex;
        flex-direction: column-reverse;
        overflow-y: auto;
        overflow-x: hidden;
        padding: 0 8px 10px 0;
    }

    #chat-body-message-popup::-webkit-scrollbar-track {
        background-color: transparent;
        border: 1px solid transparent;
    }

    #chat-body-message-popup::-webkit-scrollbar {
        width: 4px;
        background-color: transparent;
    }

    #chat-body-message-popup::-webkit-scrollbar-thumb {
        background-color: transparent;
        box-shadow: unset;
        border: 1px solid transparent;
    }

    #chat-body-message-popup.scroll::-webkit-scrollbar-thumb {
        background-color: rgb(128, 125, 125);
    }

    #chat-body-message-popup .chat-body-message-file {
        width: auto !important;
    }

    #chat-body-message-popup .chat-message-file-content {
        width: calc(100% - 50px) !important;
    }

    #chat-body-message-popup .chat-message-file-name {
        width: 90% !important;
    }

    #chat-body-message-popup .chat-body-message-file img:hover {
        box-shadow: unset !important;
    }

    #chat-body-message-popup .see-item-image-video-grid-download {
        width: 25px;
        height: 25px;
        position: absolute;
        right: 6px;
        top: 6px;
        border-radius: 4px;
        background-color: #fff;
        align-items: center;
        justify-content: center;
        box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
        cursor: pointer;
        display: none;
    }

    #chat-body-message-popup .see-item-image-video-grid-download:hover {
        color: #0084ff !important;
    }

    /* Chat footer */
    #chat-popup-layout .chat-footer-popup {
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2px 8px;
        border-top: 1px solid #dfdfdf;
        min-height: 54px;
    }

    .chat-footer-other-action {
        width: 22px;
        height: 22px;
        z-index: 1;
        position: relative;
        margin-right: 8px;
    }

    .chat-footer-other-action:hover::before {
        display: block;
    }

    .chat-footer-option {
        display: flex;
        align-items: center;
        width: auto;
    }

    .chat-footer-option-icon {
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px !important;
        color: var(--offline-color);
        margin-right: 8px;
        width: 22px;
        height: 22px;
        z-index: 1;
        position: relative;
    }

    .chat-footer-message {
        width: 100%;
        position: relative;
        background: #FFF;
        top: 0;
        outline: none;
        border-radius: 6px;
        transition: all .5s;
        z-index: 99;
    }

    .chat-footer-popup-action {
        max-width: 120px;
        position: absolute;
    }

    .chat-footer-message-input {
        width: 100%;
        min-height: 36px;
        height: auto;
        max-height: 72px;
        border-radius: 11px !important;
        border: none;
        overflow: auto;
        outline: none;
        background-color: var(--input-color);
        color: var(--title-color);
        font-weight: 300;
        font-size: 14px;
        padding: 8px 32px 8px 10px;
        word-wrap: break-word;
        transition: all .3s ease;
    }

    .chat-footer-message-input::-webkit-scrollbar-track {
        background: transparent;
    }

    .chat-footer-message-input::-webkit-scrollbar {
        width: 0px;
        background: transparent;
    }

    .chat-footer-message-input::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .chat-footer-message-animation {
        position: absolute;
        right: -5px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--offline-color);
    }

    .chat-footer-send {
        width: 24px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        position: absolute;
        right: 0;
    }

    .chat-footer-send-button {
        border: none !important;
        outline: none !important;
        width: 25px;
        background-color: #fff;
        margin-left: -8px;
        height: 25px;
    }

    /* Queue */
    .chat-queue {
        width: 60px;
        display: flex;
        flex-direction: column-reverse;
    }

    .chat-queue-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .chat-queue-item {
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chat-queue-item-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
        cursor: pointer;
        margin: 4px 0;
    }

    .chat-queue-item-avatar.multi-chat-show {
        opacity: 0.3;
    }

    .chat-queue-item-avatar-img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .chat-queue-modal {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
        cursor: pointer;
        position: absolute;
        left: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chat-queue-modal-number,
    .chat-queue-modal-plus {
        color: var(--text-color);
        font-weight: 500;
        font-size: 18px;
    }

    .chat-queue-item-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
        cursor: pointer;
        color: var(--text-color);
        background-color: var(--white-color);
        font-size: 26px;
        line-height: 48px;
        margin: 5px 0 16px 5px;
    }



    /* emoji css */
    #chat-popup-tms ~ .wrapper {
        z-index: 99;
    }

    /* modal preview image */
    .modal-show-grid-image-toolbar {
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        background-color: #001a33;
        justify-content: center;
        color: var(--white-color);
        font-size: 26px;
    }

    .modal-show-grid-image-toolbar-icon {
        cursor: pointer;
        padding: 8px;
    }

    .modal-show-grid-image-toolbar-icon:hover {
        color: var(--primary-color);
    }

    .modal-show-grid-image-preview {
        width: 100%;
        height: calc(100% - 180px);
        display: flex;
        justify-content: center;
    }

    .modal-show-grid-image-preview-images {
        /*width: 70%;*/
        /*height: 100%;*/
        /*object-position: 50% 50%;*/
        /*border-radius: 5px;*/
        /*align-items: center;*/
        /*position: relative;*/
    }
    .modal-show-grid-image-preview-left-button, .modal-show-grid-image-preview-right-button {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    /*.modal-show-grid-image-preview-left-button:hover, .modal-show-grid-image-preview-right-button:hover {*/
    /*    background-color: rgba(255, 255, 255, 0.3);*/
    /*}*/

    .modal-show-grid-image-preview-left-button {
        left: -10%;
    }

    .modal-show-grid-image-preview-button-icon {
        color: var(--white-color);
        font-size: 60px;
    }

    .modal-show-grid-image-preview-right-button {
        right: -10%;
    }


    .modal-show-grid-image-preview-image {
        /*width: 100%;*/
        /*height: 100%;*/
        object-fit: contain;
        object-position: 50% 50%;
    }

    .modal-show-grid-image-preview-image:hover {
        opacity: 1 !important;
    }

    .modal-show-grid-image-thumbnail {
        width: 100%;
        height: 132px;
        border: 1px solid var(--dark-color);
        display: flex;
        align-items: center;
        justify-content: flex-start;
        list-style: none;
        margin-bottom: 8px;
        overflow-x: auto;
        overflow-y: hidden;
        max-height: 100%;
    }

    /* Ẩn thanh scroll */

    .modal-show-grid-image-thumbnail-images {
        min-width: 16%;
        max-width: 16%;
        height: 100%;
        object-fit: contain;
        border-radius: 5px;
        margin: 0 4px;
    }

    .modal-show-grid-image-thumbnail-image {
        width: 100%;
        height: 100%;
    }

    /* animation */
    @keyframes opacity {
        0% {
            opacity: 0;
        }

        10% {
            opacity: 0.1;
        }

        20% {
            opacity: 0.2;
        }

        30% {
            opacity: 0.3;
        }

        40% {
            opacity: 0.4;
        }

        50% {
            opacity: 0.5;
        }

        60% {
            opacity: 0.6;
        }

        70% {
            opacity: 0.7;
        }

        80% {
            opacity: 0.8;
        }

        90% {
            opacity: 0.9;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes bounce {
        0% {
            transform: translateY(0);
        }

        10% {
            transform: translateY(3px);
        }

        20% {
            transform: translateY(6px);
        }

        30% {
            transform: translateY(9px);
        }

        40% {
            transform: translateY(12px);
        }

        50% {
            transform: translateY(15px);
        }

        60% {
            transform: translateY(18px);
        }

        70% {
            transform: translateY(21px);
        }

        80% {
            transform: translateY(24px);
        }

        90% {
            transform: translateY(27px);
        }

        100% {
            transform: translateY(30px);
        }
    }

    @keyframes motionLeft {
        0% {
            transform: translateX(0);
            opacity: 1;
        }
        50% {
            transform: translateX(20px);
            opacity: 0;
        }
        75% {
            transform: translateX(-20px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes motionRight {
        0% {
            transform: translateX(0);
            opacity: 1;
        }
        50% {
            transform: translateX(-20px);
            opacity: 0;
        }
        75% {
            transform: translateX(20px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes animatop {
        0% {
            opacity: 0;
            right: -500px;
        }
        100% {
            opacity: 1;
            right: 0px;
        }
    }

    @keyframes animainfos {
        0% {
            bottom: 10px;
        }
        100% {
            bottom: -42px;
        }
    }

    @keyframes rotatemagic {
        0% {
            opacity: 0;
            transform: rotate(0deg);
            top: -24px;
            left: -253px;
        }
        100% {
            transform: rotate(-30deg);
            top: -24px;
            left: -78px;
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes move-down {
        0% {
            top: 10%;
        }
        50% {
            top: 35%;
        }
        100% {
            top: 50%;
        }
    }

    @-webkit-keyframes stickerAnimation {
        0% {
            background-position: -12px -12px;
        } 25% {
              background-position: -156px -12px;
          } 50% {
                background-position: -300px -12px;
            } 75% {
                  background-position: -156px -156px;
              } 100% {
                    background-position: -12px -156px;
                }
    }
    .category-work-popup-visible-message{
        border: 2px solid rgb(245, 131, 47);
    }
    .category-group-popup-visible-message{
        border: 2px solid rgb(117, 98, 216);
    }
    .category-individual-popup-visible-message{
        border: 2px solid rgb(21, 168, 95);
    }
    .message-header-list-footer-view-all:before {
        background: #fa6342;
        bottom: 0;
        content: "";
        height: 1px;
        opacity: 0;
        position: absolute;
        visibility: hidden;
        width: 62px;
        transition: all 0.2s linear 0s;
    }
    .message-header-list-footer-view-all:hover:before{
        opacity: 1;
        visibility: visible;
        bottom: 7px;
    }

    /*POPUP CSS MESSAGE ACTION DETAIL*/
    #chat-body-message-popup .chat-body-message-div{
        justify-content: center;
        max-width: 75%;
        min-width: 150px;
        min-height: 40px;
        border-radius: 8px;
        box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
        position: relative;
        border-top-right-radius: 4px;
        animation: slideRight 0.4s cubic-bezier(.4, 0, .2, 1);
        background-color: #f0f4f9;
        color: #001A33;
    }

    #chat-popup-layout .active-icon-popup {
        color: #0084ff;
        text-align: center !important;
    }

    .list-option-footer-popup {
        width: 180px;
        position: absolute;
        bottom: 33px;
        left: -7px;
        height: auto;
        border-radius: 10px;
        background: white;
        box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
    }

    .list-option-footer-popup .item-option-footer-popup{
        padding: 5px;
        display: flex;
        align-items: center;
    }

    .list-option-footer-popup .item-option-footer-popup:hover{
        background-color: whitesmoke;
    }

    .list-option-footer-popup .item-option-footer-popup:first-child:hover{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .list-option-footer-popup .item-option-footer-popup:last-child:hover{
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .list-option-footer-popup .item-option-footer-popup span{
        font-size: 15px !important;
        color: #353c4e;
        cursor: pointer;
    }

    /*POPUP CSS MESSAGE INFOR DETAIL*/
    .list-infor-detail-popup-message {
        width: 348px;
        position: absolute;
        padding: 5px;
        top: 0px;
        max-height: 449px;
        left: -356px;
        height: auto;
        border-radius: 10px;
        background: white;
        z-index: 999;
        border: 1px solid #dfdfdf;
        box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px;
    }

    #data-all-member-visible-message {
        overflow-x: hidden;
        overflow-y: auto;
        max-height: max-content;
    }

    #data-all-member-visible-message::-webkit-scrollbar-track {
        background: transparent;
    }

    #data-all-member-visible-message::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #data-all-member-visible-message::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .list-infor-detail-popup-message .nav-option-footer-popup:hover{
        background-color: whitesmoke;
    }

    .list-infor-detail-popup-message .nav-option-footer-popup{
        padding: 8px;
        font-size: 14px !important;
        line-height: 14px;
        color: rgba(5, 5, 5, 0.8);
        font-weight: 500;
        margin: 0;
        cursor: pointer;
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
    }

    .list-infor-detail-popup-message .nav-option-footer-popup:first-child:hover{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .list-infor-detail-popup-message .nav-option-footer-popup:last-child:hover{
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    /*PINNED POPUP*/
    #pin-visible-message.current-pinned-popup-message {
        width: 100%;
        height: max-content;
        background-color: #fff;
        display: flex;
        align-items: center;
        border-left: 1px solid #dfdfdf;
        padding: 8px;
        position: absolute;
        z-index: 99;
        right: 0;
        box-shadow: rgb(0 0 0 / 20%) 0px 18px 50px -10px;
    }
    /*STICKER CSS POPUP*/
    #chat-popup-layout .icon-search-order-input-visible-message {
        color: #8d8d8d;
        position: absolute;
        left: 10px;
        top: 12px;
        font-size: 14px;
        margin: 3px;
        cursor: pointer;
        z-index: 999;
    }

    #chat-popup-layout .sticker-input-popup-message,
    #chat-popup-layout .sticker-input-visible-message {
        border-radius: 5px;
        box-shadow: 0 0 1px 1px #c7c5c5;
        height: max-content;
        width: 400px;
        background: #ffffff;
        position: absolute;
        bottom: 30px;
        right: 0;
        left: unset !important;
        z-index: 9999;
    }

    #chat-popup-layout .chat-footer-other-action-list i.active {
        color: #0084ff !important;
    }

    #chat-popup-layout .filter-order-visible-message {
        width: 100%;
        padding: 6px 5px;
        display: flex;
    }

    #chat-popup-layout .prev-footer-visible-message {
        border-radius: 100%;
        position: absolute !important;
        top: 6px;
        height: 30px;
        width: 30px;
        border: none;
        box-shadow: 0 3px 7px rgb(0 0 0 / 50%);
        background: #ebebeb;

    }

    #chat-popup-layout .prev-footer-visible-message:before {
        color: #a3a3a3;
        left: 0.25em;
        border-width: 3px 0 0 3px;
        transform: rotate(-45deg);
    }

    #chat-popup-layout .button-footer-visible-message {
        cursor: pointer;
        position: absolute;
        padding: 0;
        margin: 0;
        outline: 0;
        bottom: 0;
        background: transparent;
        transition: all 0.2s linear 0s;
        z-index: 2;
    }

    #chat-popup-layout .button-footer-visible-message:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 0.75em;
        height: 0.75em;
        margin: auto;
        border-style: solid;
    }

    #chat-popup-layout .next-footer-visible-message {
        top: 6px;
        right: 0;
        position: absolute;
        border-radius: 100%;
        height: 30px;
        width: 30px;
        border: none;
        box-shadow: 0 3px 7px rgb(0 0 0 / 50%);
        background: #ebebeb;

    }

    #chat-popup-layout .next-footer-visible-message:before {
        right: 0.25em;
        color: #a3a3a3;
        border-width: 3px 3px 0 0;
        transform: rotate(45deg);
    }

    #chat-popup-layout .footer-sticker-visible-message, .footer-order-visible-message {
        width: 100%;
        /*position: absolute;*/
        bottom: 0;
        padding: 5px;
        border-top: 1px solid #ebe8e8;
        background: #ffffff;
        border-radius: 0 0 5px 5px !important;
    }

    #chat-popup-layout .content-footer-sticker-visible-message {
        height: 42px;
        width: 40px;
        overflow-x: hidden;
    }

    #chat-popup-layout .list-sticker-visible-message {
        display: flex;
        max-width: 100%;
        /*overflow-x: auto;*/
    }

    #chat-popup-layout .list-sticker-visible-message li {
        width: 49px;
        height: 49px;
        padding: 5px;
        border-radius: 5px;
    }

    #chat-popup-layout .list-sticker-visible-message li:hover {
        background-color: #f2f2f2;
        cursor: pointer;
    }

    #chat-popup-layout .list-sticker-visible-message li.active {
        background-color: #acd0e091 !important;
    }

    #chat-popup-layout .list-sticker-visible-message img {
        width: 40px;
    }

    #chat-popup-layout .body-sticker-visible-message, .body-order-visible-message {
        flex-wrap: wrap;
        margin: 0 0 0 11px;
        max-height: 50vh;
        overflow-y: auto;
        display: block;
    }

    #chat-popup-layout .body-sticker-visible-message div {
        border-radius: 5px;
        width: calc(100% / 3 - 10px);
        height: auto;
        object-fit: cover;
        margin: 5px;
        text-align: center;
    }

    #chat-popup-layout .body-sticker-visible-message img {
        width: 90%;
        height: 90%;
    }

    #chat-popup-layout .body-sticker-visible-message div:hover {
        background-color: #f2f2f2;
        cursor: pointer;
    }

    #chat-popup-layout .body-footer-sticker-visible-message {
        height: 50vh;
    }

    #chat-popup-layout .name-sticker-visible-message {
        margin-left: 5px;
    }

    #chat-popup-layout .content-footer-sticker-visible-message {
        background: #e0ebf5;
    }

    #chat-popup-layout #body-visible-message {
        max-height: none;
    }

    #data-sticker-visible-message::-webkit-scrollbar-track {
        background: transparent;
    }

    #data-sticker-visible-message::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #data-sticker-visible-message::-webkit-scrollbar-thumb {
        background: transparent;
    }

    #chat-popup-layout .body-visible-message{
        flex: 1;
        position: relative;
        background: radial-gradient(rgb(221 185 166 / 61%) 31%, rgb(221 185 166 / 61%) 31%, #d2e3ea99 100%);
        /*background: radial-gradient(rgb(236 241 251 / 61%) 31%, rgb(231 242 255 / 61%) 31%, #d2e3ea99 100%);*/
        display: flex;
        flex-direction: column-reverse;
    }

    #number-count-pinned-popup-message {
        border-radius: 52px;
        right: -6px;
        position: absolute;
        top: -7px;
        padding: 4px;
        width: 15px;
        display: flex;
        height: 15px;
        justify-content: center;
        line-height: 8px;
    }

    /*PINNED LIST*/
    #chat-body-message-popup .notify-message-container {
        width: 100%;
        height: auto;
        position: relative;
        margin: 10px 10px 0 10px;
        display: flex;
        z-index: 1;
        align-items: center;
        justify-content: center;
    }

    #get-pinned-list-popup-message{
        flex-wrap: wrap;
    }

    #get-pinned-list-popup-message .pin-details-content-item-visible-message {
        padding: 9px;
        border: 1px solid #e6d7d7;
        margin: auto;
        border-radius: 5px;
        width: 100%;
        background: radial-gradient(rgb(236 241 251 / 61%) 31%, rgb(231 242 255 / 61%) 31%, #d2e3ea99 100%);
        margin-bottom: 4px;
    }

    #get-pinned-list-popup-message .pin-details-content-item-visible-message:hover {
        border: 1px solid #6868ff;
        box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
    }

    #get-pinned-list-popup-message .pin-details-content-image-body  {
        height: 58px;
        margin-right: 5px;
    }

    #get-pinned-list-popup-message .pin-details-content-image-header  {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin: 6px 0;
        object-fit: cover;
        border: 1px solid #c2c2c2;
    }

    #get-pinned-list-popup-message .name-user-pined-content  {
        display: flex;
        flex-direction: column;
    }

    #get-pinned-list-popup-message .pin-details-content-item-header  {
        display: flex;
        align-items: center;
    }

    #get-pinned-list-popup-message .name-user-pined-content {
        font-weight: bold;
        display: inline-grid;
        margin: 5px 10px;
    }

    #get-pinned-list-popup-message .name-user-pined-content .icon-type-pinned  {
        font-weight: normal;
        display: flex;
    }

    #get-pinned-list-popup-message .name-user-pined-content .icon-type-pinned::before {
        font-size: 19px;
        margin-right: 7px;
        color: #0072bb;
    }

    #get-pinned-list-popup-message .pin-details-content-item-body {
        display: flex;
        align-items: center;
    }

    #get-pinned-list-popup-message .name-content-pinned-body {
        /*margin: 5px 10px;*/
    }

    #get-pinned-list-popup-message .name-user-pined-body-content {
        font-weight: bold;
    }

    #get-pinned-list-popup-message .date-pinned-message {
        color: #8f8f8f;
        padding-right: 5px;
        border-right: 2px solid #a9a9a9;
        font-weight: 500;
    }

    #get-pinned-list-popup-message .seen-message-old {
        cursor: pointer;
        color: #0068ff;
    }

    #get-pinned-list-popup-message .content-pined-visible-message {
        white-space: nowrap;
        width: 205px;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: normal;
    }

    .type-name-current-title-show-popup {
        font-style: normal;
        cursor: pointer;
        color: #0068ff;
    }

    #modal-pinned-list-popup-message .modal-body::-webkit-scrollbar-track {
        background: transparent;
    }

    #modal-pinned-list-popup-message .modal-body::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #modal-pinned-list-popup-message .modal-body::-webkit-scrollbar-thumb {
        background: transparent;
    }

    /*MEMBER*/
    #chat-body-message-popup .img-members-about {
        position: relative;
        padding-right: 10px;
    }

    #get-member-list-popup-message .img-members-about img {
        width: 40px;
        height: 40px;
        position: relative;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid #d5d6d9;
    }

    #get-member-list-popup-message .row-member {
        display: flex;
        padding: 10px;
        align-items: center;
        position: relative;
        border-bottom: 1px solid #eaeaea;
    }

    #get-member-list-popup-message .row-member:last-child {
        border-bottom: none;
    }

    #get-member-list-popup-message .info-name-member-about {
        /*padding-left: 10px;*/
    }

    #chat-popup-layout .img-members-about {
        padding-right: 40px;
    }

    #get-member-list-popup-message .wrap-card-search-area-member-about {
        display: flex;
        align-items: center;
        height: 32px;
        width: 100%;
        background-color: #f2f2f2;
        border-radius: 20px;
    }

    #get-member-list-popup-message .wrap-card-search-area-member-about input{
        border: none;
        background-color: transparent;
        width: calc(100% - 50px);
        height: 100%;
        transition: all 0.5s ease-in-out;
    }

    #get-member-list-popup-message .clear-text-area-member-search-about{
        margin: 0px 10px 0px 4px;
        transition: all 0.25s ease-in-out;
        visibility: hidden;
    }

    #get-member-list-popup-message .dropdown-toggle::after{
        display: none;
    }

    #chat-popup-layout .key-member-detail-visible-message {
        position: absolute;
        top: 36px;
        color: #ffcc7d;
        left: 37px;
        background-color: #767676;
        border-radius: 100%;
        padding: 2px;
        font-size: 10px !important;
    }

    #chat-popup-layout .dropdown-action-user-about {
        display: none;
        position: absolute;
        right: 10px;
    }

    #chat-popup-layout .row-member:hover .dropdown-action-user-about {
        display: block;
        width: 32px;
        height: 33px;
        position: absolute;
        cursor: pointer;
    }

    #chat-popup-layout .dropdown-toggle.action-user-member {
        width: 30px;
        height: 30px;
        border: none;
        outline: none;
        border-radius: 50px;
        color: #282828c4;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    #chat-popup-layout .dropdown.dropdown-action-user-about .dropdown-menu-custom{
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
        z-index: 99;
        display: none;
    }

    #chat-popup-layout .dropdown-action-user-about:hover .dropdown-menu-custom{
        display: block !important;
    }

    #modal-member-list-popup-message .modal-body::-webkit-scrollbar-track {
        background: transparent;
    }

    #modal-member-list-popup-message .modal-body::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #modal-member-list-popup-message .modal-body::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .number-person-about {
        font-size: 18px !important;
        margin-bottom: 0;
        line-height: 1.5;
        font-weight: 500;
    }
    /*VOICE POPUP*/
    #chat-body-message-popup .play-audio-body-message {
        display: flex;
        margin-top: 5px;
    }

    #chat-body-message-popup .progress {
        position: relative;
        top: 14px;
        border-radius: 3px;
        height: 4px !important;
        width: 130px;
        background-color: rgb(105, 105, 170, .1);
        margin: 0 15px 0 10px;
        overflow: unset !important;
    }

    #chat-body-message-popup .currentValue {
        position: absolute;
        width: 0;
        height: 100%;
        background-color: #fa6342;
        top: 0;
    }

    #chat-body-message-popup .progress-bar-audio {
        opacity: 0;
        z-index: 9;
    }

    #chat-body-message-popup .media-fixed-progress-bar-dot {
        position: absolute;
        width: 4px;
        height: 4px;
        background-color: #fa6342;
        border-radius: 50%;
        right: 0;
        top: 0;
        transition: 1s linear;
    }

    #chat-body-message-popup .media-fixed-progress-bar-dot:before {
        content: "";
        position: absolute;
        width: 15px;
        height: 15px;
        border: 1px solid #fa6342;
        border-radius: 50%;
        left: -5px;
        top: -5px;
        box-shadow: inset 0 0 3px #fa6342;
    }

    #chat-body-message-popup .animation.media-fixed-progress-bar-dot:before {
        animation: pink-blink-bar 0.5s linear infinite;
    }

    #chat-body-message-popup .icon-dowload-about-visible-message {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 22px;
        width: 22px;
        background-color: #fff;
        border-radius: 5px;
        right: 0px;
        top: 0px;
        cursor: pointer;
    }

    .chat-footer-popup .layout-audio-visible-message {
        height: 35px;
        width: 100%;
        position: relative;
        right: 0px;
        bottom: 2px;
        display: flex;
        border-radius: 30px;
        background-color: #f0f2f5;
        align-items: center;
        padding-top: 0 !important;
    }

    .chat-footer-popup .record_btn {
        border: none;
        outline: none;
        border-radius: 50%;
        width: 25px;
        height: 25px;
    }

    @keyframes recording-core {
        0% {
            box-shadow: 0 0 0 0 rgba(30, 195, 243, 0.5);
        }
        20% {
            box-shadow: 0 0 0 5px rgba(30, 195, 243, 0.4),
            0 0 0 15px rgba(30, 195, 243, 0.4);
        }
        40% {
            box-shadow: 0 0 0 10px rgba(30, 195, 243, 0.4),
            0 0 0 20px rgba(30, 195, 243, 0.3),
            0 0 0 0 rgba(30, 195, 243, 0.3);
        }
        60% {
            box-shadow: 0 0 0 15px rgba(30, 195, 243, 0.3),
            0 0 0 25px rgba(30, 195, 243, 0.2),
            0 0 0 5px rgba(30, 195, 243, 0.3);
        }
        80% {
            box-shadow: 0 0 0 20px rgba(30, 195, 243, 0.2),
            0 0 0 30px rgba(30, 195, 243, 0.2),
            0 0 0 10px rgba(30, 195, 243, 0.2);
        }
        100% {
            box-shadow: 0 0 0 25px rgba(30, 195, 243, 0.1),
            0 0 0 35px rgba(30, 195, 243, 0.1),
            0 0 0 15px rgba(30, 195, 243, 0.1);

        }
    }

    @keyframes recording-exit {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.5);
        }
        20% {
            box-shadow: 0 0 0 5px rgba(255, 0, 0, 0.4),
            0 0 0 15px rgba(255, 0, 0, 0.4);
        }
        40% {
            box-shadow: 0 0 0 10px rgba(255, 0, 0, 0.4),
            0 0 0 20px rgba(255, 0, 0, 0.3),
            0 0 0 0 rgba(255, 0, 0, 0.3);
        }
        60% {
            box-shadow: 0 0 0 15px rgba(255, 0, 0, 0.3),
            0 0 0 25px rgba(255, 0, 0, 0.2),
            0 0 0 5px rgba(255, 0, 0, 0.3);
        }
        80% {
            box-shadow: 0 0 0 20px rgba(255, 0, 0, 0.2),
            0 0 0 30px rgba(255, 0, 0, 0.2),
            0 0 0 10px rgba(255, 0, 0, 0.2);
        }
        100% {
            box-shadow: 0 0 0 25px rgba(255, 0, 0, 0.1),
            0 0 0 35px rgba(255, 0, 0, 0.1),
            0 0 0 15px rgba(255, 0, 0, 0.1);

        }
    }

    .chat-footer-popup #recorder.recording-exit {
        animation: recording-exit 1.1s ease-out infinite;
    }

    .chat-footer-popup .record_btn.recording {
        animation: recording-core 1.1s ease-out infinite;
    }

    .chat-footer-popup .record-microphone-popup-message {
        color: white;
    }

    .chat-footer-popup .time-record-visible-message {
        font-weight: 900;
        font-size: 16px !important;
    }

    .chat-footer-popup .icon-send-off-record{
        position: absolute;
        right: 9px;
        /*top: 4.5px;*/
    }

    .chat-footer-popup .icon-send-off-record i{
        cursor: pointer;
        padding: 5px 6px 5px 6px;
        border-radius: 50%;
        font-size: 16px;
    }

    .chat-footer-popup .icon-send-off-record i:hover {
        background-color: #56a1ee;
    }

    .check-voice-layout-audio-popup-message {
        left: 10px;
        position: absolute;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /*LIST CART*/
    #chat-popup-layout .box-cart-restaurant-popup-message{
        width: 348px;
        position: absolute;
        top: -413px;
        max-height: 449px;
        left: -364px;
        height: auto;
        border-radius: 10px;
        background: white;
        z-index: 999;
        border: 1px solid #dfdfdf;
        box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px
    }

    #chat-popup-layout .box-cart-restaurant-popup-message::-webkit-scrollbar-track {
        background: transparent;
    }

    #chat-popup-layout .box-cart-restaurant-popup-message::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #chat-popup-layout .box-cart-restaurant-popup-message::-webkit-scrollbar-thumb {
        background: transparent;
    }

    #chat-popup-layout .header-cart-restaurant-popup-message {
        align-items: center;
    }

    #chat-popup-layout .wrap-card-search-area-cart-about{
        display: flex;
        align-items: center;
        height: 32px;
        width: 100%;
        background-color: #f2f2f2;
        border-radius: 20px;
    }

    #chat-popup-layout .text-filter-cart-restaurant-popup-message{
        border: none;
        background-color: transparent;
        width: calc(100% - 50px);
        height: 100%;
        transition: all 0.5s ease-in-out;
    }

    #chat-popup-layout .body-cart-restaurant-popup-message{
        height: auto;
        max-height: 308px;
        overflow-x: hidden;
        overflow-y: auto;
        background-color: #f2f2f2;
    }

    #chat-popup-layout .icon-cart-title-popup-message {
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px !important;
        color: var(--offline-color);
        margin-right: 8px;
        width: 22px;
        height: 22px;
        z-index: 1;
        position: relative;
    }

    .item-cart-restaurant-popup-message {
        padding: 8px;
        margin-top: 5px;
        display: flex;
        align-items: center;
    }

    .list-cart-restaurant-popup-message:hover {
        background-color: #f3f3f3;
    }

    .list-cart-restaurant-popup-message:hover .action-cart-restaurant-popup-message{
        transform: translateX(0px);
    }

    .item-cart-restaurant-popup-message h4 {
        font-size: 16px !important;
        color: #535353;
    }

    .item-cart-restaurant-popup-message span {
        font-size: 14px !important;
    }

    .item-cart-restaurant-popup-message p {
        font-size: 14px !important;
        color: #8f8f8f;
    }

    .item-cart-restaurant-popup-message i {
        width: 140px;
        font-style: normal;
    }

    .information-cart-restaurant-popup-message {
        width: 260px;
        margin-right: 5px;
    }

    .action-cart-restaurant-popup-message {
        width: 60px;
        display: flex;
        /*background-color: #0072bc;*/
        height: 67px;
        align-items: center;
        justify-content: center;
        transition: all 0.2s cubic-bezier(0.4, 0, 1, 1);
        transform: translateX(85px);
    }

    .clear-text-area-cart-search-about {
        visibility: hidden;
        opacity: 0;
    }
    .detail-cart-restaurant-popup-message {
        display: flex;
        flex-direction: column;
    }

    /*CSS CARD MỚI*/
    #chat-popup-layout .body-cart-restaurant-popup-message::-webkit-scrollbar-track {
        background: transparent;
    }

    #chat-popup-layout .body-cart-restaurant-popup-message::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #chat-popup-layout .body-cart-restaurant-popup-message::-webkit-scrollbar-thumb {
        background: transparent;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message {
        background-color: #ffffff;
        border-radius: 7px;
        width: 100%;
        height: 140px;
        margin: 10px;
        position: relative;
        display: flex;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message:hover .css-translateX-card-order {
        transform: translateX(-9px);
        transition: all 0.3s ease-in-out;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message:hover .left-information-order {
        color: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    /*#chat-popup-layout .card-information-order-restaurant-supplier-message:after .css-translateX-card-order {*/
    /*    transform: translateX(-80px);*/
    /*    transition: all ease 0.5s;*/
    /*}*/

    #chat-popup-layout .card-information-order-restaurant-supplier-message .left-information-order{
        width: 25%;
        border-right: 1px solid #dfdfdf;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .left-information-order i{
        font-size: 33px;
        position: absolute;
        top: 58px;
        z-index: 0;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .css-translateX-card-order{
        width: 92.5px;
        height: 100%;
        position: absolute;
        background-color: #52a43a;
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
        transform: translateX(-80px);
        transition: all 0.3s ease-in-out;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .right-information-order{
        display: flex;
        width: 75%;
        padding-left: 10px;
        flex-wrap: wrap;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .detail-information-card{
        padding: 5px;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .detail-information-card p{
        color: #919aa3;
        font-weight: 500;
        font-size: 14px !important;
        padding-left: 5px;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .detail-information-card i{
        color: #919aa3;
        font-size: 14px !important;
        font-style: normal;
    }


    #chat-popup-layout .card-information-order-restaurant-supplier-message .content-infor{
        border-bottom: 1px solid #dfdfdf;
        height: max-content;
        width: 100%;
        padding-left: 5px;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .buttun-action-card-order{
        padding: 7px;
        margin: 7px 5px 7px 0px;
        font-weight: 700;
    }


    /*SEND LINK MESSAGE*/
    .layout-preview-input-popup-message {
        cursor: pointer;
        padding: 10px;
        position: relative;
        width: 100%;
        background: #c4dcfaab;
        display: flex;
        height: 65px;
    }

    .img-class-popup-message {
        margin-right: 5px;
    }

    .img-thumbnail-input-popup-message {
        height: 50px;
        width: 50px;
        object-fit: cover;
    }

    .text-input-thumbnail-popup-message {
        border-left: 3px solid #f36868;
        padding-left: 5px;
        text-overflow: ellipsis;
        white-space: normal;
        overflow: hidden;
    }

    .title-thumbnail-video-popup-message {
        color: #403b3b;
        font-weight: 600;
        width: 214px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .footer-text-input-thumbnail-popup-message {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        width: 238px;
    }

    .icon-close-thumbnail-link-popup-message {
        color: #a3a3a3;
        cursor: pointer;
        font-size: 18px;
        position: absolute;
        right: 2px;
        top: 2px;
        z-index: 1;
    }

    #chat-body-message-popup .chat-message-link-text img {
        padding: 5px;
        width: 35px;
        height: 35px;
        object-fit: contain;
        background-color: #ffffff;
        margin-right: 7px;
    }

    #chat-body-message-popup .chat-message-link-text {
        display: flex;
        margin-right: 7px;
    }

    #chat-body-message-popup .chat-message-link-info-title-link {
        font-size: 15px !important;
        line-height: 15px;
        font-weight: 500;
        overflow: hidden;
        color: #403b3b;
        width: 100%;
        word-break: break-all;
        text-overflow: ellipsis;
    }

    #chat-body-message-popup .chat-body-message-text-link {
        width: 233px;
        text-overflow: ellipsis;
        overflow: hidden;
        max-height: 60px;
        padding: 5px 10px 5px 10px;
    }

    #chat-body-message-popup .chat-message-link-thumbnail {
        width: 100%;
        padding: 10px 10px 0px 10px;
    }

    /*REPLY POPUP*/
    #chat-popup-layout .layout-reply-input-popup-message {
        display: flex;
        height: max-content;
        width: 100%;
        position: relative;
        background: #ffffff;
        margin: 0;
        cursor: pointer;
    }

    #chat-popup-layout .layout-thumbnail-reply-popup-message {
        padding: 10px;
        position: relative;
        width: 100%;
        background: #c4dcfaab;
        display: flex;
    }

    #chat-popup-layout .icon-close-thumbnail-image-close-reply-popup {
        color: #a3a3a3;
        cursor: pointer;
        font-size: 18px;
        position: absolute;
        right: 5px;
        top: 5px;
        z-index: 1;
    }

    #chat-popup-layout .img-thumbnail-link-input-popup-message {
        height: 50px;
        width: 50px;
    }

    #chat-popup-layout .text-input-thumbnail-reply-popup-message {
        border-left: 3px solid #f36868;
        padding-left: 5px;
        text-overflow: ellipsis;
        white-space: normal;
        overflow: hidden;
    }

    #chat-popup-layout .icon-reply-thumbnail-reply-popup-message {
        color: #6c6767;
    }

    #chat-popup-layout .name-reply-popup-message {
        color: #6c6767;
        font-weight: 600;
    }

    #chat-popup-layout .chat-body-message-item-reply {
        cursor: pointer;
        display: flex;
        align-items: center;
        background-color: #C8DEFF;
        padding: 8px;
        margin: 8px 8px 0 8px;
        border-radius: 8px;
    }

    #chat-popup-layout .chat-body-message-item-reply-image, #chat-body-message-popup .chat-body-audio-image {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        overflow: hidden;
        margin-right: 5px;
    }

    #chat-popup-layout .chat-body-message-item-reply-info {
        border-left: 2px solid #f36868;
        line-height: 17px;
        padding-left: 5px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        width: calc(100% - 40px);
    }

    #chat-popup-layout .chat-body-message-item-reply-info.reply-message-image {
        width: 100%
    }

    #chat-popup-layout .reply-body-message-link {
        width: 100%;
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #0068FF;
    }

    #chat-popup-layout .chat-body-message-item-reply-text {
        font-size: 14px !important;
        color: #001A33;
        word-wrap: break-word;
        word-break: break-all;
        margin: 8px 8px 0 8px;
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
    }

    #chat-popup-layout .chat-body-message-item-reply-name {
        color: #131a20;
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 165px;
    }

    #chat-popup-layout .chat-body-message-item-reply-type {
        color: #72808E;
        font-size: 14px;
        font-weight: 400;
        max-width: 100%;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    #chat-popup-layout .img-class-reply-popup-message {
        margin-right: 5px;
    }

    #chat-popup-layout .footer-text-input-thumbnail-reply-popup-message {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    #chat-popup-layout .chat-body-message-item-reply-img {
        width: 100%;
        height: 100%;
    }

    /*ACTION SCROLL BACK MESSAGE CURRENT*/
    #chat-popup-layout .action-scroll-back-current-message-popup {
        background-color: #fff;
        text-align: center;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        line-height: 30px;
        position: absolute;
        right: 10px;
        display: flex;
        bottom: 10px;
        border: 1px solid #dfdfdf;
        z-index: 2;
        color: #726e6e;
        justify-content: center;
        align-items: center;
    }

    #chat-popup-layout .action-scroll-back-current-message-popup:hover {
        color: black;
        border: 1px solid #3674e0;
    }

    /*TYPING POPUP*/
    #typing-data-message-popup-message.chat-bubble {
        width: 55px;
        bottom: 10px;
        left: 10px;
        position: absolute;
        background-color: #E6F8F1;
        padding: 10px;
        border-radius: 20px;
        border-bottom-left-radius: 2px;
        z-index: 2;
    }

    #typing-data-message-popup-message .typing {
        align-items: center;
        display: flex;
        height: 17px;
    }

    #typing-data-message-popup-message .typing .dot {
        animation: mercuryTypingAnimation 1.8s infinite ease-in-out;
        background-color: #6CAD96;
        /* / / rgba(20, 105, 69, .7); */
        border-radius: 50%;
        height: 7px;
        margin-right: 4px;
        vertical-align: middle;
        width: 7px;
        display: inline-block;
    }

    #typing-data-message-popup-message .typing .dot:nth-child(1) {
        animation-delay: 200ms;
    }

    #typing-data-message-popup-message .typing .dot:nth-child(2) {
        animation-delay: 300ms;
    }

    #typing-data-message-popup-message .typing .dot:nth-child(3) {
        animation-delay: 400ms;
    }

    #typing-data-message-popup-message .typing .dot:last-child {
        margin-right: 0;
    }

    #chat-body-message-popup .chat-body-message-element.message-left {
        margin-top: 40px;
        max-width: 318px !important;
    }

    #chat-body-message-popup .notify-message-content {
        max-width: 80%;
        height: auto;
        position: relative;
        /* word-wrap: break-word; */
        background: rgb(255 255 255 / 50%);
        color: #72808e;
        border-radius: 20px;
        padding: 2px 10px;
        z-index: 2;
        align-items: center;
        text-align: center;
        word-break: normal;
        /* display: flex; */
        display: inline-block;
        min-inline-size: unset;
    }


    /* Grid image */
    .body-visible-message .wrapper {
        max-width: 100%;
        min-width: 200px;
        margin: 0 auto;
        position: relative;
        border-radius: 0;
    }

    .body-visible-message .gallery__link {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 4px;
    }

    .body-visible-message .gallery__image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1);
        /*transition: transform .5s, filter .5s;*/
        border-radius: 4px;
    }

    .body-visible-message .gallery__link:hover .gallery__image {
        /*transform: scale(1.2);*/
    }

    .body-visible-message .more-photos {
        color: #fff;
        font-size: 30px;
        font-weight: 500;
        height: 100%;
        left: 50%;
        position: absolute;
        text-align: center;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 1;
    }

    .body-visible-message .more-photos::after {
        background: rgba(128, 128, 128, 0.7) none repeat scroll 0 0;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }

    .body-visible-message .more-photos > span {
        font-size: 24px !important;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 9;
    }

    /* 1 image */
    .body-visible-message .wrapper.one-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    .body-visible-message .wrapper.one-image .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 4;
    }


    /* 2 image */
    .body-visible-message .wrapper.two-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    .body-visible-message .wrapper.two-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 4;
    }

    .body-visible-message .wrapper.two-image .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 4;
    }

    /* 3 image */
    .body-visible-message .wrapper.three-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    .body-visible-message .wrapper.three-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 4;
    }

    .body-visible-message .wrapper.three-image .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.three-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    /* 3 ảnh version 2 */
    .body-visible-message .wrapper.three-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    .body-visible-message .wrapper.three-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.three-image-other .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.three-image-other .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    /* 4 ảnh */
    .body-visible-message .wrapper.four-image .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(4, 65px);
        gap: 4px;
    }

    .body-visible-message .wrapper.four-image .gallery__item--1 {
        grid-column: 1 / span 6;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.four-image .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.four-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.four-image .gallery__item--4 {
        grid-column: 5 / span 2;
        grid-row: 3 / span 2;
    }

    /* 4 ảnh version 2*/
    .body-visible-message .wrapper.four-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(6, 40px);
        gap: 4px;
    }

    .body-visible-message .wrapper.four-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 6;
    }

    .body-visible-message .wrapper.four-image-other .gallery__item--2 {
        grid-column: 5 / span 2;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.four-image-other .gallery__item--3 {
        grid-column: 5 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.four-image-other .gallery__item--4 {
        grid-column: 5 / span 2;
        grid-row: 5 / span 2;
    }

    /* 5 ảnh trở lên */
    .body-visible-message .wrapper.five-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(6, 50px);
        gap: 4px;
    }

    .body-visible-message .wrapper.five-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 3;
    }

    .body-visible-message .wrapper.five-image .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 4 / span 3;
    }

    .body-visible-message .wrapper.five-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.five-image .gallery__item--4 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.five-image .gallery__item--5 {
        grid-column: 3 / span 2;
        grid-row: 5 / span 2;
    }

    /*LIST IMAGE MEMBER SEENED*/
    #chat-body-message-popup .users-thumb-list {
        float: right;
        text-align: center;
    }

    #chat-body-message-popup .users-thumb-list > a:first-child {
        margin-left: 0;
    }

    #chat-body-message-popup .users-thumb-list > a {
        display: inline-block;
        margin-left: -10px;
        position: relative;
    }

    #chat-body-message-popup .users-thumb-list > a img {
        border: 1px solid #fff;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        object-fit: cover;
    }

    .message-header-list-body .tag-orange {
        color: #fa6342;
        font-size: 14px;
        padding-right: 5px;
    }

    .message-header-list-body .tag-friend {
        color: rgb(117, 98, 216);
        font-size: 14px;
        padding-right: 5px;
    }

    .message-header-list-body .tag-greens {
        color: rgb(21, 168, 95);
        font-size: 14px;
        padding-right: 5px;
    }

    /*GIAO DIỆN ĐƠN HÀNG TRONG NỘI DUNG CUỘC TRÒ CHUYỆN*/
    #chat-body-message-popup .card-information-order-restaurant-supplier-message {
        background-color: #ffffff;
        border-radius: 7px;
        width: 100%;
        height: 140px;
        margin: 10px;
        position: relative;
        display: flex;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message:hover .css-translateX-card-order {
        transform: translateX(-38px);
        transition: all 0.3s ease-in-out;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message:hover .left-information-order {
        color: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    /*#chat-body-message-popup .card-information-order-restaurant-supplier-message:after .css-translateX-card-order {*/
    /*    transform: translateX(-80px);*/
    /*    transition: all ease 0.5s;*/
    /*}*/

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .left-information-order{
        width: 25%;
        border-right: 1px solid #dfdfdf;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .left-information-order i{
        font-size: 33px;
        position: absolute;
        top: 58px;
        z-index: 0;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .css-translateX-card-order{
        width: 92.5px;
        height: 100%;
        position: absolute;
        background-color: #52a43a;
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
        transform: translateX(-80px);
        transition: all 0.3s ease-in-out;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .right-information-order{
        display: flex;
        width: 75%;
        padding-left: 0px;
        flex-wrap: wrap;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .detail-information-card{
        padding: 5px;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .detail-information-card p{
        color: #919aa3;
        font-weight: 500;
        font-size: 13px !important;
        padding-left: 5px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .detail-information-card i{
        color: #919aa3;
        font-size: 13px !important;
        font-style: normal;
    }


    #chat-body-message-popup .card-information-order-restaurant-supplier-message .content-infor{
        border-bottom: 1px solid #dfdfdf;
        height: max-content;
        width: 100%;
        padding-left: 5px;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .buttun-action-card-order{
        padding: 7px;
        margin: 7px 5px 7px 0px;
        font-weight: 700;
    }

    /*Vote popup*/
    #chat-body-message-popup .body-message-vote {
        width: 80%;
    }

    #chat-body-message-popup .div-vote {
        width: 100% !important;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #chat-body-message-popup .div-body-message-vote {
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
    }

    #chat-body-message-popup .item-vote {
        position: relative;
        margin: 10px 0;
        background: #eeeeee;
        border-radius: 4px;
        padding: 7px 40px 7px 10px;
        font-weight: 400;
        text-align: left;
        font-size: 14px;
        cursor: pointer;
        display: flex;
        height: 30px;
    }

    #chat-body-message-popup .content-vote {
        position: relative;
        display: inline-block;
        word-break: break-word;
        flex: 1;
        padding: 0 6px;
    }

    #chat-body-message-popup .count-vote {
        top: calc(50% - 10px);
        position: absolute;
        display: inline-block;
        right: 8px;
        line-height: normal;
        font-weight: 600;
        text-align: left;
        font-size: 14px;
        letter-spacing: normal;
    }

    #chat-body-message-popup .notify-message-username {
        font-size: 12px !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 5;
        text-overflow: ellipsis;
        word-break: break-word;
        /* vertical-align: bottom; */
        margin-right: 0;
        overflow: hidden;
        text-align: center;
        display: inline-table;
    }

    #chat-body-message-popup .underline-you {
        cursor: pointer;
        position: relative;
    }

    #chat-body-message-popup .text-report-body-visible-message {
        color: #0068FFFF;
        font-weight: 550;
    }

    #chat-body-message-popup .event-vote-message-content-name {
        text-decoration: none !important;
        color: #646464;
        font-weight: bold;
        font-size: 12px !important;
    }

    /* VOTE */
    #chat-popup-tms .item-detail-vote {
        height: 30px;
        display: flex;
        align-items: center;
    }

    #chat-popup-tms .div-item-vote {
        width: calc(100% - 80px);
        height: 100%;
    }

    #chat-popup-tms .div-vote {
        position: absolute;
        background: #b3d8ff;
        height: 100%;
        border-radius: 4px;
        left: 0;
        top: 0;
    }

    #chat-popup-tms .status-member-message.online {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #00b300;
        border: 2px solid #fff;
    }

    #chat-popup-tms .status-member-message.online {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #00b300;
        border: 2px solid #fff;
    }

    #chat-popup-tms .img-members-about {
        position: relative;
        width: 40px;
        height: 40px;
        margin-right: 8px;
    }

    #chat-popup-tms .img-avt-member-online {
        position: absolute !important;
        top: 0;
        right: 0;
    }

    /*Chat CSS*/

    /*@import url(//db.onlinewebfonts.com/c/0c5e6f133b0b25edfed47aca4ab57676?family=Segoe+UI+Historic);*/

    :root {
        --primary-color: #0072bc;
        --white-color: #fff;
        --message-right-color: #dbf4fb;
        --message-left-color: #e4e6eb;
        --message-text-color: #001A33;
        --black-500: rgba(0, 0, 0, 0.5);
        --icon-option-color: #72808e;
        --offline-color: #b5b5be;
        --subtitle-color: #65676b;
        --dark-grey-color: #292932;
        --online-color: #79d861;
        --works-color: #ff5050;
        --text-color: #333;
        --title-color: #050505;
        /*--blue-color: #2aa1f0;*/
        --input-color: #f0f2f5;
        --icon-color: rgb(188 192 196);

        --nav-height: 56px;
        --chat-form-height: 450px;
        --chat-header-height: 48px;
        --chat-footer-height: 50px;
        --chat-form-width: 300px;
        --chat-header-box-width: 90px;
    }

    #body-modal-translate {
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
    }

    /* Chat body */


    .force-overflow {
        min-height: 10px;
    }

    #chat-body-modal::-webkit-scrollbar-track {
        background: transparent;
    }

    #chat-body-modal::-webkit-scrollbar {
        max-width: 6px;
        overflow: hidden;
        background: transparent;
    }

    #chat-body-modal::-webkit-scrollbar-thumb {
        display: none;
        max-width: 5px;
        background-color: var(--input-color);
    }

    #message-boxchat .chat-body:hover::-webkit-scrollbar-thumb {
        display: block;
    }

    /* No message */
    #message-boxchat .chat-body-no-message {
        height: 170px;
        width: 100%;
        padding: 30px 12px 12px;
        text-align: center;
        color: var(--subtitle-color);
        font-weight: 400;
        font-size: 12px;
        margin-bottom: 20px;
    }

    #message-boxchat .chat-body-no-message-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
    }

    #message-boxchat .chat-body-no-message-text {
        padding: 8px;
    }

    /* Has message chat */
    #message-boxchat .chat-body-message {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column-reverse;
    }

    /* khung chat của 1 người */
    #message-boxchat .chat-body-message-element {
        display: flex;
        width: 100%;
        height: auto;
        margin-top: 0;
        margin-bottom: 24px;
        flex-wrap: nowrap;
        align-items: baseline;
        flex-direction: column;
        position: relative;
    }

    #message-boxchat .chat-body-message-item-max-width {
        display: flex;
        width: 100%;
        height: auto;
    }

    #message-boxchat .message-right .chat-body-message-item-max-width {
        flex-direction: row-reverse;
        align-items: flex-end;
    }

    #message-boxchat .message-left .chat-body-message-item-max-width {
        align-items: flex-start;
        flex-direction: row;
    }

    #message-boxchat .chat-body-message-element-name {
        position: absolute;
        bottom: 100%;
        left: 52px;
    }

    #message-boxchat .chat-body-message-element-name .chat-body-message-element-name-text {
        font-size: 12px !important;
        color: #394e60;
    }

    /* item trong khung */
    #message-boxchat .chat-body-message-element.restaurant-owners .chat-body-message-item {
        border: 1px solid #0072bc;
    }


    #message-boxchat .message-right .chat-body-message-item {
        margin-right: 20px;
        border-top-right-radius: 4px;
        animation: slideRight 0.4s cubic-bezier(.4, 0, .2, 1);
        background-color: var(--message-right-color);
        color: var(--message-text-color);
    }

    #message-boxchat .message-left .chat-body-message-item {
        margin-left: 20px;
        border-top-left-radius: 4px;
        animation: slideLeft 0.4s cubic-bezier(.4, 0, .2, 1);
        background-color: var(--message-left-color);
        color: var(--message-text-color);
    }

    #message-boxchat .chat-footer-message-item {
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 0px;
    }

    #message-boxchat .message-right .chat-footer-message-item {
        flex-direction: row-reverse;
    }

    /* Time */
    #message-boxchat .chat-footer-message-item-time {
        color: var(--black-500);
        font-size: 13px;
        font-weight: 400;
    }

    #message-boxchat .message-right .chat-footer-message-item-time {
        float: right;
        padding-right: 8px;
        padding-bottom: 4px;
        position: relative;
        left: 16px;
    }

    #message-boxchat .message-left .chat-footer-message-item-time {
        float: left;
        padding-left: 8px;
        padding-bottom: 4px;
    }

    #message-boxchat .time-message-ago {
        display: block;
        width: 7em;
        position: relative;
        bottom: 2px;
    }

    /* Option of message */
    #message-boxchat .chat-body-message-item-action-list {
        list-style: none;
        align-items: center;
        width: 72px;
        position: absolute;
        bottom: 0;
        right: calc(100% + 8px);
        display: flex;
        cursor: pointer;
    }

    #message-boxchat .message-right .chat-body-message-item-action-list {
        right: calc(100% + 8px);
    }

    #message-boxchat .message-left .chat-body-message-item-action-list {
        left: calc(100% + 8px);
    }

    #message-boxchat .chat-body-message-item-action-list::before {
        content: "";
        width: 20px;
        height: 40px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: -20px;
    }

    #message-boxchat .chat-body-message-item-action-list .chat-body-message-item-action-item {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        text-align: center;
    }

    #message-boxchat .chat-body-message-item-action-list .chat-body-message-item-action-item:hover {
        background-color: var(--input-color);
    }

    #message-boxchat .chat-body-message-item-action-icon {
        color: var(--icon-option-color);
        font-size: 16px;
        line-height: 24px !important;
    }

    /* reaction of message */
    #message-boxchat .chat-body-message-item-reactions {
        width: 24px;
        height: 24px;
        text-align: center;
        position: absolute;
        bottom: -12px;
        cursor: pointer;
        z-index: 9;
    }

    #message-boxchat .message-right .chat-body-message-item-reactions {
        left: 10px;
    }

    #message-boxchat .message-left .chat-body-message-item-reactions {
        right: 10px;
    }

    #message-boxchat .chat-body-message-item-reactions-group {
        border: 1px solid rgba(0, 0, 0, 0.1);
        background-color: var(--white-color);
        border-radius: 50%;
        width: 100%;
        height: 100%;
    }

    #message-boxchat .chat-body-message-item-reactions-icon {
        color: var(--dark-grey-color);
        font-size: 16px;
        line-height: 24px !important;
    }

    #message-boxchat .chat-body-message-item-reactions-img {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        position: absolute;
        left: 2px;
        bottom: 2px;
    }

    /* List reaction */
    #message-boxchat .message-left .reactions-select-number {
        flex: 1;
        display: flex;
        position: relative;
        flex-direction: row-reverse;
    }

    #message-boxchat .message-right .reactions-select-number {
        width: 100%;
        min-width: 130px;
        display: flex;
        position: relative;
    }

    #message-boxchat .chat-body-message-item-action-checked-list {
        max-width: 110px;
        height: auto;
        border-radius: 20px;
        background-color: #fff;
        display: inline-flex;
        align-items: center;
        position: relative;
        margin-bottom: 0;
        padding: 0 4px;
        overflow: hidden;
    }

    #message-boxchat .message-right .chat-body-message-item-action-checked-list {
        bottom: 4px;
        left: 44px;
        flex-direction: row-reverse;
    }

    #message-boxchat .message-left .chat-body-message-item-action-checked-list {
        bottom: 4px;
        right: 40px;
    }

    /* image */
    .chat-message-images {
        margin-bottom: 8px;
    }

    /* One image */
    #message-boxchat .one-image {
        max-width: 100%;
        width: 100%;
        max-height: 300px;
        object-fit: cover;
    }

    #message-boxchat .message-right .one-image {
        border-radius: 0;
        border-top-left-radius: 12px;
    }

    #message-boxchat .message-left .one-image {
        border-radius: 0;
        border-top-right-radius: 12px;
    }

    #message-boxchat .chat-body-message-item.show-image-right {
        max-width: 63.33333334%;
        max-height: 400px;
        margin-right: 10px;
        background-color: transparent !important;
        box-shadow: unset !important;
    }

    #message-boxchat .chat-body-message-item.show-image-left {
        max-width: 63.33333334%;
        max-height: 400px;
        margin-left: 10px;
        background-color: transparent !important;
        box-shadow: unset !important;
    }

    #message-boxchat .chat-body-message-item-img {
        width: 100%;
        position: relative;
    }

    /* Grid image */
    #message-boxchat .wrapper {
        max-width: 100%;
        min-width: 200px;
        margin-bottom: 8px !important;
        margin: 0 auto;
        position: relative;
        border-radius: 0;
    }

    #message-boxchat .gallery__link {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 4px;
    }

    #message-boxchat .gallery__image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.05);
        transition: transform .5s,
        filter .5s;
        border-radius: 4px;
    }

    #message-boxchat .gallery__link:hover .gallery__image {
        transform: scale(1.2);
    }

    #message-boxchat .more-photos {
        color: #fff;
        font-size: 30px;
        font-weight: 500;
        height: 100%;
        left: 50%;
        position: absolute;
        text-align: center;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 1;
    }

    #message-boxchat .more-photos::after {
        background: rgba(128, 128, 128, 0.7) none repeat scroll 0 0;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }

    #message-boxchat .more-photos > span {
        font-size: 24px !important;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 99;
    }

    /* 5 ảnh trở lên */


    #message-boxchat .wrapper.five-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 3;
    }

    #message-boxchat .wrapper.five-image .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 4 / span 3;
    }

    #message-boxchat .wrapper.five-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.five-image .gallery__item--4 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.five-image .gallery__item--5 {
        grid-column: 3 / span 2;
        grid-row: 5 / span 2;
    }

    /* 5 ảnh trở lên version 2 */
    #message-boxchat .wrapper.five-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(6, 40px);
        gap: 4px;
    }

    #message-boxchat .wrapper.five-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 40px);
        gap: 4px;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 6;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 3;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--3 {
        grid-column: 5 / span 2;
        grid-row: 1 / span 3;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--4 {
        grid-column: 3 / span 2;
        grid-row: 4 / span 3;
    }

    #message-boxchat .wrapper.five-image-other .gallery__item--5 {
        grid-column: 5 / span 2;
        grid-row: 4 / span 3;
    }

    /* 4 ảnh */
    #message-boxchat .wrapper.four-image .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(4, 65px);
        gap: 4px;
    }

    #message-boxchat .wrapper.four-image .gallery__item--1 {
        grid-column: 1 / span 6;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.four-image .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.four-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.four-image .gallery__item--4 {
        grid-column: 5 / span 2;
        grid-row: 3 / span 2;
    }

    /* 4 ảnh version 2*/
    #message-boxchat .wrapper.four-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(6, 40px);
        gap: 4px;
    }

    #message-boxchat .wrapper.four-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 6;
    }

    #message-boxchat .wrapper.four-image-other .gallery__item--2 {
        grid-column: 5 / span 2;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.four-image-other .gallery__item--3 {
        grid-column: 5 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.four-image-other .gallery__item--4 {
        grid-column: 5 / span 2;
        grid-row: 5 / span 2;
    }

    /* 3 ảnh */
    #message-boxchat .wrapper.three-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    #message-boxchat .wrapper.three-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 4;
    }

    #message-boxchat .wrapper.three-image .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.three-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    /* 3 ảnh version 2 */
    #message-boxchat .wrapper.three-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    #message-boxchat .wrapper.three-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.three-image-other .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 3 / span 2;
    }

    #message-boxchat .wrapper.three-image-other .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    /* 2 ảnh */
    #message-boxchat .wrapper.two-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    #message-boxchat .wrapper.two-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 4;
    }

    #message-boxchat .wrapper.two-image .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 4;
    }

    /* 2 ảnh version 2*/
    #message-boxchat .wrapper.two-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    #message-boxchat .wrapper.two-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 2;
    }

    #message-boxchat .wrapper.two-image-other .gallery__item--2 {
        grid-column: 1 / span 4;
        grid-row: 3 / span 2;
    }

    /* File */
    #message-boxchat .chat-message-file {
        padding: 8px;
        max-width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        margin-bottom: 4px;
    }

    #message-boxchat .chat-message-file-icon {
        width: 32px;
        height: auto;
        color: var(--text-color);
        font-size: 28px;
        text-align: center;
        margin-right: 8px;
        position: relative;
    }

    #message-boxchat .chat-message-file-icon-image {
        width: 32px;
        height: 32px;
        object-fit: cover;
    }

    #message-boxchat .chat-message-file-icon-i {
        line-height: 28px !important;
        width: 28px;
    }

    #message-boxchat .chat-message-file-info {
        max-width: 80%;
        display: block;
        padding: 0 12px 0 4px;
    }


    #message-boxchat .chat-message-file-size {
        display: block;
    }

    #message-boxchat .chat-message-file-send {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.05);
        color: var(--text-color);
        padding: 4px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px;
        position: absolute;
        top: 1.3em;
        right: 0.5em;
    }

    #message-boxchat .chat-message-file-send:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    #message-boxchat .sticker-message-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        z-index: 99;
    }

    /* link message */
    #message-boxchat .chat-message-link {
        height: auto;
    }

    #message-boxchat .chat-message-link-text {
        width: 100%;
        height: auto;
    }

    #message-boxchat .chat-message-link-url {
        width: 100%;
        color: var(--primary-color);
        font-size: 15px;
        margin-right: 4px;
        word-wrap: break-word;
        cursor: pointer;
        padding: 8px;
    }

    #message-boxchat .chat-message-link-info-title-link {
        font-size: 14px;
        text-decoration: none;
        color: var(--primary-color);
    }

    #message-boxchat .chat-message-link-info-title-link:hover {
        text-decoration: underline;
        color: var(--dark-color);
    }


    #message-boxchat .chat-message-link-url:hover {
        text-decoration: underline;
    }

    #message-boxchat .chat-message-text {
        font-size: 14px !important;
        color: #001A33;
        word-wrap: break-word;
        word-break: break-all;
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
    }

    #message-boxchat .chat-message-link-thumbnail {
        width: 100%;
        max-height: 280px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: relative;
        margin-bottom: 16px;
    }

    #message-boxchat .chat-message-link-thumbnail-img {
        width: 100%;
        max-height: 280px;
        border: 1px solid var(--border-color);
        object-fit: cover;
    }

    #message-boxchat .chat-message-link-info {
        cursor: pointer;
        padding: 0 8px 8px 8px;
    }


    #message-boxchat .chat-message-link-info-title:hover {
        color: var(--primary-color);
    }

    #message-boxchat .chat-message-link-info-description {
        font-size: 14px;
        color: var(--dark-grey-color);
        font-weight: 400;
        margin-bottom: 3px;
        word-wrap: break-word;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #message-boxchat .chat-message-link-info-url {
        font-size: 12px;
        color: var(--primary-color);
        text-transform: lowercase;
        word-wrap: break-word;
    }

    /* message link ver-2 */
    #message-boxchat .chat-message-link-icon-title {
        width: 100%;
        color: var(--primary-color);
        font-size: 15px;
        margin-right: 4px;
        word-wrap: break-word;
        cursor: pointer;
        padding: 8px 8px 0 8px;
    }

    #message-boxchat .chat-message-link-icon-title:hover {
        text-decoration: underline;
    }

    #message-boxchat .chat-message-link-icon-info {
        display: flex;
        align-items: flex-start;
        padding: 0 8px;
    }

    #message-boxchat .chat-message-link-icon-info-img {
        width: 75px;
        height: 75px;
        border-radius: 4px;
    }

    #message-boxchat .chat-message-link-icon-info-img img {
        width: 75px;
        height: 75px;
        border-radius: 4px;
        object-fit: cover;
    }

    #message-boxchat .chat-message-link-icon-info-text {
        margin-left: 16px;
    }

    #message-boxchat .chat-message-link-icon-info-text-title {
        font-size: 14px;
        color: #001A33;
        font-weight: 500;
        margin-bottom: 3px;
        word-wrap: break-word;
        cursor: pointer;
    }

    #message-boxchat .chat-message-link-icon-info-text-title:hover {
        color: var(--primary-color);
    }

    #message-boxchat .chat-message-link-icon-info-text-url {
        font-size: 12px;
        color: var(--primary-color);
        font-weight: 400;
        margin-bottom: 3px;
        word-wrap: break-word;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Video message */
    #message-boxchat .chat-message-video {
        max-width: 100%;
        background-color: #000;
        border-top-right-radius: 8px;
        border-top-left-radius: 8px;
        margin-bottom: 12px;
    }

    #message-boxchat .chat-message-video-preview {
        max-width: 100%;
        width: 100%;
        max-height: 280px;
        position: relative;
        cursor: pointer;
        border-top-right-radius: 8px;
        border-top-left-radius: 8px;
    }

    .chat-body-message-video-thumbnail {
        border-top-right-radius: 8px;
        border-top-left-radius: 8px;
        border-bottom-right-radius: unset;
        border-bottom-left-radius: unset;
        width: 100%;
        max-height: 300px;
    }

    /* Sticker message */
    #message-boxchat .chat-message-sticker {
        max-width: 100%;
        padding: 8px;
        height: auto;
        display: flex;
        flex-direction: row-reverse;
    }


    #message-boxchat .sticker img {
        max-width: 100px;
        height: 100px;
    }

    /* reply message */
    #message-boxchat .chat-body-message-item-reply {
        display: flex;
        align-items: center;
        background-color: #b5dcff;
        padding: 8px;
        margin: 8px 8px 0 8px;
        max-width: 100%;
        border-radius: 8px;
    }

    #message-boxchat .chat-body-message-item-reply-image {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        margin-right: 4px;
        overflow: hidden;
    }


    #message-boxchat .chat-body-message-item-reply-boder {
        width: 2px;
        height: 35px;
        border-right: 2px solid #3989FF;
        margin-right: 4px;
    }

    #message-boxchat .chat-body-message-item-reply-img:hover {
        opacity: 1;
        -webkit-transform: scale(1.08);
        transform: scale(1.08);
    }

    #message-boxchat .chat-body-message-item-reply-info {
        max-width: calc(100% - 60px);
    }

    .chat-body-message-item-reply-name {
        color: #394E60;
        font-size: 14px;
        font-weight: 500;
        max-width: 100%;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #message-boxchat .chat-body-message-item-reply-type {
        color: #72808E;
        font-size: 14px;
        font-weight: 400;
        max-width: 100%;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    /* Thu hồi tin nhắn css */
    #message-boxchat .chat-body-message-item-revoke {
        width: 100%;
        padding: 8px;
    }

    /* Thanh thời gian */
    #message-boxchat .chat-date {
        color: var(--white-color);
        contain: content;
        margin: 20px 60px;
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        font-size: 14px;
        justify-content: center;
        position: relative;
    }

    #message-boxchat .chat-date .line {
        content: "";
        width: 100%;
        height: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.25);
        z-index: 0;
        margin-top: 11px;
    }

    #message-boxchat .chat-date > .time-chat-date {
        background: rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        padding: 2px 10px 3px;
        z-index: 2;
    }

    /* Tin nhắn lỗi */
    #message-boxchat .chat-body-message-item-error {
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-width: 170px;
        padding: 0 8px 8px 8px;
    }

    #message-boxchat .chat-body-message-item-error.left-error {
        flex-direction: row-reverse;
    }

    #message-boxchat .chat-body-message-item-error-notify {
        font-size: 14px;
        color: #DB342E;
    }

    #message-boxchat .chat-body-message-item-error-btn {
        display: flex;
        align-items: center;
    }

    #message-boxchat .chat-body-message-item-error-btn-resend {
        font-size: 14px;
        color: #0068FF;
        cursor: pointer;
        margin-right: 4px;
    }

    #message-boxchat .chat-body-message-item-error-or {
        font-size: 12px;
        font-weight: 400;
        letter-spacing: normal;
        color: rgba(0, 0, 0, 0.5);
        user-select: none;
        margin-right: 4px;
    }

    #message-boxchat .chat-body-message-item-error-btn-delete {
        font-size: 14px;
        color: #0068FF;
        cursor: pointer;
        margin-right: 4px;
    }

    /* Thông báo cuộc gọi */
    #message-boxchat .chat-body-message-item-call-header {
        font-size: 14px;
        font-weight: 500;
        color: #050505;
        padding: 8px 8px 4px 8px
    }

    #message-boxchat .chat-body-message-item-call-header.miss-call {
        color: #DB342E;
    }

    #message-boxchat .chat-body-message-item-call-body {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        border-bottom: 1px solid rgba(0, 0, 0, 0.25);
        padding: 0 8px 4px 8px;
    }

    #message-boxchat .chat-body-message-item-call-body-icon {
        font-size: 16px;
        margin-right: 6px;
        color: #050505;
        position: relative;
    }

    #message-boxchat .chat-body-message-item-call-body-icon.miss-call {
        color: #DB342E;
    }

    #message-boxchat .chat-body-message-item-call-body-type {
        font-size: 14px;
    }

    #message-boxchat .chat-body-message-item-call-btn {
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        text-transform: uppercase;
        color: #0068FF;
        cursor: pointer;
        padding: 8px;
    }

    #message-boxchat .chat-body-message-item-call-body-icon-mini {
        font-size: 10px;
        position: absolute;
        right: -9px;
        bottom: 0px;
        padding: 0 8px 8px 8px;
    }

    #message-boxchat .chat-body-message-item-call-body-icon-mini.call-video {
        font-size: 10px;
        position: absolute;
        right: -6px;
        bottom: 3px;
    }


    #message-boxchat .chat-body-message-item-call-body-icon-mini.suscess-call {
        color: #3cb473;
    }

    #message-boxchat .chat-body-message-item-call-body-icon-mini.error-call {
        color: #DB342E;
    }

    /* Thông báo group */
    #message-boxchat .chat-body-message-event-content {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 52px;
    }

    #message-boxchat .event-message-content {
        display: flex;
        align-items: center;
        word-break: break-all;
        max-width: 90%;
        background-color: rgba(0, 0, 0, 0.05);
        color: #72808e;
        border-radius: 16px;
        padding: 0 14px;
        z-index: 2;
    }

    #message-boxchat .event-message-content-text {
        font-size: 14px !important;
    }

    #message-boxchat .event-message-content-img {
        margin-right: 8px;
        width: 18px;
        height: 11px;
        object-fit: cover;
        margin-top: 4px;
    }

    #message-boxchat .event-message-content-info {
        font-size: 14px !important;
        font-weight: 400;
        color: #262e36;
        word-wrap: break-word;
    }

    #message-boxchat .event-message-content-link {
        color: #0068FF;
        text-decoration: underline;
        cursor: pointer;
    }

    #message-boxchat .event-message-content-contact:hover {
        color: #0068FF;
        cursor: pointer;
    }

    #message-boxchat .event-message-content-name, .event-message-content-adder {

        font-weight: 500;
        font-size: 14px !important;
    }


    #message-boxchat .event-message-content-info-status-icon {
        width: 22px;
        height: 22px;
        font-size: 22px !important;
        color: #FA6342;
        position: relative;
    }

    #message-boxchat .event-message-content-info.pin-message {
        margin-top: -8px;
    }

    #message-boxchat .event-message-content-info-icon-mini {
        position: absolute;
        bottom: 0;
        right: 0;
        font-size: 8px !important;
        margin-right: 4px;
        color: #FA6342;
    }

    #message-boxchat .event-message-content-message {
        font-size: 14px !important;
        position: relative;
        top: 5px;
        max-width: 60%;
        font-weight: 600;
        display: -webkit-inline-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #001a33;
    }

    #message-boxchat .event-message-content-view {
        color: #0068FF;
        cursor: pointer;
    }

    #message-boxchat .event-message-content-icon {
        color: #0068FF;
        margin-right: 4px;
        font-size: 16px !important;
    }

    /* btn scroll */
    #message-boxchat .chat-body-scroll-top-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: #fff;
        position: fixed;
        bottom: 110px;
        right: 320px;
        z-index: 2;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeIn linear 0.3s;
    }

    #message-boxchat .chat-body-scroll-top-btn i {
        font-size: 20px;
        color: var(--border-color);
    }

    #message-boxchat .chat-body-scroll-top-btn:hover > i {
        color: #005ae0;
    }

    #message-boxchat .chat-body-scroll-top-new-message {
        width: 143px;
        height: 32px;
        position: fixed;
        bottom: 110px;
        right: 320px;
        z-index: 2;
        cursor: pointer;
        border-radius: 4px;
        background-color: #fff;
        color: #0068FF;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        animation: key1 .5s linear infinite alternate;
    }

    #message-boxchat .chat-body-scroll-top-new-message i {
        font-size: 20px;
    }

    /* ............................................................................. */

    /* message status */
    .status-single-chat {
        position: absolute;
        bottom: -16px;
        right: 0;
    }

    /* List message action */
    /* #message-boxchat .chat-body-message-item-action-item.item-action-more:hover > .item-action-more-list{
    display: block;
} */

    #message-boxchat .item-action-more-list {
        position: absolute;
        top: 100%;
        background: var(--white-color);
        padding: 8px;
        border-radius: 4px;
        z-index: 99;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.18);
        border: 1px solid #e1e4ea;
        max-width: 270px;
        min-width: 140px;
        text-align: left;
        /* display: none; */
        animation: fadeIn 0.4s ease-in-out;
    }

    #message-boxchat .item-action-more-list::before {
        content: "";
        width: 100px;
        height: 20px;
        position: absolute;
        top: 100%;
        left: 0;
    }

    #message-boxchat .item-action-more-item {
        height: 32px;
        padding: 0 16px;
        display: flex;
        align-items: center;
        cursor: pointer;
        line-height: normal;
        font-weight: 400;
        text-align: left;
        font-size: 14px;
        letter-spacing: normal;
        color: var(--neutral-base);
        position: relative;
        margin: 0 -8px;
    }

    #message-boxchat .item-action-more-item:hover {
        background-color: var(--input-color);
    }

    #message-boxchat .item-action-more-item.red-color-text {
        color: #DB342E;
    }

    #message-boxchat .item-action-more-icon {
        font-size: 16px;
        margin-right: 8px;
    }


    #message-boxchat .chat-body-message-item-reactions .emoji-container {
        opacity: 0;
        position: absolute;

        bottom: 24px;
        left: calc(100% + 40px);
        margin-left: -146px;
        background: #fff;
        height: 40px;
        width: auto;
        box-shadow: 0 2px 2px rgb(0 0 0 / 20%), 0 0 0 1px rgb(0 0 0 / 5%);
        border-radius: 50px;
        padding: 1px;
        box-sizing: border-box;
        transition: opacity 200ms ease;
        pointer-events: none;
        display: flex;
        align-items: center;
        z-index: 99;
    }

    #message-boxchat .chat-body-message-item-reactions .emoji-container::after {
        display: block;
        content: '';
        background: transparent;
        height: 30px;
        position: absolute;
        width: 200px;
        bottom: -15px;
        left: 0;
        z-index: -1;
    }

    /*#message-boxchat .emoji-container {*/
    /*    display: none;*/
    /*}*/
    /*}*/
    #message-boxchat .chat-body-message-item-reactions .emoji-container .emoji .icon:hover:after {
        opacity: 1;
        transition: opacity 1.5s;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .emoji-container {
        opacity: 1;
        pointer-events: all;
        transition: opacity 1.5s;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .like {
        -webkit-animation-duration: .7333s;
        -webkit-animation-name: head-1-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .like .icon {
        background-position: 0 -144px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .love {
        -webkit-animation-duration: .9833s;
        -webkit-animation-name: head-2-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .love .icon {
        background-position: 0 -192px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .haha {
        -webkit-animation-duration: 1.0833s;
        -webkit-animation-name: head-3-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .haha .icon {
        background-position: 0 -96px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .wow {
        -webkit-animation-duration: .9333s;
        -webkit-animation-name: head-4-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .wow .icon {
        background-position: 0 -288px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .sad {
        -webkit-animation-duration: 1.2167s;
        -webkit-animation-name: head-5-anim;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .sad .icon {
        background-position: 0 -240px;
    }

    #message-boxchat .chat-body-message-item-reactions:hover .angry {
        -webkit-animation-duration: 1.2833s;
        -webkit-animation-name: head-6-anim;
    }

    /* nút reply tin nhắn tagname */
    #message-boxchat .chat-message-extra-btn-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 80px;
        height: 30px;
        padding: 4px;
        position: absolute;
        bottom: -20px;
        left: 16px;
    }

    #message-boxchat .extra-btn {
        font-weight: 400;
        font-size: 14px;
        position: relative;
        background-color: rgba(0, 0, 0, 0.25);
        color: #fff;
        margin-bottom: 4px;
        border-color: transparent;
        border-radius: 6px;
        padding: 8px 16px;
        text-transform: uppercase;
    }

    #message-boxchat .extra-btn:hover {
        background-color: #0068FF;
    }

    #message-boxchat .chat-message .extra-btn-icon {
        font-size: 14px;
        margin-right: 6px;
    }

    /* Recation num checked */
    .chat-body-message-item-action-checked-list.right-reaction {
        right: 30%;
        bottom: 9%;
    }

    .chat-body-message-item-action-checked-item {
        width: 20px;
        height: 20px;
        padding: 2px;
        overflow: hidden;
        display: flex;
        align-items: center;
    }

    .chat-body-message-item-action-checked-item-img {
        width: 17px;
        height: 17px;
        border-radius: 50%;
    }

    .chat-body-message-item-action-checked-num {
        width: 20px;
        height: 20px;
        text-align: center;
    }

    /* Message pin */


    #message-boxchat .chat-body-message-element-pin:hover > .chat-body-message-element-pin-option i {
        display: block;
    }


    #message-boxchat .chat-body-message-element-pin-img {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        margin-right: 4px;
    }


    #message-boxchat .chat-body-message-element-pin-option {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        cursor: pointer;
        text-align: center;
        position: relative;
    }

    #message-boxchat .chat-body-message-element-pin-option i {
        font-size: 30px;
        line-height: 35px;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: none;
    }

    #message-boxchat .chat-body-message-element-pin-option::after {
        content: "";
        position: absolute;
        top: -16px;
        left: -20;
        width: 120px;
        height: 20px;
    }

    #message-boxchat .chat-body-message-element-pin-option:hover {
        background-color: #e1e4ea;
    }

    #message-boxchat .chat-body-message-element-pin-option:hover > .chat-body-message-element-pin-option-list {
        display: block;
    }

    #message-boxchat .chat-body-message-element-pin-option-list {
        list-style: none;
        min-width: 140px;
        padding: 8px;
        border-radius: 8px;
        background-color: var(--white-color);
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.18);
        position: absolute;
        bottom: 75%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 99;
        display: none;
    }

    #message-boxchat .chat-body-message-element-pin-option-item {
        height: 32px;
        padding: 0 16px;
        display: flex;
        align-items: center;
        cursor: pointer;
        line-height: normal;
        font-weight: 400;
        text-align: left;
        font-size: 14px;
        letter-spacing: normal;
        color: #001a33;
        position: relative;
        margin: 0 -8px;
    }

    #message-boxchat .chat-body-message-element-pin-option-item:hover {
        background-color: #e1e4ea;
    }

    #message-boxchat .chat-body-message-element-pin-option-item.red-color-text {
        color: #DB342E;
        font-size: 14px;
    }

    #message-boxchat .zmenu-separator {
        height: 1px;
        background: #e1e4ea;
        margin: 4px 8px;
    }


    #message-boxchat .chat-body-message-element-pin-info-message-text {
        font-size: 14px !important;
    }

    /* reply message */
    .chat-body-message-item-reply {
        display: flex;
        align-items: center;
        background-color: #C8DEFF;
        padding: 8px;
        max-width: 100%;
        border-radius: 8px;
    }

    .chat-body-message-item-reply-image {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        margin-right: 4px;
        overflow: hidden;
    }

    .chat-body-message-item-reply-img {
        width: 35px;
        height: 35px;
        -webkit-transition: 0.4s ease;
        transition: 0.4s ease;
        object-fit: cover;
    }

    .chat-body-message-item-reply-boder {
        width: 2px;
        height: 35px;
        border-right: 2px solid #3989FF;
        margin-right: 4px;
    }

    .chat-body-message-item-reply-img:hover {
        opacity: 1;
        -webkit-transform: scale(1.08);
        transform: scale(1.08);
    }

    /*#chat-body-message-popup .chat-body-message-item-reply-info {*/
    /*    max-width: calc(100% - 60px);*/
    /*}*/

    .chat-body-message-item-reply-name {
        color: #394E60;
        font-size: 14px;
        font-weight: 500;
        max-width: 100%;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .chat-body-message-item-reply-text {
        margin-top: 4px;
        color: #001A33;
        font-size: 14px;
    }

    /*--- svg play button ---*/
    #message-boxchat .chat-message-link-thumbnail .play {
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
    }

    #message-boxchat svg {
        stroke: #fff;
    }




    /* Chat body */
    #chat-popup-layout .chat-body {
        width: 100%;
        height: calc(var(--chat-form-height) - var(--chat-header-height) - var(--chat-footer-height));
        -ms-overflow-style: none;
        display: flex;
        flex-direction: column-reverse;
    }

    #chat-body-message-popup{
        display: flex;
        flex-direction: column-reverse;
        overflow-y: auto;
        overflow-x: hidden;
        padding: 0 8px 10px 8px;
        height: 100%;
    }

    #chat-body-message-popup::-webkit-scrollbar-track {
        background-color: transparent;
        border: 1px solid transparent;
    }

    #chat-body-message-popup::-webkit-scrollbar {
        width: 4px;
        background-color: transparent;
    }

    #chat-body-message-popup::-webkit-scrollbar-thumb {
        background-color: transparent;
        box-shadow: unset;
        border: 1px solid transparent;
    }

    #chat-body-message-popup.scroll::-webkit-scrollbar-thumb {
        background-color: rgb(128, 125, 125);
    }

    #chat-body-message-popup .chat-body-message-file {
        width: auto !important;
    }

    #chat-body-message-popup .chat-message-file-content {
        width: calc(100% - 50px) !important;
    }

    #chat-body-message-popup .chat-message-file-name {
        width: 90% !important;
    }

    #chat-body-message-popup .chat-body-message-file img:hover {
        box-shadow: unset !important;
    }

    #chat-body-message-popup .see-item-image-video-grid-download {
        width: 25px;
        height: 25px;
        position: absolute;
        right: 6px;
        top: 6px;
        border-radius: 4px;
        background-color: #fff;
        align-items: center;
        justify-content: center;
        box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
        cursor: pointer;
        display: none;
    }

    #chat-body-message-popup .see-item-image-video-grid-download:hover {
        color: #0084ff !important;
    }

    /* Chat footer */
    #chat-popup-layout .chat-footer-popup {
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        padding: 2px 8px;
        border-top: 1px solid #dfdfdf;
        min-height: 54px;
        column-gap: 14px;
    }

    .chat-footer-other-action {
        width: 22px;
        height: 22px;
        z-index: 1;
        position: relative;
        margin-right: 8px;
    }

    .chat-footer-other-action:hover::before {
        display: block;
    }

    .chat-footer-option {
        display: flex;
        align-items: center;
        width: auto;
    }

    .chat-footer-option-icon {
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px !important;
        color: var(--offline-color);
        margin-right: 8px;
        width: 22px;
        height: 22px;
        z-index: 1;
        position: relative;
    }

    .chat-footer-message {
        width: 90%;
        position: relative;
        background: #FFF;
        top: -3px;
        outline: none;
        border-radius: 6px;
        transition: all .5s;
        z-index: 99;
    }

    .chat-footer-popup-action {
        max-width: 120px;
        position: absolute;
    }

    .chat-footer-message-input {
        width: 100%;
        min-height: 36px;
        height: auto;
        max-height: 72px;
        border-radius: 11px !important;
        border: none;
        overflow: auto;
        outline: none;
        background-color: var(--input-color);
        color: var(--title-color);
        font-weight: 300;
        font-size: 14px;
        padding: 8px 32px 8px 10px;
        word-wrap: break-word;
        transition: all .3s ease;
    }

    .chat-footer-message-input::-webkit-scrollbar-track {
        background: transparent;
    }

    .chat-footer-message-input::-webkit-scrollbar {
        width: 0px;
        background: transparent;
    }

    .chat-footer-message-input::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .chat-footer-message-animation {
        position: absolute;
        right: -5px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--offline-color);
    }

    .chat-footer-send {
        width: 24px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        position: absolute;
        right: 0;
    }

    .chat-footer-send-button {
        border: none !important;
        outline: none !important;
        width: 25px;
        background-color: #fff;
        margin-left: -8px;
        height: 25px;
    }

    /* Queue */
    .chat-queue {
        width: 60px;
        display: flex;
        flex-direction: column-reverse;
    }

    .chat-queue-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .chat-queue-item {
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chat-queue-item-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
        cursor: pointer;
        margin: 4px 0;
    }

    .chat-queue-item-avatar.multi-chat-show {
        opacity: 0.3;
    }

    .chat-queue-item-avatar-img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .chat-queue-modal {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
        cursor: pointer;
        position: absolute;
        left: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chat-queue-modal-number,
    .chat-queue-modal-plus {
        color: var(--text-color);
        font-weight: 500;
        font-size: 18px;
    }

    .chat-queue-item-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 1px solid var(--offline-color);
        cursor: pointer;
        color: var(--text-color);
        background-color: var(--white-color);
        font-size: 26px;
        line-height: 48px;
        margin: 5px 0 16px 5px;
    }



    /* emoji css */
    #chat-popup-tms ~ .wrapper {
        z-index: 99;
    }

    /* modal preview image */
    .modal-show-grid-image-toolbar {
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        background-color: #001a33;
        justify-content: center;
        color: var(--white-color);
        font-size: 26px;
    }

    .modal-show-grid-image-toolbar-icon {
        cursor: pointer;
        padding: 8px;
    }

    .modal-show-grid-image-toolbar-icon:hover {
        color: var(--primary-color);
    }

    .modal-show-grid-image-preview {
        width: 100%;
        height: calc(100% - 180px);
        display: flex;
        justify-content: center;
    }

    .modal-show-grid-image-preview-images {
        /*width: 70%;*/
        /*height: 100%;*/
        /*object-position: 50% 50%;*/
        /*border-radius: 5px;*/
        /*align-items: center;*/
        /*position: relative;*/
    }
    .modal-show-grid-image-preview-left-button, .modal-show-grid-image-preview-right-button {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    /*.modal-show-grid-image-preview-left-button:hover, .modal-show-grid-image-preview-right-button:hover {*/
    /*    background-color: rgba(255, 255, 255, 0.3);*/
    /*}*/

    .modal-show-grid-image-preview-left-button {
        left: -10%;
    }

    .modal-show-grid-image-preview-button-icon {
        color: var(--white-color);
        font-size: 60px;
    }

    .modal-show-grid-image-preview-right-button {
        right: -10%;
    }


    .modal-show-grid-image-preview-image {
        /*width: 100%;*/
        /*height: 100%;*/
        object-fit: contain;
        object-position: 50% 50%;
    }

    .modal-show-grid-image-preview-image:hover {
        opacity: 1 !important;
    }

    .modal-show-grid-image-thumbnail {
        width: 100%;
        height: 132px;
        border: 1px solid var(--dark-color);
        display: flex;
        align-items: center;
        justify-content: flex-start;
        list-style: none;
        margin-bottom: 8px;
        overflow-x: auto;
        overflow-y: hidden;
        max-height: 100%;
    }

    /* Ẩn thanh scroll */

    .modal-show-grid-image-thumbnail-images {
        min-width: 16%;
        max-width: 16%;
        height: 100%;
        object-fit: contain;
        border-radius: 5px;
        margin: 0 4px;
    }

    .modal-show-grid-image-thumbnail-image {
        width: 100%;
        height: 100%;
    }

    /* animation */
    @keyframes opacity {
        0% {
            opacity: 0;
        }

        10% {
            opacity: 0.1;
        }

        20% {
            opacity: 0.2;
        }

        30% {
            opacity: 0.3;
        }

        40% {
            opacity: 0.4;
        }

        50% {
            opacity: 0.5;
        }

        60% {
            opacity: 0.6;
        }

        70% {
            opacity: 0.7;
        }

        80% {
            opacity: 0.8;
        }

        90% {
            opacity: 0.9;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes bounce {
        0% {
            transform: translateY(0);
        }

        10% {
            transform: translateY(3px);
        }

        20% {
            transform: translateY(6px);
        }

        30% {
            transform: translateY(9px);
        }

        40% {
            transform: translateY(12px);
        }

        50% {
            transform: translateY(15px);
        }

        60% {
            transform: translateY(18px);
        }

        70% {
            transform: translateY(21px);
        }

        80% {
            transform: translateY(24px);
        }

        90% {
            transform: translateY(27px);
        }

        100% {
            transform: translateY(30px);
        }
    }

    @keyframes motionLeft {
        0% {
            transform: translateX(0);
            opacity: 1;
        }
        50% {
            transform: translateX(20px);
            opacity: 0;
        }
        75% {
            transform: translateX(-20px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes motionRight {
        0% {
            transform: translateX(0);
            opacity: 1;
        }
        50% {
            transform: translateX(-20px);
            opacity: 0;
        }
        75% {
            transform: translateX(20px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes animatop {
        0% {
            opacity: 0;
            right: -500px;
        }
        100% {
            opacity: 1;
            right: 0px;
        }
    }

    @keyframes animainfos {
        0% {
            bottom: 10px;
        }
        100% {
            bottom: -42px;
        }
    }

    @keyframes rotatemagic {
        0% {
            opacity: 0;
            transform: rotate(0deg);
            top: -24px;
            left: -253px;
        }
        100% {
            transform: rotate(-30deg);
            top: -24px;
            left: -78px;
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes move-down {
        0% {
            top: 10%;
        }
        50% {
            top: 35%;
        }
        100% {
            top: 50%;
        }
    }

    @-webkit-keyframes stickerAnimation {
        0% {
            background-position: -12px -12px;
        } 25% {
              background-position: -156px -12px;
          } 50% {
                background-position: -300px -12px;
            } 75% {
                  background-position: -156px -156px;
              } 100% {
                    background-position: -12px -156px;
                }
    }
    .category-work-popup-visible-message{
        border: 2px solid rgb(245, 131, 47);
    }
    .category-group-popup-visible-message{
        border: 2px solid rgb(117, 98, 216);
    }
    .category-individual-popup-visible-message{
        border: 2px solid rgb(21, 168, 95);
    }
    .message-header-list-footer-view-all:before {
        background: #fa6342;
        bottom: 0;
        content: "";
        height: 1px;
        opacity: 0;
        position: absolute;
        visibility: hidden;
        width: 62px;
        transition: all 0.2s linear 0s;
    }
    .message-header-list-footer-view-all:hover:before{
        opacity: 1;
        visibility: visible;
        bottom: 7px;
    }

    /*POPUP CSS MESSAGE ACTION DETAIL*/
    #chat-body-message-popup .chat-body-message-div{
        justify-content: center;
        max-width: 75%;
        min-width: 150px;
        min-height: 40px;
        border-radius: 8px;
        box-shadow: rgb(0 0 0 / 12%) 0px 1px 3px, rgb(0 0 0 / 24%) 0px 1px 2px;
        position: relative;
        border-top-right-radius: 4px;
        animation: slideRight 0.4s cubic-bezier(.4, 0, .2, 1);
        background-color: #f0f4f9;
        color: #001A33;
    }

    #chat-popup-layout .active-icon-popup {
        color: #0084ff;
        text-align: center !important;
    }

    .list-option-footer-popup {
        width: 180px;
        position: absolute;
        bottom: 33px;
        left: -7px;
        height: auto;
        border-radius: 10px;
        background: white;
        box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
    }

    .list-option-footer-popup .item-option-footer-popup{
        padding: 5px;
        display: flex;
        align-items: center;
    }

    .list-option-footer-popup .item-option-footer-popup:hover{
        background-color: whitesmoke;
    }

    .list-option-footer-popup .item-option-footer-popup:first-child:hover{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .list-option-footer-popup .item-option-footer-popup:last-child:hover{
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .list-option-footer-popup .item-option-footer-popup span{
        font-size: 15px !important;
        color: #353c4e;
        cursor: pointer;
    }

    /*POPUP CSS MESSAGE INFOR DETAIL*/
    .list-infor-detail-popup-message {
        width: 348px;
        position: absolute;
        padding: 5px;
        top: 0px;
        max-height: 449px;
        left: -356px;
        height: auto;
        border-radius: 10px;
        background: white;
        z-index: 999;
        border: 1px solid #dfdfdf;
        box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px;
    }

    #data-all-member-visible-message {
        overflow-x: hidden;
        overflow-y: auto;
        max-height: max-content;
    }

    #data-all-member-visible-message::-webkit-scrollbar-track {
        background: transparent;
    }

    #data-all-member-visible-message::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #data-all-member-visible-message::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .list-infor-detail-popup-message .nav-option-footer-popup:hover{
        background-color: whitesmoke;
    }

    .list-infor-detail-popup-message .nav-option-footer-popup{
        padding: 8px;
        font-size: 14px !important;
        line-height: 14px;
        color: rgba(5, 5, 5, 0.8);
        font-weight: 500;
        margin: 0;
        cursor: pointer;
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
    }

    .list-infor-detail-popup-message .nav-option-footer-popup:first-child:hover{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .list-infor-detail-popup-message .nav-option-footer-popup:last-child:hover{
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    /*PINNED POPUP*/
    #pin-visible-message.current-pinned-popup-message {
        width: 100%;
        height: max-content;
        background-color: #fff;
        display: flex;
        align-items: center;
        border-left: 1px solid #dfdfdf;
        padding: 8px;
        position: absolute;
        z-index: 99;
        right: 0;
        box-shadow: rgb(0 0 0 / 20%) 0px 18px 50px -10px;
    }
    /*STICKER CSS POPUP*/
    #chat-popup-layout .icon-search-order-input-visible-message {
        color: #8d8d8d;
        position: absolute;
        left: 10px;
        top: 12px;
        font-size: 14px;
        margin: 3px;
        cursor: pointer;
        z-index: 999;
    }

    #chat-popup-layout .sticker-input-popup-message,
    #chat-popup-layout .sticker-input-visible-message {
        border-radius: 5px;
        box-shadow: 0 0 1px 1px #c7c5c5;
        height: max-content;
        width: 400px;
        background: #ffffff;
        position: absolute;
        bottom: 30px;
        right: 0;
        left: unset !important;
        z-index: 9999;
    }

    #chat-popup-layout .chat-footer-other-action-list i.active {
        color: #0084ff !important;
    }

    #chat-popup-layout .filter-order-visible-message {
        width: 100%;
        padding: 6px 5px;
        display: flex;
    }

    #chat-popup-layout .prev-footer-visible-message {
        border-radius: 100%;
        position: absolute !important;
        top: 6px;
        height: 30px;
        width: 30px;
        border: none;
        box-shadow: 0 3px 7px rgb(0 0 0 / 50%);
        background: #ebebeb;

    }

    #chat-popup-layout .prev-footer-visible-message:before {
        color: #a3a3a3;
        left: 0.25em;
        border-width: 3px 0 0 3px;
        transform: rotate(-45deg);
    }

    #chat-popup-layout .button-footer-visible-message {
        cursor: pointer;
        position: absolute;
        padding: 0;
        margin: 0;
        outline: 0;
        bottom: 0;
        background: transparent;
        transition: all 0.2s linear 0s;
        z-index: 2;
    }

    #chat-popup-layout .button-footer-visible-message:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 0.75em;
        height: 0.75em;
        margin: auto;
        border-style: solid;
    }

    #chat-popup-layout .next-footer-visible-message {
        top: 6px;
        right: 0;
        position: absolute;
        border-radius: 100%;
        height: 30px;
        width: 30px;
        border: none;
        box-shadow: 0 3px 7px rgb(0 0 0 / 50%);
        background: #ebebeb;

    }

    #chat-popup-layout .next-footer-visible-message:before {
        right: 0.25em;
        color: #a3a3a3;
        border-width: 3px 3px 0 0;
        transform: rotate(45deg);
    }

    #chat-popup-layout .footer-sticker-visible-message, .footer-order-visible-message {
        width: 100%;
        /*position: absolute;*/
        bottom: 0;
        padding: 5px;
        border-top: 1px solid #ebe8e8;
        background: #ffffff;
        border-radius: 0 0 5px 5px !important;
    }

    #chat-popup-layout .content-footer-sticker-visible-message {
        height: 42px;
        width: 40px;
        overflow-x: hidden;
    }

    #chat-popup-layout .list-sticker-visible-message {
        display: flex;
        max-width: 100%;
        /*overflow-x: auto;*/
    }

    #chat-popup-layout .list-sticker-visible-message li {
        width: 49px;
        height: 49px;
        padding: 5px;
        border-radius: 5px;
    }

    #chat-popup-layout .list-sticker-visible-message li:hover {
        background-color: #f2f2f2;
        cursor: pointer;
    }

    #chat-popup-layout .list-sticker-visible-message li.active {
        background-color: #acd0e091 !important;
    }

    #chat-popup-layout .list-sticker-visible-message img {
        width: 40px;
    }

    #chat-popup-layout .body-sticker-visible-message, .body-order-visible-message {
        flex-wrap: wrap;
        margin: 0 0 0 11px;
        max-height: 50vh;
        overflow-y: auto;
        display: block;
    }

    #chat-popup-layout .body-sticker-visible-message div {
        border-radius: 5px;
        width: calc(100% / 3 - 10px);
        height: auto;
        object-fit: cover;
        margin: 5px;
        text-align: center;
    }

    #chat-popup-layout .body-sticker-visible-message img {
        width: 90%;
        height: 90%;
    }

    #chat-popup-layout .body-sticker-visible-message div:hover {
        background-color: #f2f2f2;
        cursor: pointer;
    }

    #chat-popup-layout .body-footer-sticker-visible-message {
        height: 50vh;
    }

    #chat-popup-layout .name-sticker-visible-message {
        margin-left: 5px;
    }

    #chat-popup-layout .content-footer-sticker-visible-message {
        background: #e0ebf5;
    }

    #chat-popup-layout #body-visible-message {
        max-height: none;
    }

    #data-sticker-visible-message::-webkit-scrollbar-track {
        background: transparent;
    }

    #data-sticker-visible-message::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #data-sticker-visible-message::-webkit-scrollbar-thumb {
        background: transparent;
    }

    #chat-popup-layout .body-visible-message{
        flex: 1;
        position: relative;
        background: radial-gradient(rgb(221 185 166 / 61%) 31%, rgb(221 185 166 / 61%) 31%, #d2e3ea99 100%);
        /*background: radial-gradient(rgb(236 241 251 / 61%) 31%, rgb(231 242 255 / 61%) 31%, #d2e3ea99 100%);*/
        display: flex;
        flex-direction: column-reverse;
    }

    #number-count-pinned-popup-message {
        border-radius: 52px;
        right: -6px;
        position: absolute;
        top: -7px;
        padding: 4px;
        width: 15px;
        display: flex;
        height: 15px;
        justify-content: center;
        line-height: 8px;
    }

    /*PINNED LIST*/
    #chat-body-message-popup .notify-message-container {
        width: 100%;
        height: auto;
        position: relative;
        margin: 10px 10px 0 10px;
        display: flex;
        z-index: 1;
        align-items: center;
        justify-content: center;
    }

    #get-pinned-list-popup-message{
        flex-wrap: wrap;
    }

    #get-pinned-list-popup-message .pin-details-content-item-visible-message {
        padding: 9px;
        border: 1px solid #e6d7d7;
        margin: auto;
        border-radius: 5px;
        width: 100%;
        background: radial-gradient(rgb(236 241 251 / 61%) 31%, rgb(231 242 255 / 61%) 31%, #d2e3ea99 100%);
        margin-bottom: 4px;
    }

    #get-pinned-list-popup-message .pin-details-content-item-visible-message:hover {
        border: 1px solid #6868ff;
        box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
    }

    #get-pinned-list-popup-message .pin-details-content-image-body  {
        height: 58px;
        margin-right: 5px;
    }

    #get-pinned-list-popup-message .pin-details-content-image-header  {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin: 6px 0;
        object-fit: cover;
        border: 1px solid #c2c2c2;
    }

    #get-pinned-list-popup-message .name-user-pined-content  {
        display: flex;
        flex-direction: column;
    }

    #get-pinned-list-popup-message .pin-details-content-item-header  {
        display: flex;
        align-items: center;
    }

    #get-pinned-list-popup-message .name-user-pined-content {
        font-weight: bold;
        display: inline-grid;
        margin: 5px 10px;
    }

    #get-pinned-list-popup-message .name-user-pined-content .icon-type-pinned  {
        font-weight: normal;
        display: flex;
    }

    #get-pinned-list-popup-message .name-user-pined-content .icon-type-pinned::before {
        font-size: 19px;
        margin-right: 7px;
        color: #0072bb;
    }

    #get-pinned-list-popup-message .pin-details-content-item-body {
        display: flex;
        align-items: center;
    }

    #get-pinned-list-popup-message .name-content-pinned-body {
        /*margin: 5px 10px;*/
    }

    #get-pinned-list-popup-message .name-user-pined-body-content {
        font-weight: bold;
    }

    #get-pinned-list-popup-message .date-pinned-message {
        color: #8f8f8f;
        padding-right: 5px;
        border-right: 2px solid #a9a9a9;
        font-weight: 500;
    }

    #get-pinned-list-popup-message .seen-message-old {
        cursor: pointer;
        color: #0068ff;
    }

    #get-pinned-list-popup-message .content-pined-visible-message {
        white-space: nowrap;
        width: 205px;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: normal;
    }

    .type-name-current-title-show-popup {
        font-style: normal;
        cursor: pointer;
        color: #0068ff;
    }

    #modal-pinned-list-popup-message .modal-body::-webkit-scrollbar-track {
        background: transparent;
    }

    #modal-pinned-list-popup-message .modal-body::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #modal-pinned-list-popup-message .modal-body::-webkit-scrollbar-thumb {
        background: transparent;
    }

    /*MEMBER*/
    #chat-body-message-popup .img-members-about {
        position: relative;
        padding-right: 10px;
    }

    #get-member-list-popup-message .img-members-about img {
        width: 40px;
        height: 40px;
        position: relative;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid #d5d6d9;
    }

    #get-member-list-popup-message .row-member {
        display: flex;
        padding: 10px;
        align-items: center;
        position: relative;
        border-bottom: 1px solid #eaeaea;
    }

    #get-member-list-popup-message .row-member:last-child {
        border-bottom: none;
    }

    #get-member-list-popup-message .info-name-member-about {
        /*padding-left: 10px;*/
    }

    #chat-popup-layout .img-members-about {
        padding-right: 40px;
    }

    #get-member-list-popup-message .wrap-card-search-area-member-about {
        display: flex;
        align-items: center;
        height: 32px;
        width: 100%;
        background-color: #f2f2f2;
        border-radius: 20px;
    }

    #get-member-list-popup-message .wrap-card-search-area-member-about input{
        border: none;
        background-color: transparent;
        width: calc(100% - 50px);
        height: 100%;
        transition: all 0.5s ease-in-out;
    }

    #get-member-list-popup-message .clear-text-area-member-search-about{
        margin: 0px 10px 0px 4px;
        transition: all 0.25s ease-in-out;
        visibility: hidden;
    }

    #get-member-list-popup-message .dropdown-toggle::after{
        display: none;
    }

    #chat-popup-layout .key-member-detail-visible-message {
        position: absolute;
        top: 36px;
        color: #ffcc7d;
        left: 37px;
        background-color: #767676;
        border-radius: 100%;
        padding: 2px;
        font-size: 10px !important;
    }

    #chat-popup-layout .dropdown-action-user-about {
        display: none;
        position: absolute;
        right: 10px;
    }

    #chat-popup-layout .row-member:hover .dropdown-action-user-about {
        display: block;
        width: 32px;
        height: 33px;
        position: absolute;
        cursor: pointer;
    }

    #chat-popup-layout .dropdown-toggle.action-user-member {
        width: 30px;
        height: 30px;
        border: none;
        outline: none;
        border-radius: 50px;
        color: #282828c4;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    #chat-popup-layout .dropdown.dropdown-action-user-about .dropdown-menu-custom{
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
        z-index: 99;
        display: none;
    }

    #chat-popup-layout .dropdown-action-user-about:hover .dropdown-menu-custom{
        display: block !important;
    }

    #modal-member-list-popup-message .modal-body::-webkit-scrollbar-track {
        background: transparent;
    }

    #modal-member-list-popup-message .modal-body::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #modal-member-list-popup-message .modal-body::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .number-person-about {
        font-size: 18px !important;
        margin-bottom: 0;
        line-height: 1.5;
        font-weight: 500;
    }
    /*VOICE POPUP*/
    #chat-body-message-popup .play-audio-body-message {
        display: flex;
        margin-top: 5px;
    }

    #chat-body-message-popup .progress {
        position: relative;
        top: 14px;
        border-radius: 3px;
        height: 4px !important;
        width: 130px;
        background-color: rgb(105, 105, 170, .1);
        margin: 0 15px 0 10px;
        overflow: unset !important;
    }

    #chat-body-message-popup .currentValue {
        position: absolute;
        width: 0;
        height: 100%;
        background-color: #fa6342;
        top: 0;
    }

    #chat-body-message-popup .progress-bar-audio {
        opacity: 0;
        z-index: 9;
    }

    #chat-body-message-popup .media-fixed-progress-bar-dot {
        position: absolute;
        width: 4px;
        height: 4px;
        background-color: #fa6342;
        border-radius: 50%;
        right: 0;
        top: 0;
        transition: 1s linear;
    }

    #chat-body-message-popup .media-fixed-progress-bar-dot:before {
        content: "";
        position: absolute;
        width: 15px;
        height: 15px;
        border: 1px solid #fa6342;
        border-radius: 50%;
        left: -5px;
        top: -5px;
        box-shadow: inset 0 0 3px #fa6342;
    }

    #chat-body-message-popup .animation.media-fixed-progress-bar-dot:before {
        animation: pink-blink-bar 0.5s linear infinite;
    }

    #chat-body-message-popup .icon-dowload-about-visible-message {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 22px;
        width: 22px;
        background-color: #fff;
        border-radius: 5px;
        right: 0px;
        top: 0px;
        cursor: pointer;
    }

    .chat-footer-popup .layout-audio-visible-message {
        height: 35px;
        width: 100%;
        position: relative;
        right: 0px;
        bottom: 2px;
        display: flex;
        border-radius: 30px;
        background-color: #f0f2f5;
        align-items: center;
        padding-top: 0 !important;
    }

    .chat-footer-popup .record_btn {
        border: none;
        outline: none;
        border-radius: 50%;
        width: 25px;
        height: 25px;
    }

    @keyframes recording-core {
        0% {
            box-shadow: 0 0 0 0 rgba(30, 195, 243, 0.5);
        }
        20% {
            box-shadow: 0 0 0 5px rgba(30, 195, 243, 0.4),
            0 0 0 15px rgba(30, 195, 243, 0.4);
        }
        40% {
            box-shadow: 0 0 0 10px rgba(30, 195, 243, 0.4),
            0 0 0 20px rgba(30, 195, 243, 0.3),
            0 0 0 0 rgba(30, 195, 243, 0.3);
        }
        60% {
            box-shadow: 0 0 0 15px rgba(30, 195, 243, 0.3),
            0 0 0 25px rgba(30, 195, 243, 0.2),
            0 0 0 5px rgba(30, 195, 243, 0.3);
        }
        80% {
            box-shadow: 0 0 0 20px rgba(30, 195, 243, 0.2),
            0 0 0 30px rgba(30, 195, 243, 0.2),
            0 0 0 10px rgba(30, 195, 243, 0.2);
        }
        100% {
            box-shadow: 0 0 0 25px rgba(30, 195, 243, 0.1),
            0 0 0 35px rgba(30, 195, 243, 0.1),
            0 0 0 15px rgba(30, 195, 243, 0.1);

        }
    }

    @keyframes recording-exit {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.5);
        }
        20% {
            box-shadow: 0 0 0 5px rgba(255, 0, 0, 0.4),
            0 0 0 15px rgba(255, 0, 0, 0.4);
        }
        40% {
            box-shadow: 0 0 0 10px rgba(255, 0, 0, 0.4),
            0 0 0 20px rgba(255, 0, 0, 0.3),
            0 0 0 0 rgba(255, 0, 0, 0.3);
        }
        60% {
            box-shadow: 0 0 0 15px rgba(255, 0, 0, 0.3),
            0 0 0 25px rgba(255, 0, 0, 0.2),
            0 0 0 5px rgba(255, 0, 0, 0.3);
        }
        80% {
            box-shadow: 0 0 0 20px rgba(255, 0, 0, 0.2),
            0 0 0 30px rgba(255, 0, 0, 0.2),
            0 0 0 10px rgba(255, 0, 0, 0.2);
        }
        100% {
            box-shadow: 0 0 0 25px rgba(255, 0, 0, 0.1),
            0 0 0 35px rgba(255, 0, 0, 0.1),
            0 0 0 15px rgba(255, 0, 0, 0.1);

        }
    }

    .chat-footer-popup #recorder.recording-exit {
        animation: recording-exit 1.1s ease-out infinite;
    }

    .chat-footer-popup .record_btn.recording {
        animation: recording-core 1.1s ease-out infinite;
    }

    .chat-footer-popup .record-microphone-popup-message {
        color: white;
    }

    .chat-footer-popup .time-record-visible-message {
        font-weight: 900;
        font-size: 16px !important;
    }

    .chat-footer-popup .icon-send-off-record{
        position: absolute;
        right: 9px;
        /*top: 4.5px;*/
    }

    .chat-footer-popup .icon-send-off-record i{
        cursor: pointer;
        padding: 5px 6px 5px 6px;
        border-radius: 50%;
        font-size: 16px;
    }

    .chat-footer-popup .icon-send-off-record i:hover {
        background-color: #56a1ee;
    }

    .check-voice-layout-audio-popup-message {
        left: 10px;
        position: absolute;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /*LIST CART*/
    #chat-popup-layout .box-cart-restaurant-popup-message{
        width: 348px;
        position: absolute;
        top: -413px;
        max-height: 449px;
        left: -364px;
        height: auto;
        border-radius: 10px;
        background: white;
        z-index: 999;
        border: 1px solid #dfdfdf;
        box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px
    }

    #chat-popup-layout .box-cart-restaurant-popup-message::-webkit-scrollbar-track {
        background: transparent;
    }

    #chat-popup-layout .box-cart-restaurant-popup-message::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #chat-popup-layout .box-cart-restaurant-popup-message::-webkit-scrollbar-thumb {
        background: transparent;
    }

    #chat-popup-layout .header-cart-restaurant-popup-message {
        align-items: center;
    }

    #chat-popup-layout .wrap-card-search-area-cart-about{
        display: flex;
        align-items: center;
        height: 32px;
        width: 100%;
        background-color: #f2f2f2;
        border-radius: 20px;
    }

    #chat-popup-layout .text-filter-cart-restaurant-popup-message{
        border: none;
        background-color: transparent;
        width: calc(100% - 50px);
        height: 100%;
        transition: all 0.5s ease-in-out;
    }

    #chat-popup-layout .body-cart-restaurant-popup-message{
        height: auto;
        max-height: 308px;
        overflow-x: hidden;
        overflow-y: auto;
        background-color: #f2f2f2;
    }

    #chat-popup-layout .icon-cart-title-popup-message {
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px !important;
        color: var(--offline-color);
        margin-right: 8px;
        width: 22px;
        height: 22px;
        z-index: 1;
        position: relative;
    }

    .item-cart-restaurant-popup-message {
        padding: 8px;
        margin-top: 5px;
        display: flex;
        align-items: center;
    }

    .list-cart-restaurant-popup-message:hover {
        background-color: #f3f3f3;
    }

    .list-cart-restaurant-popup-message:hover .action-cart-restaurant-popup-message{
        transform: translateX(0px);
    }

    .item-cart-restaurant-popup-message h4 {
        font-size: 16px !important;
        color: #535353;
    }

    .item-cart-restaurant-popup-message span {
        font-size: 14px !important;
    }

    .item-cart-restaurant-popup-message p {
        font-size: 14px !important;
        color: #8f8f8f;
    }

    .item-cart-restaurant-popup-message i {
        width: 140px;
        font-style: normal;
    }

    .information-cart-restaurant-popup-message {
        width: 260px;
        margin-right: 5px;
    }

    .action-cart-restaurant-popup-message {
        width: 60px;
        display: flex;
        /*background-color: #0072bc;*/
        height: 67px;
        align-items: center;
        justify-content: center;
        transition: all 0.2s cubic-bezier(0.4, 0, 1, 1);
        transform: translateX(85px);
    }

    .clear-text-area-cart-search-about {
        visibility: hidden;
        opacity: 0;
    }
    .detail-cart-restaurant-popup-message {
        display: flex;
        flex-direction: column;
    }

    /*CSS CARD MỚI*/
    #chat-popup-layout .body-cart-restaurant-popup-message::-webkit-scrollbar-track {
        background: transparent;
    }

    #chat-popup-layout .body-cart-restaurant-popup-message::-webkit-scrollbar {
        width: 6px;
        background: transparent;
    }

    #chat-popup-layout .body-cart-restaurant-popup-message::-webkit-scrollbar-thumb {
        background: transparent;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message {
        background-color: #ffffff;
        border-radius: 7px;
        width: 100%;
        height: 140px;
        margin: 10px;
        position: relative;
        display: flex;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message:hover .css-translateX-card-order {
        transform: translateX(-9px);
        transition: all 0.3s ease-in-out;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message:hover .left-information-order {
        color: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    /*#chat-popup-layout .card-information-order-restaurant-supplier-message:after .css-translateX-card-order {*/
    /*    transform: translateX(-80px);*/
    /*    transition: all ease 0.5s;*/
    /*}*/

    #chat-popup-layout .card-information-order-restaurant-supplier-message .left-information-order{
        width: 25%;
        border-right: 1px solid #dfdfdf;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .left-information-order i{
        font-size: 33px;
        position: absolute;
        top: 58px;
        z-index: 0;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .css-translateX-card-order{
        width: 92.5px;
        height: 100%;
        position: absolute;
        background-color: #52a43a;
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
        transform: translateX(-80px);
        transition: all 0.3s ease-in-out;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .right-information-order{
        display: flex;
        width: 75%;
        padding-left: 10px;
        flex-wrap: wrap;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .detail-information-card{
        padding: 5px;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .detail-information-card p{
        color: #919aa3;
        font-weight: 500;
        font-size: 14px !important;
        padding-left: 5px;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .detail-information-card i{
        color: #919aa3;
        font-size: 14px !important;
        font-style: normal;
    }


    #chat-popup-layout .card-information-order-restaurant-supplier-message .content-infor{
        border-bottom: 1px solid #dfdfdf;
        height: max-content;
        width: 100%;
        padding-left: 5px;
    }

    #chat-popup-layout .card-information-order-restaurant-supplier-message .buttun-action-card-order{
        padding: 7px;
        margin: 7px 5px 7px 0px;
        font-weight: 700;
    }


    /*SEND LINK MESSAGE*/
    .layout-preview-input-popup-message {
        cursor: pointer;
        padding: 10px;
        position: relative;
        width: 100%;
        background: #c4dcfaab;
        display: flex;
        height: 65px;
    }

    .img-class-popup-message {
        margin-right: 5px;
    }

    .img-thumbnail-input-popup-message {
        height: 50px;
        width: 50px;
        object-fit: cover;
    }

    .text-input-thumbnail-popup-message {
        border-left: 3px solid #f36868;
        padding-left: 5px;
        text-overflow: ellipsis;
        white-space: normal;
        overflow: hidden;
    }

    .title-thumbnail-video-popup-message {
        color: #403b3b;
        font-weight: 600;
        width: 214px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .footer-text-input-thumbnail-popup-message {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        width: 238px;
    }

    .icon-close-thumbnail-link-popup-message {
        color: #a3a3a3;
        cursor: pointer;
        font-size: 18px;
        position: absolute;
        right: 2px;
        top: 2px;
        z-index: 1;
    }

    #chat-body-message-popup .chat-message-link-text img {
        padding: 5px;
        width: 35px;
        height: 35px;
        object-fit: contain;
        background-color: #ffffff;
        margin-right: 7px;
    }

    #chat-body-message-popup .chat-message-link-text {
        display: flex;
        margin-right: 7px;
    }

    #chat-body-message-popup .chat-message-link-info-title-link {
        font-size: 15px !important;
        line-height: 15px;
        font-weight: 500;
        overflow: hidden;
        color: #403b3b;
        width: 100%;
        word-break: break-all;
        text-overflow: ellipsis;
    }

    #chat-body-message-popup .chat-body-message-text-link {
        width: 233px;
        text-overflow: ellipsis;
        overflow: hidden;
        max-height: 60px;
        padding: 5px 10px 5px 10px;
    }

    #chat-body-message-popup .chat-message-link-thumbnail {
        width: 100%;
        padding: 10px 10px 0px 10px;
    }

    /*REPLY POPUP*/
    #chat-popup-layout .layout-reply-input-popup-message {
        display: flex;
        height: max-content;
        width: 100%;
        position: relative;
        background: #ffffff;
        margin: 0;
        cursor: pointer;
    }

    #chat-popup-layout .layout-thumbnail-reply-popup-message {
        padding: 10px;
        position: relative;
        width: 100%;
        background: #c4dcfaab;
        display: flex;
    }

    #chat-popup-layout .icon-close-thumbnail-image-close-reply-popup {
        color: #a3a3a3;
        cursor: pointer;
        font-size: 18px;
        position: absolute;
        right: 5px;
        top: 5px;
        z-index: 1;
    }

    #chat-popup-layout .img-thumbnail-link-input-popup-message {
        height: 50px;
        width: 50px;
    }

    #chat-popup-layout .text-input-thumbnail-reply-popup-message {
        border-left: 3px solid #f36868;
        padding-left: 5px;
        text-overflow: ellipsis;
        white-space: normal;
        overflow: hidden;
    }

    #chat-popup-layout .icon-reply-thumbnail-reply-popup-message {
        color: #6c6767;
    }

    #chat-popup-layout .name-reply-popup-message {
        color: #6c6767;
        font-weight: 600;
    }

    #chat-popup-layout .chat-body-message-item-reply {
        cursor: pointer;
        display: flex;
        align-items: center;
        background-color: #C8DEFF;
        padding: 8px;
        margin: 8px 8px 0 8px;
        border-radius: 8px;
    }

    #chat-popup-layout .chat-body-message-item-reply-image, #chat-body-message-popup .chat-body-audio-image {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        overflow: hidden;
        margin-right: 5px;
    }

    #chat-popup-layout .chat-body-message-item-reply-info {
        border-left: 2px solid #f36868;
        line-height: 17px;
        padding-left: 5px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        width: calc(100% - 40px);
    }

    #chat-popup-layout .chat-body-message-item-reply-info.reply-message-image {
        width: 100%
    }

    #chat-popup-layout .reply-body-message-link {
        width: 100%;
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #0068FF;
    }

    #chat-popup-layout .chat-body-message-item-reply-text {
        font-size: 14px !important;
        color: #001A33;
        word-wrap: break-word;
        word-break: break-all;
        margin: 8px 8px 0 8px;
        font-family: "Segoe UI", "Helvetica", "Arial", sans-serif !important;
    }

    #chat-popup-layout .chat-body-message-item-reply-name {
        color: #131a20;
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 165px;
    }

    #chat-popup-layout .chat-body-message-item-reply-type {
        color: #72808E;
        font-size: 14px;
        font-weight: 400;
        max-width: 100%;
        line-height: 18px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    #chat-popup-layout .img-class-reply-popup-message {
        margin-right: 5px;
    }

    #chat-popup-layout .footer-text-input-thumbnail-reply-popup-message {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    #chat-popup-layout .chat-body-message-item-reply-img {
        width: 100%;
        height: 100%;
    }

    /*ACTION SCROLL BACK MESSAGE CURRENT*/
    #chat-popup-layout .action-scroll-back-current-message-popup {
        background-color: #fff;
        text-align: center;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        line-height: 30px;
        position: absolute;
        right: 10px;
        display: flex;
        bottom: 10px;
        border: 1px solid #dfdfdf;
        z-index: 2;
        color: #726e6e;
        justify-content: center;
        align-items: center;
    }

    #chat-popup-layout .action-scroll-back-current-message-popup:hover {
        color: black;
        border: 1px solid #3674e0;
    }

    /*TYPING POPUP*/
    #typing-data-message-popup-message.chat-bubble {
        width: 55px;
        bottom: 10px;
        left: 10px;
        position: absolute;
        background-color: #E6F8F1;
        padding: 10px;
        border-radius: 20px;
        border-bottom-left-radius: 2px;
        z-index: 2;
    }

    #typing-data-message-popup-message .typing {
        align-items: center;
        display: flex;
        height: 17px;
    }

    #typing-data-message-popup-message .typing .dot {
        animation: mercuryTypingAnimation 1.8s infinite ease-in-out;
        background-color: #6CAD96;
        /* / / rgba(20, 105, 69, .7); */
        border-radius: 50%;
        height: 7px;
        margin-right: 4px;
        vertical-align: middle;
        width: 7px;
        display: inline-block;
    }

    #typing-data-message-popup-message .typing .dot:nth-child(1) {
        animation-delay: 200ms;
    }

    #typing-data-message-popup-message .typing .dot:nth-child(2) {
        animation-delay: 300ms;
    }

    #typing-data-message-popup-message .typing .dot:nth-child(3) {
        animation-delay: 400ms;
    }

    #typing-data-message-popup-message .typing .dot:last-child {
        margin-right: 0;
    }

    #chat-body-message-popup .chat-body-message-element.message-left {
        margin-top: 40px;
        max-width: 318px !important;
    }

    #chat-body-message-popup .notify-message-content {
        max-width: 80%;
        height: auto;
        position: relative;
        /* word-wrap: break-word; */
        background: rgb(255 255 255 / 50%);
        color: #72808e;
        border-radius: 20px;
        padding: 2px 10px;
        z-index: 2;
        align-items: center;
        text-align: center;
        word-break: normal;
        /* display: flex; */
        display: inline-block;
        min-inline-size: unset;
    }


    /* Grid image */
    .body-visible-message .wrapper {
        max-width: 100%;
        min-width: 200px;
        margin: 0 auto;
        position: relative;
        border-radius: 0;
    }

    .body-visible-message .gallery__link {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 4px;
    }

    .body-visible-message .gallery__image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1);
        /*transition: transform .5s, filter .5s;*/
        border-radius: 4px;
    }

    .body-visible-message .gallery__link:hover .gallery__image {
        /*transform: scale(1.2);*/
    }

    .body-visible-message .more-photos {
        color: #fff;
        font-size: 30px;
        font-weight: 500;
        height: 100%;
        left: 50%;
        position: absolute;
        text-align: center;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 1;
    }

    .body-visible-message .more-photos::after {
        background: rgba(128, 128, 128, 0.7) none repeat scroll 0 0;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }

    .body-visible-message .more-photos > span {
        font-size: 24px !important;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 9;
    }

    /* 1 image */
    .body-visible-message .wrapper.one-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    .body-visible-message .wrapper.one-image .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 4;
    }


    /* 2 image */
    .body-visible-message .wrapper.two-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    .body-visible-message .wrapper.two-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 4;
    }

    .body-visible-message .wrapper.two-image .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 4;
    }

    /* 3 image */
    .body-visible-message .wrapper.three-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    .body-visible-message .wrapper.three-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 4;
    }

    .body-visible-message .wrapper.three-image .gallery__item--2 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.three-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    /* 3 ảnh version 2 */
    .body-visible-message .wrapper.three-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 60px);
        gap: 4px;
    }

    .body-visible-message .wrapper.three-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.three-image-other .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.three-image-other .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    /* 4 ảnh */
    .body-visible-message .wrapper.four-image .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(4, 65px);
        gap: 4px;
    }

    .body-visible-message .wrapper.four-image .gallery__item--1 {
        grid-column: 1 / span 6;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.four-image .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.four-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.four-image .gallery__item--4 {
        grid-column: 5 / span 2;
        grid-row: 3 / span 2;
    }

    /* 4 ảnh version 2*/
    .body-visible-message .wrapper.four-image-other .gallery {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(6, 40px);
        gap: 4px;
    }

    .body-visible-message .wrapper.four-image-other .gallery__item--1 {
        grid-column: 1 / span 4;
        grid-row: 1 / span 6;
    }

    .body-visible-message .wrapper.four-image-other .gallery__item--2 {
        grid-column: 5 / span 2;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.four-image-other .gallery__item--3 {
        grid-column: 5 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.four-image-other .gallery__item--4 {
        grid-column: 5 / span 2;
        grid-row: 5 / span 2;
    }

    /* 5 ảnh trở lên */
    .body-visible-message .wrapper.five-image .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(6, 50px);
        gap: 4px;
    }

    .body-visible-message .wrapper.five-image .gallery__item--1 {
        grid-column: 1 / span 2;
        grid-row: 1 / span 3;
    }

    .body-visible-message .wrapper.five-image .gallery__item--2 {
        grid-column: 1 / span 2;
        grid-row: 4 / span 3;
    }

    .body-visible-message .wrapper.five-image .gallery__item--3 {
        grid-column: 3 / span 2;
        grid-row: 1 / span 2;
    }

    .body-visible-message .wrapper.five-image .gallery__item--4 {
        grid-column: 3 / span 2;
        grid-row: 3 / span 2;
    }

    .body-visible-message .wrapper.five-image .gallery__item--5 {
        grid-column: 3 / span 2;
        grid-row: 5 / span 2;
    }

    /*LIST IMAGE MEMBER SEENED*/
    #chat-body-message-popup .users-thumb-list {
        float: right;
        text-align: center;
    }

    #chat-body-message-popup .users-thumb-list > a:first-child {
        margin-left: 0;
    }

    #chat-body-message-popup .users-thumb-list > a {
        display: inline-block;
        margin-left: -10px;
        position: relative;
    }

    #chat-body-message-popup .users-thumb-list > a img {
        border: 1px solid #fff;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        object-fit: cover;
    }

    .message-header-list-body .tag-orange {
        color: #fa6342;
        font-size: 14px;
        padding-right: 5px;
    }

    .message-header-list-body .tag-friend {
        color: rgb(117, 98, 216);
        font-size: 14px;
        padding-right: 5px;
    }

    .message-header-list-body .tag-greens {
        color: rgb(21, 168, 95);
        font-size: 14px;
        padding-right: 5px;
    }

    /*GIAO DIỆN ĐƠN HÀNG TRONG NỘI DUNG CUỘC TRÒ CHUYỆN*/
    #chat-body-message-popup .card-information-order-restaurant-supplier-message {
        background-color: #ffffff;
        border-radius: 7px;
        width: 100%;
        height: 140px;
        margin: 10px;
        position: relative;
        display: flex;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message:hover .css-translateX-card-order {
        transform: translateX(-38px);
        transition: all 0.3s ease-in-out;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message:hover .left-information-order {
        color: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    /*#chat-body-message-popup .card-information-order-restaurant-supplier-message:after .css-translateX-card-order {*/
    /*    transform: translateX(-80px);*/
    /*    transition: all ease 0.5s;*/
    /*}*/

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .left-information-order{
        width: 25%;
        border-right: 1px solid #dfdfdf;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .left-information-order i{
        font-size: 33px;
        position: absolute;
        top: 58px;
        z-index: 0;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .css-translateX-card-order{
        width: 92.5px;
        height: 100%;
        position: absolute;
        background-color: #52a43a;
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
        transform: translateX(-80px);
        transition: all 0.3s ease-in-out;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .right-information-order{
        display: flex;
        width: 75%;
        padding-left: 0px;
        flex-wrap: wrap;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .detail-information-card{
        padding: 5px;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .detail-information-card p{
        color: #919aa3;
        font-weight: 500;
        font-size: 13px !important;
        padding-left: 5px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .detail-information-card i{
        color: #919aa3;
        font-size: 13px !important;
        font-style: normal;
    }


    #chat-body-message-popup .card-information-order-restaurant-supplier-message .content-infor{
        border-bottom: 1px solid #dfdfdf;
        height: max-content;
        width: 100%;
        padding-left: 5px;
    }

    #chat-body-message-popup .card-information-order-restaurant-supplier-message .buttun-action-card-order{
        padding: 7px;
        margin: 7px 5px 7px 0px;
        font-weight: 700;
    }

    /*Vote popup*/
    #chat-body-message-popup .body-message-vote {
        width: 80%;
    }

    #chat-body-message-popup .div-vote {
        width: 100% !important;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #chat-body-message-popup .div-body-message-vote {
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
    }

    #chat-body-message-popup .item-vote {
        position: relative;
        margin: 10px 0;
        background: #eeeeee;
        border-radius: 4px;
        padding: 7px 40px 7px 10px;
        font-weight: 400;
        text-align: left;
        font-size: 14px;
        cursor: pointer;
        display: flex;
        height: 30px;
    }

    #chat-body-message-popup .content-vote {
        position: relative;
        display: inline-block;
        word-break: break-word;
        flex: 1;
        padding: 0 6px;
    }

    #chat-body-message-popup .count-vote {
        top: calc(50% - 10px);
        position: absolute;
        display: inline-block;
        right: 8px;
        line-height: normal;
        font-weight: 600;
        text-align: left;
        font-size: 14px;
        letter-spacing: normal;
    }

    #chat-body-message-popup .notify-message-username {
        font-size: 12px !important;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 5;
        text-overflow: ellipsis;
        word-break: break-word;
        /* vertical-align: bottom; */
        margin-right: 0;
        overflow: hidden;
        text-align: center;
        display: inline-table;
    }

    #chat-body-message-popup .underline-you {
        cursor: pointer;
        position: relative;
    }

    #chat-body-message-popup .text-report-body-visible-message {
        color: #0068FFFF;
        font-weight: 550;
    }

    #chat-body-message-popup .event-vote-message-content-name {
        text-decoration: none !important;
        color: #646464;
        font-weight: bold;
        font-size: 12px !important;
    }

    /* VOTE */
    #chat-popup-tms .item-detail-vote {
        height: 30px;
        display: flex;
        align-items: center;
    }

    #chat-popup-tms .div-item-vote {
        width: calc(100% - 80px);
        height: 100%;
    }

    #chat-popup-tms .div-vote {
        position: absolute;
        background: #b3d8ff;
        height: 100%;
        border-radius: 4px;
        left: 0;
        top: 0;
    }

    #chat-popup-tms .status-member-message.online {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #00b300;
        border: 2px solid #fff;
    }

    #chat-popup-tms .status-member-message.online {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #00b300;
        border: 2px solid #fff;
    }

    #chat-popup-tms .img-members-about {
        position: relative;
        width: 40px;
        height: 40px;
        margin-right: 8px;
    }

    #chat-popup-tms .img-avt-member-online {
        position: absolute !important;
        top: 0;
        right: 0;
    }

    .close-popup-message {
        font-size: 20px;
        margin-right: 8px;
        cursor: pointer;
    }

    .send-message {
        font-size: 16px;
        cursor: pointer;
    }

    .body-visible-message .chat-body-message-element.message-right, .body-visible-message .chat-body-message-element.message-me {
        flex-direction: row-reverse;
    }

    .chat-body-message-main .margin-item, .message-me {
        margin: 0px !important;
    }

    .body-visible-message .chat-body-message-element {
        display: flex;
        width: 100%;
        height: auto;
        margin-bottom: 10px;
        position: relative;
    }

    .message-me {
        width: max-content;
        padding: 10px;
        border-radius: 10px;
    }

    .body-visible-message .chat-body-message-element.message-right .chat-body-message, .body-visible-message .chat-body-message-element.message-me .chat-body-message {
        min-width: 100px;
    }

    .body-visible-message .message-right .chat-body-message, .body-visible-message .message-me .chat-body-message {
        border-top-right-radius: 4px;
        animation: slideRight 0.4s cubic-bezier(.4, 0, .2, 1);
        background-color: #e2f1fa;
        color: #001A33;
    }

    .body-visible-message .chat-body-message {
        max-width: 70%;
        min-width: 100px;
        min-height: 40px;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.12) 0 1px 3px, rgba(0, 0, 0, 0.24) 0 1px 2px;
        position: relative;
    }

    .body-visible-message .chat-body-message-text {
        font-size: 14px !important;
        color: #404E67;
        line-height: 1.5;
        text-align: left;
        padding: 8px 8px 0 8px;
        word-break: break-word;
        width: 100%;
    }

    .body-visible-message .message-right .chat-body-message-footer, .body-visible-message .message-me .chat-body-message-footer {
        margin-right: 8px;
    }

    .body-visible-message .chat-body-message-footer {
        width: 100%;
        height: auto;
        min-height: 20px;
        position: relative;
        display: flex;
        margin-bottom: 15px;
        padding: 0 8px;
        justify-content: space-between;
        align-items: center;
    }

    .body-visible-message .time-message-ago {
        color: #979797;
        font-size: 12px !important;
        display: block;
        position: relative;
        top: 5px;
    }

    .body-visible-message .chat-body-message-element.message-left, .body-visible-message .chat-body-message-element.message-you {
        margin-top: 10px;
    }

    .chat-body-message-element.message-you:not(:has(img.profile-user)) {
        margin-left: 40px !important;
    }

    .message-you {
        width: max-content;
        padding: 10px 4px;
        border-radius: 10px;
        color: #111111 !important;
    }

    .body-visible-message .message-left .chat-body-message, .body-visible-message .message-you .chat-body-message {
        margin-left: 10px;
        border-top-left-radius: 4px;
        animation: slideLeft 0.4s cubic-bezier(.4, 0, .2, 1);
        background-color: #f8f8f8;
        color: #001A33;
    }

    .chat-body-message-element-name-text {
        font-size: 13px !important;
        color: #394e60;
        position: absolute;
        bottom: calc(100% - 8px);
        left: 54px;
    }

    .chat-body-message-element .chat-body-message-element-avatar {
        position: relative;
        border-radius: 100%;
        width: 40px;
        height: 40px;
        object-fit: cover;
        border: 1px solid #fff;
        bottom: 0px;
        left: -3px;
    }
</style>
<div id="chat-container">
    <i class="fa-solid fa-comment"></i>
</div>
<div id="chat-admin-components">
    <div class="chat-contain" id="chat-popup-layout" data-user-id="">
        <div class="chat-form">
            <div class="chat-header">
                <div class="chat-header-info">
                    <div class="chat-header-info-avatar" data-toggle="tooltip" data-placement="top" data-original-title="Chức năng">
                        <div class="chat-header-avatar">
                            <img id="chat-avatar-image" class="chat-avatar-image" src="" alt=""/>
                            <span class="chat-status online-status"></span>
                        </div>
                        <div class="header-chat-display">
                            <p id="header-chat-display-name" class="header-chat-display-name"></p>
                        </div>
                    </div>
                    <div id="close-popup-message" class="close-popup-message">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
            </div>
            <div class="chat-body body-visible-message" style="">
                <div class="" id="chat-body-message-popup"></div>
            </div>
            <div id="btn-send-message" class="chat-footer-popup">
                <div class="chat-footer-message"><input placeholder="Nhập tin nhắn" class="chat-footer-message-input" id="chat-footer-message-input"/></div>
                <div class="send-message"><i class="fa-solid fa-paper-plane"></i></div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/socket.io-client/dist/socket.io.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

        elementChatContainer.style.top = height - 80 + 'px';

        elementChatContainer.addEventListener('click',function() {
            elementChatComponents.style.display = "flex";
            elementChatContainer.style.display = "none";
        })

        elementClosePopup.addEventListener('click',function() {
            elementChatContainer.style.display = "flex";
            elementChatComponents.style.display = "none";
        })

        configAdminSocket();

        window.onbeforeunload = function() {
            socket.emit('disconnect');
        }
    });

    const socketOptions = {
        transports: ["websocket"],
        reconnection: true,
        reconnectionDelay: 1000,
        reconnectionDelayMax: 5000,
        skipReconnecting: true
    }
    const socket = io("http://localhost:3000",socketOptions);
    const elementChatComponents = document.getElementById('chat-admin-components');
    const elementClosePopup = document.getElementById('close-popup-message');
    const messageInput = document.getElementById('chat-footer-message-input');
    const sendMessageBtn = document.getElementById('btn-send-message');
    const elementBodyMessage = document.getElementById('chat-body-message-popup');
    const elementChatContainer = document.getElementById('chat-container');
    const adminDataElement = document.getElementById('admin-data');
    let adminData = sessionStorage.getItem("current_admin") ? JSON.parse(JSON.parse(sessionStorage.getItem("current_admin"))) : "";
    let dataEmit = adminData ? {
        'user_name': adminData.name,
        'user_id': adminData.id,
        'user_email': adminData.email,
        'user_avatar': 'https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?w=740&t=st=1715415975~exp=1715416575~hmac=ab8ed7f147b56c09ced92efadffc9518cbc0d60a308d433ae2c6271e6ff4c835',
        'is_admin': 1,
        'message': ''
    } : {};
    messageInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            handleSendMessage();
        }
    });

    sendMessageBtn.addEventListener('click', function() {
        handleSendMessage();
    });

    function handleSendMessage() {
        const message = messageInput.value;
        if(message.trim() == '') return;
        dataEmit.message = message;
        socket.emit('message-text', dataEmit);
        messageInput.value = '';
        dataEmit.message = "";
    }

    function customHourMinutesNowDate() {
        let now = new Date();
        let currentHour = now.getHours();
        let currentMinute = now.getMinutes();

        currentHour = currentHour < 10 ? ('0' + currentHour).slice(-2) : currentHour;
        currentMinute = currentMinute < 10 ? ('0' + currentMinute).slice(-2) : currentMinute;

        return currentHour + ':' + currentMinute;
    }

    function configAdminSocket() {
        socket.on('connect', function(){
            console.log('Socket connected');
            adminData = JSON.parse(JSON.parse(sessionStorage.getItem("current_admin")));
            dataEmit = {
                'user_name': adminData.name,
                'user_id': adminData.id,
                'user_email': adminData.email,
                'user_avatar': 'https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?w=740&t=st=1715415975~exp=1715416575~hmac=ab8ed7f147b56c09ced92efadffc9518cbc0d60a308d433ae2c6271e6ff4c835',
                'is_admin': 1,
                'message': ''
            }
        });

        socket.on('disconnect', function(){
            console.log('Socket disconnected');
        });

        socket.on('reconnect', function(){
            console.log('Socket reconnected');
        });

        socket.on('socket-error', function(data){
            console.log('Socket error:', data);
        })

        socket.on('disconnected', function(){
            console.log('Socket disconnected 2');
            elementChatComponents.style.display = "none";
            elementChatContainer.style.display = "none";
            elementBodyMessage.innerHTML = "";
        });

        socket.emit('join-room',dataEmit);

        socket.on('join-room',function(data) {
            console.log('join-room', data);
            adminData = JSON.parse(JSON.parse(sessionStorage.getItem("current_admin")));
            dataEmit = {
                'user_name': adminData.name,
                'user_id': adminData.id,
                'user_email': adminData.email,
                'user_avatar': 'https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?w=740&t=st=1715415975~exp=1715416575~hmac=ab8ed7f147b56c09ced92efadffc9518cbc0d60a308d433ae2c6271e6ff4c835',
                'is_admin': 1,
                'message': ''
            }
            socket.emit('update-info',dataEmit);
        });

        socket.on('message-text', function(data) {
            console.log('Received message from server:', (data));
            elementChatComponents.style.display = "flex";
            if(data.user_id == adminData.id) {
                const htmlContent = `<div class="chat-body-message-element message-me margin-item">
                                        <div class="chat-body-message">
                                            <div class="chat-body-message-text">${data.message}</div>
                                            <div class="chat-body-message-footer">
                                                <span class="time-message-ago">${customHourMinutesNowDate()}</span>
                                            </div>
                                        </div>
                                    </div>`;
                elementBodyMessage.insertAdjacentHTML('afterbegin', htmlContent);
            } else {
                const htmlContent = `<div class="chat-body-message-element message-you margin-item">
                                        <span class="chat-body-message-element-name-text">${data.user_name}</span>
                                        <img class="chat-body-message-element-avatar profile-user" src="${data.user_avatar}">
                                        <div class="chat-body-message">
                                            <div class="chat-body-message-text">${data.message}</div>
                                            <div class="chat-body-message-footer">
                                                <span class="time-message-ago">${customHourMinutesNowDate()}</span>
                                            </div>
                                        </div>
                                    </div>`;
                document.getElementById('header-chat-display-name').innerHTML = `<b>${data.user_name}</b>`;
                document.getElementById('chat-avatar-image').setAttribute('src', `${data.user_avatar}`);
                document.getElementById('chat-popup-layout').dataset.userId = data.user_id;
                elementBodyMessage.insertAdjacentHTML('afterbegin', htmlContent);
            }
        });
    }
</script>

