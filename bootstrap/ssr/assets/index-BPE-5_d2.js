import { jsxs, jsx } from "react/jsx-runtime";
import { C as Card, a as CardHeader, b as CardTitle, c as CardDescription, d as CardContent } from "./card-CYsAuzCU.js";
import { T as Table, a as TableCaption, b as TableHeader, c as TableRow, d as TableHead, e as TableBody, f as TableCell } from "./table-B0hyTLI9.js";
import { A as AppLayout } from "./app-layout-CsxcoX-F.js";
import { Head } from "@inertiajs/react";
import "./app-logo-icon-CoogQ1E6.js";
import "@radix-ui/react-slot";
import "class-variance-authority";
import "clsx";
import "tailwind-merge";
import "react";
import "lucide-react";
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
    title: "Budgets",
    href: "/budgets"
  }
];
function BudgetList() {
  return /* @__PURE__ */ jsxs(AppLayout, { breadcrumbs, children: [
    /* @__PURE__ */ jsx(Head, { title: "Budgets" }),
    /* @__PURE__ */ jsx("div", { className: "flex h-full flex-1 flex-col gap-4 rounded-xl p-4", children: /* @__PURE__ */ jsxs(Card, { children: [
      /* @__PURE__ */ jsxs(CardHeader, { children: [
        /* @__PURE__ */ jsx(CardTitle, { children: "Budgets" }),
        /* @__PURE__ */ jsx(CardDescription, { children: "Manage your budgets effectively." })
      ] }),
      /* @__PURE__ */ jsx(CardContent, { children: /* @__PURE__ */ jsxs(Table, { children: [
        /* @__PURE__ */ jsx(TableCaption, { children: "A list of your budgets." }),
        /* @__PURE__ */ jsx(TableHeader, { children: /* @__PURE__ */ jsxs(TableRow, { children: [
          /* @__PURE__ */ jsx(TableHead, { className: "w-[100px]", children: "Invoice" }),
          /* @__PURE__ */ jsx(TableHead, { children: "Status" }),
          /* @__PURE__ */ jsx(TableHead, { children: "Method" }),
          /* @__PURE__ */ jsx(TableHead, { className: "text-right", children: "Amount" })
        ] }) }),
        /* @__PURE__ */ jsx(TableBody, { children: /* @__PURE__ */ jsxs(TableRow, { children: [
          /* @__PURE__ */ jsx(TableCell, { className: "font-medium", children: "INV001" }),
          /* @__PURE__ */ jsx(TableCell, { children: "Paid" }),
          /* @__PURE__ */ jsx(TableCell, { children: "Credit Card" }),
          /* @__PURE__ */ jsx(TableCell, { className: "text-right", children: "$250.00" })
        ] }) })
      ] }) })
    ] }) })
  ] });
}
export {
  BudgetList as default
};
