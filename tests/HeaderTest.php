<?php

use Lmc\HttpConstants\Header;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Lmc\HttpConstants\Header
 */
final class HeaderTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCoverAllConstants()
    {
        $headersClass = new \ReflectionClass(Header::class);
        $classHeaders = $headersClass->getConstants();
        $this->assertCount(count($headersClass->getConstants()), $this->provideHeaders());
    }

    /**
     * @test
     * @dataProvider provideHeaders
     */
    public function shouldMatchHeaderValue(string $headerConstant, string $expectedValue)
    {
        $this->assertSame($expectedValue, $headerConstant);
    }

    public function provideHeaders() : array
    {
        return [
            Header::A_IM => [Header::A_IM, 'A-IM'],
            Header::ACCEPT => [Header::ACCEPT, 'Accept'],
            Header::ACCEPT_ADDITIONS => [Header::ACCEPT_ADDITIONS, 'Accept-Additions'],
            Header::ACCEPT_CHARSET => [Header::ACCEPT_CHARSET, 'Accept-Charset'],
            Header::ACCEPT_DATETIME => [Header::ACCEPT_DATETIME, 'Accept-Datetime'],
            Header::ACCEPT_ENCODING => [Header::ACCEPT_ENCODING, 'Accept-Encoding'],
            Header::ACCEPT_FEATURES => [Header::ACCEPT_FEATURES, 'Accept-Features'],
            Header::ACCEPT_LANGUAGE => [Header::ACCEPT_LANGUAGE, 'Accept-Language'],
            Header::ACCEPT_PATCH => [Header::ACCEPT_PATCH, 'Accept-Patch'],
            Header::ACCEPT_POST => [Header::ACCEPT_POST, 'Accept-Post'],
            Header::ACCEPT_RANGES => [Header::ACCEPT_RANGES, 'Accept-Ranges'],
            Header::AGE => [Header::AGE, 'Age'],
            Header::ALLOW => [Header::ALLOW, 'Allow'],
            Header::ALPN => [Header::ALPN, 'ALPN'],
            Header::ALT_SVC => [Header::ALT_SVC, 'Alt-Svc'],
            Header::ALT_USED => [Header::ALT_USED, 'Alt-Used'],
            Header::ALTERNATES => [Header::ALTERNATES, 'Alternates'],
            Header::APPLY_TO_REDIRECT_REF => [Header::APPLY_TO_REDIRECT_REF, 'Apply-To-Redirect-Ref'],
            Header::AUTHENTICATION_CONTROL => [Header::AUTHENTICATION_CONTROL, 'Authentication-Control'],
            Header::AUTHENTICATION_INFO => [Header::AUTHENTICATION_INFO, 'Authentication-Info'],
            Header::AUTHORIZATION => [Header::AUTHORIZATION, 'Authorization'],
            Header::C_EXT => [Header::C_EXT, 'C-Ext'],
            Header::C_MAN => [Header::C_MAN, 'C-Man'],
            Header::C_OPT => [Header::C_OPT, 'C-Opt'],
            Header::C_PEP => [Header::C_PEP, 'C-PEP'],
            Header::C_PEP_INFO => [Header::C_PEP_INFO, 'C-PEP-Info'],
            Header::CACHE_CONTROL => [Header::CACHE_CONTROL, 'Cache-Control'],
            Header::CALDAV_TIMEZONES => [Header::CALDAV_TIMEZONES, 'CalDAV-Timezones'],
            Header::CLOSE => [Header::CLOSE, 'Close'],
            Header::CONNECTION => [Header::CONNECTION, 'Connection'],
            Header::CONTENT_BASE => [Header::CONTENT_BASE, 'Content-Base'],
            Header::CONTENT_DISPOSITION => [Header::CONTENT_DISPOSITION, 'Content-Disposition'],
            Header::CONTENT_ENCODING => [Header::CONTENT_ENCODING, 'Content-Encoding'],
            Header::CONTENT_ID => [Header::CONTENT_ID, 'Content-ID'],
            Header::CONTENT_LANGUAGE => [Header::CONTENT_LANGUAGE, 'Content-Language'],
            Header::CONTENT_LENGTH => [Header::CONTENT_LENGTH, 'Content-Length'],
            Header::CONTENT_LOCATION => [Header::CONTENT_LOCATION, 'Content-Location'],
            Header::CONTENT_MD5 => [Header::CONTENT_MD5, 'Content-MD5'],
            Header::CONTENT_RANGE => [Header::CONTENT_RANGE, 'Content-Range'],
            Header::CONTENT_SCRIPT_TYPE => [Header::CONTENT_SCRIPT_TYPE, 'Content-Script-Type'],
            Header::CONTENT_STYLE_TYPE => [Header::CONTENT_STYLE_TYPE, 'Content-Style-Type'],
            Header::CONTENT_TYPE => [Header::CONTENT_TYPE, 'Content-Type'],
            Header::CONTENT_VERSION => [Header::CONTENT_VERSION, 'Content-Version'],
            Header::COOKIE => [Header::COOKIE, 'Cookie'],
            Header::COOKIE2 => [Header::COOKIE2, 'Cookie2'],
            Header::DASL => [Header::DASL, 'DASL'],
            Header::DAV => [Header::DAV, 'DAV'],
            Header::DATE => [Header::DATE, 'Date'],
            Header::DEFAULT_STYLE => [Header::DEFAULT_STYLE, 'Default-Style'],
            Header::DELTA_BASE => [Header::DELTA_BASE, 'Delta-Base'],
            Header::DEPTH => [Header::DEPTH, 'Depth'],
            Header::DERIVED_FROM => [Header::DERIVED_FROM, 'Derived-From'],
            Header::DESTINATION => [Header::DESTINATION, 'Destination'],
            Header::DIFFERENTIAL_ID => [Header::DIFFERENTIAL_ID, 'Differential-ID'],
            Header::DIGEST => [Header::DIGEST, 'Digest'],
            Header::ETAG => [Header::ETAG, 'ETag'],
            Header::EXPECT => [Header::EXPECT, 'Expect'],
            Header::EXPIRES => [Header::EXPIRES, 'Expires'],
            Header::EXT => [Header::EXT, 'Ext'],
            Header::FORWARDED => [Header::FORWARDED, 'Forwarded'],
            Header::FROM => [Header::FROM, 'From'],
            Header::GETPROFILE => [Header::GETPROFILE, 'GetProfile'],
            Header::HOBAREG => [Header::HOBAREG, 'Hobareg'],
            Header::HOST => [Header::HOST, 'Host'],
            Header::HTTP2_SETTINGS => [Header::HTTP2_SETTINGS, 'HTTP2-Settings'],
            Header::IM => [Header::IM, 'IM'],
            Header::IF => [Header::IF, 'If'],
            Header::IF_MATCH => [Header::IF_MATCH, 'If-Match'],
            Header::IF_MODIFIED_SINCE => [Header::IF_MODIFIED_SINCE, 'If-Modified-Since'],
            Header::IF_NONE_MATCH => [Header::IF_NONE_MATCH, 'If-None-Match'],
            Header::IF_RANGE => [Header::IF_RANGE, 'If-Range'],
            Header::IF_SCHEDULE_TAG_MATCH => [Header::IF_SCHEDULE_TAG_MATCH, 'If-Schedule-Tag-Match'],
            Header::IF_UNMODIFIED_SINCE => [Header::IF_UNMODIFIED_SINCE, 'If-Unmodified-Since'],
            Header::KEEP_ALIVE => [Header::KEEP_ALIVE, 'Keep-Alive'],
            Header::LABEL => [Header::LABEL, 'Label'],
            Header::LAST_MODIFIED => [Header::LAST_MODIFIED, 'Last-Modified'],
            Header::LINK => [Header::LINK, 'Link'],
            Header::LOCATION => [Header::LOCATION, 'Location'],
            Header::LOCK_TOKEN => [Header::LOCK_TOKEN, 'Lock-Token'],
            Header::MAN => [Header::MAN, 'Man'],
            Header::MAX_FORWARDS => [Header::MAX_FORWARDS, 'Max-Forwards'],
            Header::MEMENTO_DATETIME => [Header::MEMENTO_DATETIME, 'Memento-Datetime'],
            Header::METER => [Header::METER, 'Meter'],
            Header::MIME_VERSION => [Header::MIME_VERSION, 'MIME-Version'],
            Header::NEGOTIATE => [Header::NEGOTIATE, 'Negotiate'],
            Header::OPT => [Header::OPT, 'Opt'],
            Header::OPTIONAL_WWW_AUTHENTICATE => [Header::OPTIONAL_WWW_AUTHENTICATE, 'Optional-WWW-Authenticate'],
            Header::ORDERING_TYPE => [Header::ORDERING_TYPE, 'Ordering-Type'],
            Header::ORIGIN => [Header::ORIGIN, 'Origin'],
            Header::OVERWRITE => [Header::OVERWRITE, 'Overwrite'],
            Header::P3P => [Header::P3P, 'P3P'],
            Header::PEP => [Header::PEP, 'PEP'],
            Header::PICS_LABEL => [Header::PICS_LABEL, 'PICS-Label'],
            Header::PEP_INFO => [Header::PEP_INFO, 'Pep-Info'],
            Header::POSITION => [Header::POSITION, 'Position'],
            Header::PRAGMA => [Header::PRAGMA, 'Pragma'],
            Header::PREFER => [Header::PREFER, 'Prefer'],
            Header::PREFERENCE_APPLIED => [Header::PREFERENCE_APPLIED, 'Preference-Applied'],
            Header::PROFILEOBJECT => [Header::PROFILEOBJECT, 'ProfileObject'],
            Header::PROTOCOL => [Header::PROTOCOL, 'Protocol'],
            Header::PROTOCOL_INFO => [Header::PROTOCOL_INFO, 'Protocol-Info'],
            Header::PROTOCOL_QUERY => [Header::PROTOCOL_QUERY, 'Protocol-Query'],
            Header::PROTOCOL_REQUEST => [Header::PROTOCOL_REQUEST, 'Protocol-Request'],
            Header::PROXY_AUTHENTICATE => [Header::PROXY_AUTHENTICATE, 'Proxy-Authenticate'],
            Header::PROXY_AUTHENTICATION_INFO => [Header::PROXY_AUTHENTICATION_INFO, 'Proxy-Authentication-Info'],
            Header::PROXY_AUTHORIZATION => [Header::PROXY_AUTHORIZATION, 'Proxy-Authorization'],
            Header::PROXY_FEATURES => [Header::PROXY_FEATURES, 'Proxy-Features'],
            Header::PROXY_INSTRUCTION => [Header::PROXY_INSTRUCTION, 'Proxy-Instruction'],
            Header::PUBLIC => [Header::PUBLIC, 'Public'],
            Header::PUBLIC_KEY_PINS => [Header::PUBLIC_KEY_PINS, 'Public-Key-Pins'],
            Header::PUBLIC_KEY_PINS_REPORT_ONLY => [Header::PUBLIC_KEY_PINS_REPORT_ONLY, 'Public-Key-Pins-Report-Only'],
            Header::RANGE => [Header::RANGE, 'Range'],
            Header::REDIRECT_REF => [Header::REDIRECT_REF, 'Redirect-Ref'],
            Header::REFERER => [Header::REFERER, 'Referer'],
            Header::RETRY_AFTER => [Header::RETRY_AFTER, 'Retry-After'],
            Header::SAFE => [Header::SAFE, 'Safe'],
            Header::SCHEDULE_REPLY => [Header::SCHEDULE_REPLY, 'Schedule-Reply'],
            Header::SCHEDULE_TAG => [Header::SCHEDULE_TAG, 'Schedule-Tag'],
            Header::SEC_WEBSOCKET_ACCEPT => [Header::SEC_WEBSOCKET_ACCEPT, 'Sec-WebSocket-Accept'],
            Header::SEC_WEBSOCKET_EXTENSIONS => [Header::SEC_WEBSOCKET_EXTENSIONS, 'Sec-WebSocket-Extensions'],
            Header::SEC_WEBSOCKET_KEY => [Header::SEC_WEBSOCKET_KEY, 'Sec-WebSocket-Key'],
            Header::SEC_WEBSOCKET_PROTOCOL => [Header::SEC_WEBSOCKET_PROTOCOL, 'Sec-WebSocket-Protocol'],
            Header::SEC_WEBSOCKET_VERSION => [Header::SEC_WEBSOCKET_VERSION, 'Sec-WebSocket-Version'],
            Header::SECURITY_SCHEME => [Header::SECURITY_SCHEME, 'Security-Scheme'],
            Header::SERVER => [Header::SERVER, 'Server'],
            Header::SET_COOKIE => [Header::SET_COOKIE, 'Set-Cookie'],
            Header::SET_COOKIE2 => [Header::SET_COOKIE2, 'Set-Cookie2'],
            Header::SETPROFILE => [Header::SETPROFILE, 'SetProfile'],
            Header::SLUG => [Header::SLUG, 'SLUG'],
            Header::SOAPACTION => [Header::SOAPACTION, 'SoapAction'],
            Header::STATUS_URI => [Header::STATUS_URI, 'Status-URI'],
            Header::STRICT_TRANSPORT_SECURITY => [Header::STRICT_TRANSPORT_SECURITY, 'Strict-Transport-Security'],
            Header::SURROGATE_CAPABILITY => [Header::SURROGATE_CAPABILITY, 'Surrogate-Capability'],
            Header::SURROGATE_CONTROL => [Header::SURROGATE_CONTROL, 'Surrogate-Control'],
            Header::TCN => [Header::TCN, 'TCN'],
            Header::TE => [Header::TE, 'TE'],
            Header::TIMEOUT => [Header::TIMEOUT, 'Timeout'],
            Header::TOPIC => [Header::TOPIC, 'Topic'],
            Header::TRAILER => [Header::TRAILER, 'Trailer'],
            Header::TRANSFER_ENCODING => [Header::TRANSFER_ENCODING, 'Transfer-Encoding'],
            Header::TTL => [Header::TTL, 'TTL'],
            Header::URGENCY => [Header::URGENCY, 'Urgency'],
            Header::URI => [Header::URI, 'URI'],
            Header::UPGRADE => [Header::UPGRADE, 'Upgrade'],
            Header::USER_AGENT => [Header::USER_AGENT, 'User-Agent'],
            Header::VARIANT_VARY => [Header::VARIANT_VARY, 'Variant-Vary'],
            Header::VARY => [Header::VARY, 'Vary'],
            Header::VIA => [Header::VIA, 'Via'],
            Header::WWW_AUTHENTICATE => [Header::WWW_AUTHENTICATE, 'WWW-Authenticate'],
            Header::WANT_DIGEST => [Header::WANT_DIGEST, 'Want-Digest'],
            Header::WARNING => [Header::WARNING, 'Warning'],
            Header::X_FRAME_OPTIONS => [Header::X_FRAME_OPTIONS, 'X-Frame-Options'],
            Header::ACCESS_CONTROL => [Header::ACCESS_CONTROL, 'Access-Control'],
            Header::ACCESS_CONTROL_ALLOW_CREDENTIALS => [Header::ACCESS_CONTROL_ALLOW_CREDENTIALS, 'Access-Control-Allow-Credentials'],
            Header::ACCESS_CONTROL_ALLOW_HEADERS => [Header::ACCESS_CONTROL_ALLOW_HEADERS, 'Access-Control-Allow-Headers'],
            Header::ACCESS_CONTROL_ALLOW_METHODS => [Header::ACCESS_CONTROL_ALLOW_METHODS, 'Access-Control-Allow-Methods'],
            Header::ACCESS_CONTROL_ALLOW_ORIGIN => [Header::ACCESS_CONTROL_ALLOW_ORIGIN, 'Access-Control-Allow-Origin'],
            Header::ACCESS_CONTROL_MAX_AGE => [Header::ACCESS_CONTROL_MAX_AGE, 'Access-Control-Max-Age'],
            Header::ACCESS_CONTROL_REQUEST_METHOD => [Header::ACCESS_CONTROL_REQUEST_METHOD, 'Access-Control-Request-Method'],
            Header::ACCESS_CONTROL_REQUEST_HEADERS => [Header::ACCESS_CONTROL_REQUEST_HEADERS, 'Access-Control-Request-Headers'],
            Header::COMPLIANCE => [Header::COMPLIANCE, 'Compliance'],
            Header::CONTENT_TRANSFER_ENCODING => [Header::CONTENT_TRANSFER_ENCODING, 'Content-Transfer-Encoding'],
            Header::COST => [Header::COST, 'Cost'],
            Header::EDIINT_FEATURES => [Header::EDIINT_FEATURES, 'EDIINT-Features'],
            Header::MESSAGE_ID => [Header::MESSAGE_ID, 'Message-ID'],
            Header::METHOD_CHECK => [Header::METHOD_CHECK, 'Method-Check'],
            Header::METHOD_CHECK_EXPIRES => [Header::METHOD_CHECK_EXPIRES, 'Method-Check-Expires'],
            Header::NON_COMPLIANCE => [Header::NON_COMPLIANCE, 'Non-Compliance'],
            Header::OPTIONAL => [Header::OPTIONAL, 'Optional'],
            Header::REFERER_ROOT => [Header::REFERER_ROOT, 'Referer-Root'],
            Header::RESOLUTION_HINT => [Header::RESOLUTION_HINT, 'Resolution-Hint'],
            Header::RESOLVER_LOCATION => [Header::RESOLVER_LOCATION, 'Resolver-Location'],
            Header::SUBOK => [Header::SUBOK, 'SubOK'],
            Header::SUBST => [Header::SUBST, 'Subst'],
            Header::TITLE => [Header::TITLE, 'Title'],
            Header::UA_COLOR => [Header::UA_COLOR, 'UA-Color'],
            Header::UA_MEDIA => [Header::UA_MEDIA, 'UA-Media'],
            Header::UA_PIXELS => [Header::UA_PIXELS, 'UA-Pixels'],
            Header::UA_RESOLUTION => [Header::UA_RESOLUTION, 'UA-Resolution'],
            Header::UA_WINDOWPIXELS => [Header::UA_WINDOWPIXELS, 'UA-Windowpixels'],
            Header::VERSION => [Header::VERSION, 'Version'],
            Header::X_DEVICE_ACCEPT => [Header::X_DEVICE_ACCEPT, 'X-Device-Accept'],
            Header::X_DEVICE_ACCEPT_CHARSET => [Header::X_DEVICE_ACCEPT_CHARSET, 'X-Device-Accept-Charset'],
            Header::X_DEVICE_ACCEPT_ENCODING => [Header::X_DEVICE_ACCEPT_ENCODING, 'X-Device-Accept-Encoding'],
            Header::X_DEVICE_ACCEPT_LANGUAGE => [Header::X_DEVICE_ACCEPT_LANGUAGE, 'X-Device-Accept-Language'],
            Header::X_DEVICE_USER_AGENT => [Header::X_DEVICE_USER_AGENT, 'X-Device-User-Agent'],
            Header::CONTENT_SECURITY_POLICY => [Header::CONTENT_SECURITY_POLICY, 'Content-Security-Policy'],
            Header::DNT => [Header::DNT, 'DNT'],
            Header::PROXY_CONNECTION => [Header::PROXY_CONNECTION, 'Proxy-Connection'],
            Header::STATUS => [Header::STATUS, 'Status'],
            Header::UPGRADE_INSECURE_REQUESTS => [Header::UPGRADE_INSECURE_REQUESTS, 'Upgrade-Insecure-Requests'],
            Header::X_CONTENT_DURATION => [Header::X_CONTENT_DURATION, 'X-Content-Duration'],
            Header::X_CONTENT_SECURITY_POLICY => [Header::X_CONTENT_SECURITY_POLICY, 'X-Content-Security-Policy'],
            Header::X_CONTENT_TYPE_OPTIONS => [Header::X_CONTENT_TYPE_OPTIONS, 'X-Content-Type-Options'],
            Header::X_CORRELATION_ID => [Header::X_CORRELATION_ID, 'X-Correlation-ID'],
            Header::X_CSRF_TOKEN => [Header::X_CSRF_TOKEN, 'X-Csrf-Token'],
            Header::X_FORWARDED_FOR => [Header::X_FORWARDED_FOR, 'X-Forwarded-For'],
            Header::X_FORWARDED_HOST => [Header::X_FORWARDED_HOST, 'X-Forwarded-Host'],
            Header::X_FORWARDED_PROTO => [Header::X_FORWARDED_PROTO, 'X-Forwarded-Proto'],
            Header::X_HTTP_METHOD_OVERRIDE => [Header::X_HTTP_METHOD_OVERRIDE, 'X-Http-Method-Override'],
            Header::X_POWERED_BY => [Header::X_POWERED_BY, 'X-Powered-By'],
            Header::X_REQUEST_ID => [Header::X_REQUEST_ID, 'X-Request-ID'],
            Header::X_REQUESTED_WITH => [Header::X_REQUESTED_WITH, 'X-Requested-With'],
            Header::X_UA_COMPATIBLE => [Header::X_UA_COMPATIBLE, 'X-UA-Compatible'],
            Header::X_UIDH => [Header::X_UIDH, 'X-UIDH'],
            Header::X_WAP_PROFILE => [Header::X_WAP_PROFILE, 'X-Wap-Profile'],
            Header::X_WEBKIT_CSP => [Header::X_WEBKIT_CSP, 'X-WebKit-CSP'],
            Header::X_XSS_PROTECTION => [Header::X_XSS_PROTECTION, 'X-XSS-Protection'],
        ];
    }
}
