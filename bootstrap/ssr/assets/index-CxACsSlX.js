import { jsxs, jsx } from "react/jsx-runtime";
import { C as ComingSoon } from "./coming-soon-BlMr3Vy_.js";
import { A as AppLayout } from "./app-layout-6OR4gjYq.js";
import { Head } from "@inertiajs/react";
import "react";
import "@radix-ui/react-slot";
import "class-variance-authority";
import "lucide-react";
import "./app-logo-icon-TPTspilT.js";
import "clsx";
import "tailwind-merge";
import "@radix-ui/react-dialog";
import "@radix-ui/react-tooltip";
import "@radix-ui/react-dropdown-menu";
import "@radix-ui/react-avatar";
const breadcrumbs = [
  {
    title: "Dashboard",
    href: "/dashboard"
  },
  {
    title: "Piggy Banks",
    href: "/piggy-banks"
  }
];
function PiggyBanks() {
  return /* @__PURE__ */ jsxs(AppLayout, { breadcrumbs, children: [
    /* @__PURE__ */ jsx(Head, { title: "Piggy Banks" }),
    /* @__PURE__ */ jsx(ComingSoon, {})
  ] });
}
export {
  PiggyBanks as default
};
