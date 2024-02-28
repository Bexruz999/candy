@extends('layouts.index')

@section('seo')
    <title>{{ $settings->title }}</title>
    <meta name="description" content="{{ $settings->description }}">
@endsection

@section('content')

    <x-header page="contact"/>

    <section class="contact">
        <div class="contact__bg">
            <img src="/img/contact2.png" alt="product" class="parallax">
            <img src="/img/contact.png" alt="product" class="parallax">
        </div>
        <div class="container">
            <h1 class="contact__title">
                {{ $settings->title }}
            </h1>
            <ul class="contact-list">
                <li class="contact-list__item">
                    <div class="contact-item">
                        <div class="contact-item__title">
                            Головной офис:
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-tel.svg" alt="ico">
                            <a href="{{ __('contacts.Головной офис tel-link') }}">{{ __('contacts.Головной офис tel') }}</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item__title">
                            Адрес:
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-marker.svg" alt="ico">
                            <span>{{ __('contacts.Адрес') }}</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item__title">
                            Почта:
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-mail.svg" alt="ico">
                            <a href="{{ __('contacts.Почта link') }}">{{ __('contacts.Почта') }}</a>
                        </div>
                    </div>
                </li>
                <li class="contact-list__item">
                    <div class="contact-item">
                        <div class="contact-item__title">
                            Отдел импорта:
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-tel.svg" alt="ico">
                            <a href="{{ __('contacts.Отдел импорта tel-link') }}">{{ __('contacts.Отдел импорта tel') }}</a>
                            <a href="{{ __('contacts.Отдел импорта tg-link') }}" target="_blank">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="currentColor" fill-opacity="0.1"/>
                                    <path d="M10.0163 16.1875C14.1676 14.3497 16.9359 13.138 18.321 12.5526C22.2757 10.8812 23.0975 10.5908 23.6331 10.5811C23.7509 10.5791 24.0143 10.6088 24.1849 10.7495C24.3289 10.8683 24.3686 11.0287 24.3876 11.1414C24.4065 11.254 24.4301 11.5105 24.4114 11.711C24.1971 13.9991 23.2698 19.5516 22.798 22.1143C22.5984 23.1987 22.2053 23.5623 21.8248 23.5979C20.9978 23.6752 20.3699 23.0425 19.5689 22.509C18.3156 21.6742 17.6075 21.1545 16.3909 20.3398C14.9849 19.3984 15.8964 18.8809 16.6976 18.0353C16.9073 17.814 20.551 14.4463 20.6215 14.1408C20.6303 14.1026 20.6385 13.9602 20.5552 13.885C20.472 13.8098 20.3491 13.8355 20.2604 13.856C20.1347 13.8849 18.1324 15.2297 14.2537 17.8902C13.6854 18.2868 13.1706 18.48 12.7094 18.4699C12.2009 18.4587 11.2228 18.1777 10.4958 17.9376C9.60394 17.643 8.89515 17.4873 8.95687 16.987C8.98902 16.7264 9.34215 16.4599 10.0163 16.1875Z" fill="currentColor"/>
                                </svg>
                            </a>
                            <a href="{{ __('contacts.Отдел импорта whatsapp-link') }}" target="_blank">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="currentColor" fill-opacity="0.1"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5356 24.4202H18.5328C17.2705 24.4199 16.0323 24.0824 14.9519 23.4451L14.695 23.2934L12.0321 23.988L12.7428 21.406L12.5755 21.1412C11.8714 20.0272 11.4992 18.7397 11.5 17.4178C11.5016 13.5604 14.6576 10.4219 18.5385 10.4219C20.4176 10.4227 22.1839 11.1512 23.5123 12.4739C24.8407 13.7962 25.5717 15.5543 25.5709 17.4235C25.5692 21.2813 22.4133 24.4202 18.5356 24.4202ZM20.9493 18.4963C21.1433 18.5665 22.1831 19.0751 22.3946 19.1804C22.606 19.2858 22.7469 19.3394 22.7996 19.427C22.8524 19.5146 22.8524 19.936 22.6762 20.4272C22.5001 20.9184 21.6551 21.3669 21.2488 21.4274C20.8843 21.4815 20.4233 21.5041 19.9168 21.3438C19.6095 21.247 19.2155 21.1174 18.7109 20.9007C16.5895 19.9893 15.2039 17.865 15.098 17.7246L15.0967 17.7229C14.986 17.5761 14.2343 16.5794 14.2343 15.5487C14.2343 14.5138 14.7806 14.0048 14.9746 13.7941C15.1686 13.5834 15.3975 13.531 15.5388 13.531C15.68 13.531 15.8208 13.5322 15.9442 13.5382C16.0737 13.5451 16.2482 13.4894 16.4199 13.8995C16.5965 14.3204 17.0193 15.3557 17.0721 15.4611C17.1248 15.5665 17.1602 15.6891 17.0895 15.8296C17.0189 15.9697 16.9841 16.0576 16.8781 16.1803C16.7722 16.303 16.6557 16.4544 16.5607 16.5488C16.4552 16.6534 16.3448 16.7672 16.4682 16.9779C16.5915 17.1886 17.0161 17.8771 17.6448 18.4349C18.4528 19.1514 19.1343 19.3734 19.3457 19.4787C19.5572 19.5841 19.6806 19.5667 19.8039 19.4262C19.9273 19.2862 20.3328 18.8124 20.4736 18.6016C20.6145 18.391 20.7553 18.426 20.9493 18.4963Z" fill="currentColor"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5357 9C20.8 9.00081 22.9251 9.87747 24.523 11.4686C26.1213 13.0596 27.0008 15.1746 27 17.424C26.9984 22.0652 23.2007 25.8415 18.5357 25.8415H18.5321C17.1156 25.8411 15.7235 25.4879 14.4872 24.8171L10 25.9876L11.201 21.6253C10.4603 20.349 10.0702 18.9008 10.071 17.4171C10.0726 12.7759 13.8699 9 18.5357 9ZM18.5329 24.4199H18.5357C22.4134 24.4199 25.5693 21.281 25.571 17.4232C25.5718 15.554 24.8408 13.7958 23.5124 12.4736C22.184 11.1509 20.4177 10.4224 18.5386 10.4216C14.6577 10.4216 11.5017 13.5601 11.5001 17.4175C11.4993 18.7394 11.8714 20.0269 12.5756 21.1409L12.7428 21.4057L12.0322 23.9877L14.695 23.2931L14.952 23.4448C16.0324 24.0821 17.2706 24.4196 18.5329 24.4199Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-mail.svg" alt="ico">
                            <a href="{{ __('contacts.Отдел экспорта mail-link') }}">{{ __('contacts.Отдел импорта mail') }}</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item__title">
                            Отдел экспорта:
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-tel.svg" alt="ico">
                            <a href="{{ __('contacts.Отдел экспорта tel-link') }}">{{ __('contacts.Отдел экспорта tel') }}</a>
                            <a href="{{ __('contacts.Отдел экспорта tg-link') }}" target="_blank">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="currentColor" fill-opacity="0.1"/>
                                    <path d="M10.0163 16.1875C14.1676 14.3497 16.9359 13.138 18.321 12.5526C22.2757 10.8812 23.0975 10.5908 23.6331 10.5811C23.7509 10.5791 24.0143 10.6088 24.1849 10.7495C24.3289 10.8683 24.3686 11.0287 24.3876 11.1414C24.4065 11.254 24.4301 11.5105 24.4114 11.711C24.1971 13.9991 23.2698 19.5516 22.798 22.1143C22.5984 23.1987 22.2053 23.5623 21.8248 23.5979C20.9978 23.6752 20.3699 23.0425 19.5689 22.509C18.3156 21.6742 17.6075 21.1545 16.3909 20.3398C14.9849 19.3984 15.8964 18.8809 16.6976 18.0353C16.9073 17.814 20.551 14.4463 20.6215 14.1408C20.6303 14.1026 20.6385 13.9602 20.5552 13.885C20.472 13.8098 20.3491 13.8355 20.2604 13.856C20.1347 13.8849 18.1324 15.2297 14.2537 17.8902C13.6854 18.2868 13.1706 18.48 12.7094 18.4699C12.2009 18.4587 11.2228 18.1777 10.4958 17.9376C9.60394 17.643 8.89515 17.4873 8.95687 16.987C8.98902 16.7264 9.34215 16.4599 10.0163 16.1875Z" fill="currentColor"/>
                                </svg>
                            </a>
                            <a href="{{ __('contacts.Отдел экспорта whatsapp-link') }}" target="_blank">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17.5" cy="17.5" r="17.5" fill="currentColor" fill-opacity="0.1"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5356 24.4202H18.5328C17.2705 24.4199 16.0323 24.0824 14.9519 23.4451L14.695 23.2934L12.0321 23.988L12.7428 21.406L12.5755 21.1412C11.8714 20.0272 11.4992 18.7397 11.5 17.4178C11.5016 13.5604 14.6576 10.4219 18.5385 10.4219C20.4176 10.4227 22.1839 11.1512 23.5123 12.4739C24.8407 13.7962 25.5717 15.5543 25.5709 17.4235C25.5692 21.2813 22.4133 24.4202 18.5356 24.4202ZM20.9493 18.4963C21.1433 18.5665 22.1831 19.0751 22.3946 19.1804C22.606 19.2858 22.7469 19.3394 22.7996 19.427C22.8524 19.5146 22.8524 19.936 22.6762 20.4272C22.5001 20.9184 21.6551 21.3669 21.2488 21.4274C20.8843 21.4815 20.4233 21.5041 19.9168 21.3438C19.6095 21.247 19.2155 21.1174 18.7109 20.9007C16.5895 19.9893 15.2039 17.865 15.098 17.7246L15.0967 17.7229C14.986 17.5761 14.2343 16.5794 14.2343 15.5487C14.2343 14.5138 14.7806 14.0048 14.9746 13.7941C15.1686 13.5834 15.3975 13.531 15.5388 13.531C15.68 13.531 15.8208 13.5322 15.9442 13.5382C16.0737 13.5451 16.2482 13.4894 16.4199 13.8995C16.5965 14.3204 17.0193 15.3557 17.0721 15.4611C17.1248 15.5665 17.1602 15.6891 17.0895 15.8296C17.0189 15.9697 16.9841 16.0576 16.8781 16.1803C16.7722 16.303 16.6557 16.4544 16.5607 16.5488C16.4552 16.6534 16.3448 16.7672 16.4682 16.9779C16.5915 17.1886 17.0161 17.8771 17.6448 18.4349C18.4528 19.1514 19.1343 19.3734 19.3457 19.4787C19.5572 19.5841 19.6806 19.5667 19.8039 19.4262C19.9273 19.2862 20.3328 18.8124 20.4736 18.6016C20.6145 18.391 20.7553 18.426 20.9493 18.4963Z" fill="currentColor"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5357 9C20.8 9.00081 22.9251 9.87747 24.523 11.4686C26.1213 13.0596 27.0008 15.1746 27 17.424C26.9984 22.0652 23.2007 25.8415 18.5357 25.8415H18.5321C17.1156 25.8411 15.7235 25.4879 14.4872 24.8171L10 25.9876L11.201 21.6253C10.4603 20.349 10.0702 18.9008 10.071 17.4171C10.0726 12.7759 13.8699 9 18.5357 9ZM18.5329 24.4199H18.5357C22.4134 24.4199 25.5693 21.281 25.571 17.4232C25.5718 15.554 24.8408 13.7958 23.5124 12.4736C22.184 11.1509 20.4177 10.4224 18.5386 10.4216C14.6577 10.4216 11.5017 13.5601 11.5001 17.4175C11.4993 18.7394 11.8714 20.0269 12.5756 21.1409L12.7428 21.4057L12.0322 23.9877L14.695 23.2931L14.952 23.4448C16.0324 24.0821 17.2706 24.4196 18.5329 24.4199Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-mail.svg" alt="ico">
                            <a href="{{ __('contacts.Отдел экспорта mail-link') }}">{{ __('contacts.Отдел экспорта mail') }}</a>
                        </div>
                    </div>
                </li>
                <li class="contact-list__item">
                    <div class="contact-item">
                        <div class="contact-item__title">
                            Отдел бухгалтерии:
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-tel.svg" alt="ico">
                            <a href="{{ __('contacts.Отдел бухгалтерии tel-link') }}">{{ __('contacts.Отдел бухгалтерии tel') }}</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item__title">
                            HR отдел:
                        </div>
                        <div class="contact-item__text">
                            <img src="/img/icons/contact-tel.svg" alt="ico">
                            <a href="{{ __('contacts.HR отдел tel-link') }}">{{ __('contacts.HR отдел tel') }}</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item__title">
                            Социальные сети:
                        </div>
                        <ul class="contact-item__social">
                            <li>
                                <a href="{{ __('contacts.Социальные сети tg-link') }}" target="_blank">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="currentColor" fill-opacity="0.1"/>
                                        <path d="M10.0163 16.1875C14.1676 14.3497 16.9359 13.138 18.321 12.5526C22.2757 10.8812 23.0975 10.5908 23.6331 10.5811C23.7509 10.5791 24.0143 10.6088 24.1849 10.7495C24.3289 10.8683 24.3686 11.0287 24.3876 11.1414C24.4065 11.254 24.4301 11.5105 24.4114 11.711C24.1971 13.9991 23.2698 19.5516 22.798 22.1143C22.5984 23.1987 22.2053 23.5623 21.8248 23.5979C20.9978 23.6752 20.3699 23.0425 19.5689 22.509C18.3156 21.6742 17.6075 21.1545 16.3909 20.3398C14.9849 19.3984 15.8964 18.8809 16.6976 18.0353C16.9073 17.814 20.551 14.4463 20.6215 14.1408C20.6303 14.1026 20.6385 13.9602 20.5552 13.885C20.472 13.8098 20.3491 13.8355 20.2604 13.856C20.1347 13.8849 18.1324 15.2297 14.2537 17.8902C13.6854 18.2868 13.1706 18.48 12.7094 18.4699C12.2009 18.4587 11.2228 18.1777 10.4958 17.9376C9.60394 17.643 8.89515 17.4873 8.95687 16.987C8.98902 16.7264 9.34215 16.4599 10.0163 16.1875Z" fill="currentColor"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ __('contacts.Социальные сети instagram-link') }}" target="_blank" rel="nofollow">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 14.1667C10 11.8655 11.8655 10 14.1667 10H20.8333C23.1345 10 25 11.8655 25 14.1667V20.8333C25 23.1345 23.1345 25 20.8333 25H14.1667C11.8655 25 10 23.1345 10 20.8333V14.1667ZM23.3327 12.4993C23.3327 12.041 22.9577 11.666 22.4993 11.666C22.041 11.666 21.666 12.041 21.666 12.4993C21.666 12.9577 22.041 13.3327 22.4993 13.3327C22.9577 13.3327 23.3327 12.9577 23.3327 12.4993ZM17.5007 13.333C19.8018 13.333 21.6673 15.1985 21.6673 17.4997C21.6673 19.8009 19.8018 21.6663 17.5007 21.6663C15.1995 21.6663 13.334 19.8009 13.334 17.4997C13.334 15.1985 15.1995 13.333 17.5007 13.333ZM15.3361 16.2511C15.7826 15.4772 16.608 15.0003 17.5015 15C18.8826 14.9995 20.0027 16.1188 20.0031 17.5C20.0036 18.8812 18.8843 20.0012 17.5031 20.0017C16.6097 20.002 15.7839 19.5256 15.3369 18.752C14.8899 17.9784 14.8896 17.025 15.3361 16.2511Z" fill="currentColor"/>
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="currentColor" fill-opacity="0.1"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ __('contacts.Социальные сети facebook-link') }}" target="_blank" rel="nofollow">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.2326 13.9297V11.7734C18.2326 11.1783 18.6717 10.6953 19.2127 10.6953H20.1928V8H18.2326C16.6086 8 15.2923 9.44792 15.2923 11.2344V13.9297H13.332V16.625H15.2923V25.25H18.2326V16.625H20.1928L21.1729 13.9297H18.2326Z" fill="currentColor"/>
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="currentColor" fill-opacity="0.1"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ __('contacts.Социальные сети whatsapp-link') }}" target="_blank">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="currentColor" fill-opacity="0.1"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5356 24.4202H18.5328C17.2705 24.4199 16.0323 24.0824 14.9519 23.4451L14.695 23.2934L12.0321 23.988L12.7428 21.406L12.5755 21.1412C11.8714 20.0272 11.4992 18.7397 11.5 17.4178C11.5016 13.5604 14.6576 10.4219 18.5385 10.4219C20.4176 10.4227 22.1839 11.1512 23.5123 12.4739C24.8407 13.7962 25.5717 15.5543 25.5709 17.4235C25.5692 21.2813 22.4133 24.4202 18.5356 24.4202ZM20.9493 18.4963C21.1433 18.5665 22.1831 19.0751 22.3946 19.1804C22.606 19.2858 22.7469 19.3394 22.7996 19.427C22.8524 19.5146 22.8524 19.936 22.6762 20.4272C22.5001 20.9184 21.6551 21.3669 21.2488 21.4274C20.8843 21.4815 20.4233 21.5041 19.9168 21.3438C19.6095 21.247 19.2155 21.1174 18.7109 20.9007C16.5895 19.9893 15.2039 17.865 15.098 17.7246L15.0967 17.7229C14.986 17.5761 14.2343 16.5794 14.2343 15.5487C14.2343 14.5138 14.7806 14.0048 14.9746 13.7941C15.1686 13.5834 15.3975 13.531 15.5388 13.531C15.68 13.531 15.8208 13.5322 15.9442 13.5382C16.0737 13.5451 16.2482 13.4894 16.4199 13.8995C16.5965 14.3204 17.0193 15.3557 17.0721 15.4611C17.1248 15.5665 17.1602 15.6891 17.0895 15.8296C17.0189 15.9697 16.9841 16.0576 16.8781 16.1803C16.7722 16.303 16.6557 16.4544 16.5607 16.5488C16.4552 16.6534 16.3448 16.7672 16.4682 16.9779C16.5915 17.1886 17.0161 17.8771 17.6448 18.4349C18.4528 19.1514 19.1343 19.3734 19.3457 19.4787C19.5572 19.5841 19.6806 19.5667 19.8039 19.4262C19.9273 19.2862 20.3328 18.8124 20.4736 18.6016C20.6145 18.391 20.7553 18.426 20.9493 18.4963Z" fill="currentColor"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5357 9C20.8 9.00081 22.9251 9.87747 24.523 11.4686C26.1213 13.0596 27.0008 15.1746 27 17.424C26.9984 22.0652 23.2007 25.8415 18.5357 25.8415H18.5321C17.1156 25.8411 15.7235 25.4879 14.4872 24.8171L10 25.9876L11.201 21.6253C10.4603 20.349 10.0702 18.9008 10.071 17.4171C10.0726 12.7759 13.8699 9 18.5357 9ZM18.5329 24.4199H18.5357C22.4134 24.4199 25.5693 21.281 25.571 17.4232C25.5718 15.554 24.8408 13.7958 23.5124 12.4736C22.184 11.1509 20.4177 10.4224 18.5386 10.4216C14.6577 10.4216 11.5017 13.5601 11.5001 17.4175C11.4993 18.7394 11.8714 20.0269 12.5756 21.1409L12.7428 21.4057L12.0322 23.9877L14.695 23.2931L14.952 23.4448C16.0324 24.0821 17.2706 24.4196 18.5329 24.4199Z" fill="currentColor"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="contact__map">
                <div id="footerMap"></div>
            </div>
            <div class="contact__copy">
                © «Candy Gold», 2006-2024 - Все права защищены.
            </div>
        </div>
    </section>

@endsection
