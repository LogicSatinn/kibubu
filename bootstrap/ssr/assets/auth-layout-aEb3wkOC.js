import { jsx, jsxs } from "react/jsx-runtime";
import { A as AppLogoIcon } from "./app-logo-icon-TPTspilT.js";
import { C as Card, a as CardHeader, b as CardTitle, c as CardDescription, d as CardContent } from "./card-wPEM5UKx.js";
import { Link } from "@inertiajs/react";
function AuthCardLayout({
  children,
  title,
  description
}) {
  return /* @__PURE__ */ jsx("div", { className: "bg-muted flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10", children: /* @__PURE__ */ jsxs("div", { className: "flex w-full max-w-md flex-col gap-6", children: [
    /* @__PURE__ */ jsx(Link, { href: route("home"), className: "flex items-center gap-2 self-center font-medium", children: /* @__PURE__ */ jsx("div", { className: "flex h-9 w-9 items-center justify-center", children: /* @__PURE__ */ jsx(AppLogoIcon, { className: "size-9 fill-current text-black dark:text-white" }) }) }),
    /* @__PURE__ */ jsx("div", { className: "flex flex-col gap-6", children: /* @__PURE__ */ jsxs(Card, { className: "rounded-xl", children: [
      /* @__PURE__ */ jsxs(CardHeader, { className: "px-10 pt-8 pb-0 text-center", children: [
        /* @__PURE__ */ jsx(CardTitle, { className: "text-xl", children: title }),
        /* @__PURE__ */ jsx(CardDescription, { children: description })
      ] }),
      /* @__PURE__ */ jsx(CardContent, { className: "px-10 py-8", children })
    ] }) })
  ] }) });
}
function AuthLayout({ children, title, description, ...props }) {
  return /* @__PURE__ */ jsx(AuthCardLayout, { title, description, ...props, children });
}
export {
  AuthLayout as A
};
