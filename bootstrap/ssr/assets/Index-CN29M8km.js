import { jsx, jsxs } from "react/jsx-runtime";
import * as React from "react";
import { useState } from "react";
import { Slot } from "@radix-ui/react-slot";
import { cva } from "class-variance-authority";
import { clsx } from "clsx";
import { twMerge } from "tailwind-merge";
import { CircleDollarSign, Play, CheckCircle2 } from "lucide-react";
function cn(...inputs) {
  return twMerge(clsx(inputs));
}
const buttonVariants = cva(
  "inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0",
  {
    variants: {
      variant: {
        default: "bg-primary text-primary-foreground shadow hover:bg-primary/90",
        destructive: "bg-destructive text-destructive-foreground shadow-sm hover:bg-destructive/90",
        outline: "border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground",
        secondary: "bg-secondary text-secondary-foreground shadow-sm hover:bg-secondary/80",
        ghost: "hover:bg-accent hover:text-accent-foreground",
        link: "text-primary underline-offset-4 hover:underline"
      },
      size: {
        default: "h-9 px-4 py-2",
        sm: "h-8 rounded-md px-3 text-xs",
        lg: "h-10 rounded-md px-8",
        icon: "h-9 w-9"
      }
    },
    defaultVariants: {
      variant: "default",
      size: "default"
    }
  }
);
const Button = React.forwardRef(
  ({ className, variant, size, asChild = false, ...props }, ref) => {
    const Comp = asChild ? Slot : "button";
    return /* @__PURE__ */ jsx(
      Comp,
      {
        className: cn(buttonVariants({ variant, size, className })),
        ref,
        ...props
      }
    );
  }
);
Button.displayName = "Button";
function HeroSection() {
  const [isHovering, setIsHovering] = useState(false);
  return /* @__PURE__ */ jsxs("section", { className: "relative min-h-screen w-full flex items-center justify-center overflow-hidden", children: [
    /* @__PURE__ */ jsx("div", { className: "absolute inset-0 bg-gradient-to-br from-emerald-50 via-sky-50 to-white" }),
    /* @__PURE__ */ jsx("div", { className: "absolute top-1/4 -left-20 w-96 h-96 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" }),
    /* @__PURE__ */ jsx(
      "div",
      {
        className: "absolute bottom-1/4 -right-20 w-96 h-96 bg-sky-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse",
        style: { animationDelay: "2s" }
      }
    ),
    /* @__PURE__ */ jsx(
      "div",
      {
        className: "absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-amber-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse",
        style: { animationDelay: "4s" }
      }
    ),
    /* @__PURE__ */ jsx("div", { className: "container mx-auto px-4 relative z-10 max-w-4xl", children: /* @__PURE__ */ jsxs("div", { className: "text-center", children: [
      /* @__PURE__ */ jsx("div", { className: "mb-8 inline-flex items-center justify-center p-3 bg-white rounded-full shadow-lg", children: /* @__PURE__ */ jsx(CircleDollarSign, { className: "w-12 h-12 text-emerald-500" }) }),
      /* @__PURE__ */ jsxs("h1", { className: "text-4xl md:text-5xl lg:text-6xl font-bold text-slate-800 mb-6 leading-tight animate-fade-in", children: [
        "Simplify Your Finances ",
        /* @__PURE__ */ jsx("br", { className: "hidden sm:block" }),
        "with Kibobo"
      ] }),
      /* @__PURE__ */ jsx("p", { className: "text-lg md:text-xl text-slate-600 mb-10 max-w-2xl mx-auto leading-relaxed", children: "Track your spending, create budgets, and reach your financial goals with our intuitive and powerful budgeting tools." }),
      /* @__PURE__ */ jsxs("div", { className: "flex flex-col sm:flex-row gap-4 justify-center", children: [
        /* @__PURE__ */ jsx(
          Button,
          {
            size: "lg",
            className: "px-8 py-7 bg-emerald-500 hover:bg-emerald-600 text-white font-medium rounded-full shadow-lg hover:shadow-xl transition-all duration-300 text-lg hover:scale-105",
            onMouseEnter: () => setIsHovering(true),
            onMouseLeave: () => setIsHovering(false),
            children: "Start Budgeting for Free"
          }
        ),
        /* @__PURE__ */ jsxs(
          Button,
          {
            variant: "outline",
            size: "lg",
            className: "px-8 py-7 bg-white hover:bg-slate-100 text-slate-700 font-medium rounded-full shadow-md hover:shadow-lg transition-all duration-300 text-lg border border-slate-200",
            children: [
              /* @__PURE__ */ jsx(Play, { className: "mr-2 h-4 w-4" }),
              " Watch Demo"
            ]
          }
        )
      ] }),
      /* @__PURE__ */ jsxs("div", { className: "mt-12 text-slate-500 flex items-center justify-center gap-8 flex-wrap", children: [
        /* @__PURE__ */ jsxs("span", { className: "flex items-center", children: [
          /* @__PURE__ */ jsx(CheckCircle2, { className: "w-5 h-5 mr-2 text-emerald-500" }),
          "Bank-level security"
        ] }),
        /* @__PURE__ */ jsxs("span", { className: "flex items-center", children: [
          /* @__PURE__ */ jsx(CheckCircle2, { className: "w-5 h-5 mr-2 text-emerald-500" }),
          "50,000+ happy users"
        ] }),
        /* @__PURE__ */ jsxs("span", { className: "flex items-center", children: [
          /* @__PURE__ */ jsx(CheckCircle2, { className: "w-5 h-5 mr-2 text-emerald-500" }),
          "Free to get started"
        ] })
      ] })
    ] }) }),
    /* @__PURE__ */ jsx("div", { className: "absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce", children: /* @__PURE__ */ jsx("svg", { className: "w-6 h-6 text-slate-400", fill: "none", stroke: "currentColor", viewBox: "0 0 24 24", children: /* @__PURE__ */ jsx("path", { strokeLinecap: "round", strokeLinejoin: "round", strokeWidth: "2", d: "M19 14l-7 7m0 0l-7-7m7 7V3" }) }) })
  ] });
}
function Home() {
  return /* @__PURE__ */ jsx("main", { children: /* @__PURE__ */ jsx(HeroSection, {}) });
}
export {
  Home as default
};
