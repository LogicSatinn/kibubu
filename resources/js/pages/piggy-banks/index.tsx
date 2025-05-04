import ComingSoon from "@/components/coming-soon";
import AppLayout from "@/layouts/app-layout";
import type { BreadcrumbItem } from "@/types";
import { Head } from "@inertiajs/react";

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: "Dashboard",
        href: "/dashboard",
    },
    {
        title: "Piggy Banks",
        href: "/piggy-banks",
    }
];

export default function PiggyBanks() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Piggy Banks" />

            <ComingSoon />
        </AppLayout>
    )
}
