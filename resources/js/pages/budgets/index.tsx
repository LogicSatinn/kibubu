import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Table, TableBody, TableCaption, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table";
import AppLayout from "@/layouts/app-layout";
import type { BreadcrumbItem } from "@/types";
import { Head } from "@inertiajs/react";

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: "Dashboard",
        href: "/dashboard",
    },
    {
        title: "Budgets",
        href: "/budgets",
    }
];

export default function BudgetList() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Budgets" />

            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                <Card>
                    <CardHeader>
                        <CardTitle>
                            Budgets
                        </CardTitle>
                        <CardDescription>
                            Manage your budgets effectively.
                        </CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Table>
                            <TableCaption>A list of your budgets.</TableCaption>
                            <TableHeader>
                                <TableRow>
                                    <TableHead className="w-[100px]">Invoice</TableHead>
                                    <TableHead>Status</TableHead>
                                    <TableHead>Method</TableHead>
                                    <TableHead className="text-right">Amount</TableHead>
                                </TableRow>
                            </TableHeader>
                            <TableBody>
                                <TableRow>
                                    <TableCell className="font-medium">INV001</TableCell>
                                    <TableCell>Paid</TableCell>
                                    <TableCell>Credit Card</TableCell>
                                    <TableCell className="text-right">$250.00</TableCell>
                                </TableRow>
                            </TableBody>
                        </Table>
                    </CardContent>
                </Card>
            </div>
        </AppLayout>
    );
}
