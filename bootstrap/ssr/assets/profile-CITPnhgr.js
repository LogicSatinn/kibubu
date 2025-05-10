import { jsxs, jsx } from "react/jsx-runtime";
import { Transition } from "@headlessui/react";
import { useForm, usePage, Head, Link } from "@inertiajs/react";
import { useRef } from "react";
import { L as Label, I as Input, a as InputError } from "./label-CCsVgNV6.js";
import { B as Button } from "./app-logo-icon-CoogQ1E6.js";
import { H as HeadingSmall, S as SettingsLayout } from "./layout-DfozhoW5.js";
import { D as Dialog, a as DialogTrigger, b as DialogContent, d as DialogTitle, e as DialogDescription, f as DialogFooter, g as DialogClose } from "./dialog-B3STjhT_.js";
import { A as AppLayout } from "./app-layout-CsxcoX-F.js";
import "@radix-ui/react-label";
import "@radix-ui/react-slot";
import "class-variance-authority";
import "clsx";
import "tailwind-merge";
import "@radix-ui/react-separator";
import "@radix-ui/react-dialog";
import "lucide-react";
import "@radix-ui/react-tooltip";
import "@radix-ui/react-dropdown-menu";
import "@radix-ui/react-avatar";
function DeleteUser() {
  const passwordInput = useRef(null);
  const { data, setData, delete: destroy, processing, reset, errors, clearErrors } = useForm({ password: "" });
  const deleteUser = (e) => {
    e.preventDefault();
    destroy(route("profile.destroy"), {
      preserveScroll: true,
      onSuccess: () => closeModal(),
      onError: () => {
        var _a;
        return (_a = passwordInput.current) == null ? void 0 : _a.focus();
      },
      onFinish: () => reset()
    });
  };
  const closeModal = () => {
    clearErrors();
    reset();
  };
  return /* @__PURE__ */ jsxs("div", { className: "space-y-6", children: [
    /* @__PURE__ */ jsx(HeadingSmall, { title: "Delete account", description: "Delete your account and all of its resources" }),
    /* @__PURE__ */ jsxs("div", { className: "space-y-4 rounded-lg border border-red-100 bg-red-50 p-4 dark:border-red-200/10 dark:bg-red-700/10", children: [
      /* @__PURE__ */ jsxs("div", { className: "relative space-y-0.5 text-red-600 dark:text-red-100", children: [
        /* @__PURE__ */ jsx("p", { className: "font-medium", children: "Warning" }),
        /* @__PURE__ */ jsx("p", { className: "text-sm", children: "Please proceed with caution, this cannot be undone." })
      ] }),
      /* @__PURE__ */ jsxs(Dialog, { children: [
        /* @__PURE__ */ jsx(DialogTrigger, { asChild: true, children: /* @__PURE__ */ jsx(Button, { variant: "destructive", children: "Delete account" }) }),
        /* @__PURE__ */ jsxs(DialogContent, { children: [
          /* @__PURE__ */ jsx(DialogTitle, { children: "Are you sure you want to delete your account?" }),
          /* @__PURE__ */ jsx(DialogDescription, { children: "Once your account is deleted, all of its resources and data will also be permanently deleted. Please enter your password to confirm you would like to permanently delete your account." }),
          /* @__PURE__ */ jsxs("form", { className: "space-y-6", onSubmit: deleteUser, children: [
            /* @__PURE__ */ jsxs("div", { className: "grid gap-2", children: [
              /* @__PURE__ */ jsx(Label, { htmlFor: "password", className: "sr-only", children: "Password" }),
              /* @__PURE__ */ jsx(
                Input,
                {
                  id: "password",
                  type: "password",
                  name: "password",
                  ref: passwordInput,
                  value: data.password,
                  onChange: (e) => setData("password", e.target.value),
                  placeholder: "Password",
                  autoComplete: "current-password"
                }
              ),
              /* @__PURE__ */ jsx(InputError, { message: errors.password })
            ] }),
            /* @__PURE__ */ jsxs(DialogFooter, { className: "gap-2", children: [
              /* @__PURE__ */ jsx(DialogClose, { asChild: true, children: /* @__PURE__ */ jsx(Button, { variant: "secondary", onClick: closeModal, children: "Cancel" }) }),
              /* @__PURE__ */ jsx(Button, { variant: "destructive", disabled: processing, asChild: true, children: /* @__PURE__ */ jsx("button", { type: "submit", children: "Delete account" }) })
            ] })
          ] })
        ] })
      ] })
    ] })
  ] });
}
const breadcrumbs = [
  {
    title: "Profile settings",
    href: "/settings/profile"
  }
];
function Profile({ mustVerifyEmail, status }) {
  const { auth } = usePage().props;
  const { data, setData, patch, errors, processing, recentlySuccessful } = useForm({
    name: auth.user.name,
    email: auth.user.email
  });
  const submit = (e) => {
    e.preventDefault();
    patch(route("profile.update"), {
      preserveScroll: true
    });
  };
  return /* @__PURE__ */ jsxs(AppLayout, { breadcrumbs, children: [
    /* @__PURE__ */ jsx(Head, { title: "Profile settings" }),
    /* @__PURE__ */ jsxs(SettingsLayout, { children: [
      /* @__PURE__ */ jsxs("div", { className: "space-y-6", children: [
        /* @__PURE__ */ jsx(HeadingSmall, { title: "Profile information", description: "Update your name and email address" }),
        /* @__PURE__ */ jsxs("form", { onSubmit: submit, className: "space-y-6", children: [
          /* @__PURE__ */ jsxs("div", { className: "grid gap-2", children: [
            /* @__PURE__ */ jsx(Label, { htmlFor: "name", children: "Name" }),
            /* @__PURE__ */ jsx(
              Input,
              {
                id: "name",
                className: "mt-1 block w-full",
                value: data.name,
                onChange: (e) => setData("name", e.target.value),
                required: true,
                autoComplete: "name",
                placeholder: "Full name"
              }
            ),
            /* @__PURE__ */ jsx(InputError, { className: "mt-2", message: errors.name })
          ] }),
          /* @__PURE__ */ jsxs("div", { className: "grid gap-2", children: [
            /* @__PURE__ */ jsx(Label, { htmlFor: "email", children: "Email address" }),
            /* @__PURE__ */ jsx(
              Input,
              {
                id: "email",
                type: "email",
                className: "mt-1 block w-full",
                value: data.email,
                onChange: (e) => setData("email", e.target.value),
                required: true,
                autoComplete: "username",
                placeholder: "Email address"
              }
            ),
            /* @__PURE__ */ jsx(InputError, { className: "mt-2", message: errors.email })
          ] }),
          mustVerifyEmail && auth.user.email_verified_at === null && /* @__PURE__ */ jsxs("div", { children: [
            /* @__PURE__ */ jsxs("p", { className: "text-muted-foreground -mt-4 text-sm", children: [
              "Your email address is unverified.",
              " ",
              /* @__PURE__ */ jsx(
                Link,
                {
                  href: route("verification.send"),
                  method: "post",
                  as: "button",
                  className: "text-foreground underline decoration-neutral-300 underline-offset-4 transition-colors duration-300 ease-out hover:decoration-current! dark:decoration-neutral-500",
                  children: "Click here to resend the verification email."
                }
              )
            ] }),
            status === "verification-link-sent" && /* @__PURE__ */ jsx("div", { className: "mt-2 text-sm font-medium text-green-600", children: "A new verification link has been sent to your email address." })
          ] }),
          /* @__PURE__ */ jsxs("div", { className: "flex items-center gap-4", children: [
            /* @__PURE__ */ jsx(Button, { disabled: processing, children: "Save" }),
            /* @__PURE__ */ jsx(
              Transition,
              {
                show: recentlySuccessful,
                enter: "transition ease-in-out",
                enterFrom: "opacity-0",
                leave: "transition ease-in-out",
                leaveTo: "opacity-0",
                children: /* @__PURE__ */ jsx("p", { className: "text-sm text-neutral-600", children: "Saved" })
              }
            )
          ] })
        ] })
      ] }),
      /* @__PURE__ */ jsx(DeleteUser, {})
    ] })
  ] });
}
export {
  Profile as default
};
