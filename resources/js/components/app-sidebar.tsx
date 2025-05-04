import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import type { NavGroup } from '@/types';
import { Link } from '@inertiajs/react';
import { CalculatorIcon, CreditCardIcon, FileTextIcon, LayoutGrid, ListTreeIcon, PiggyBankIcon, ReceiptTextIcon, RepeatIcon } from 'lucide-react';
import AppLogo from './app-logo';

const mainNavGroups: NavGroup[] = [
    {
        title: 'Platform',
        items: [
            {
                title: 'Dashboard',
                href: '/dashboard',
                icon: LayoutGrid,
            },
        ],
    },
    {
        title: 'Financial Control',
        items: [
            {
                title: 'Budgets',
                href: '/budgets',
                icon: CalculatorIcon,
            },
            {
                title: 'Piggy Bank',
                href: '/piggy-banks',
                icon: PiggyBankIcon,
            },
            {
                title: 'Subscriptions',
                href: '/subscriptions',
                icon: RepeatIcon,
            },
        ],
    },
    {
        title: 'Accounting',
        items: [
            {
                title: 'Transactions',
                href: '/transactions',
                icon: ReceiptTextIcon,
            },
        ]
    },
    {
        title: 'Configuration & Reports',
        items: [
            {
                title: 'Accounts',
                href: '/accounts',
                icon: CreditCardIcon,
            },
            {
                title: 'Account Categories',
                href: '/categories',
                icon: ListTreeIcon,
            },
            {
                title: 'Reports',
                href: '/reports',
                icon: FileTextIcon
            },
        ]
    }
];

export function AppSidebar() {
    return (
        <Sidebar collapsible="icon" variant="inset">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href="/dashboard" prefetch>
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                <NavMain groups={mainNavGroups} />
            </SidebarContent>

            <SidebarFooter>
                {/* <NavFooter items={footerNavItems} className="mt-auto" /> */}
                <NavUser />
            </SidebarFooter>
        </Sidebar>
    );
}
