import Adjustments from '@/components/icons/adjustments'
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar'
import { Button } from '@/components/ui/button'
import { Card } from '@/components/ui/card'
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table'
import { format } from 'date-fns'
import { nanoid } from 'nanoid'

const CustomerTransactions = ({ className }: { className?: string }) => {
  return (
    <Card className={className}>
      <div className="flex items-center justify-between p-6">
        <p className="text-lg font-medium">Customer Transactions</p>
        <div className="flex items-center gap-3">
          <span className="bg-card text-secondary-foreground rounded-lg p-1 text-xs">24 Aug - 31 Aug</span>
          <Button variant="secondary" size="icon" className="h-6 w-6 rounded-md">
            <Adjustments className="text-icon" />
          </Button>
        </div>
      </div>

      <Table className="mt-3">
        <TableHeader>
          <TableRow className="text-secondary-foreground text-sm font-medium">
            <TableHead className="px-6 py-3">TRANSACTION</TableHead>
            <TableHead className="px-6 py-3">DATE</TableHead>
            <TableHead className="px-6 py-3">TIME</TableHead>
            <TableHead className="px-6 py-3">AMOUNT</TableHead>
          </TableRow>
        </TableHeader>

        <TableBody>
          {transactions.map(item => (
            <TableRow key={item.id} className="border-border text-secondary-foreground text-sm font-medium">
              <TableCell className="px-6 py-5">
                <div className="flex items-center gap-3">
                  <Avatar className="h-9 w-9">
                    <AvatarImage src={item.user.image} alt="@shadcn" />
                    <AvatarFallback>CN</AvatarFallback>
                  </Avatar>
                  <div>
                    <p className="font-semibold">{item.user.name}</p>
                    <p className="text-xs">{item.user.id.substring(0, 10)}</p>
                  </div>
                </div>
              </TableCell>
              <TableCell className="px-6 py-5">{format(new Date(item.createdAt), 'dd MMM, yyyy')}</TableCell>
              <TableCell className="px-6 py-5">{format(new Date(item.createdAt), 'hh:mm a')}</TableCell>
              <TableCell className="px-6 py-5">${item.total}</TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </Card>
  )
}

// CUSTOM DUMMY DATA SET
const transactions = [
  {
    id: nanoid(),
    total: 356.25,
    createdAt: new Date('August 31, 2022 10:30:00'),
    user: {
      id: nanoid(),
      name: 'Arikunn',
      image: 'https://github.com/shadcn.png',
    },
  },
  {
    id: nanoid(),
    total: 165.58,
    createdAt: new Date('August 30, 2022 13:30:00'),
    user: {
      id: nanoid(),
      name: 'Ikauwis',
      image: 'https://github.com/shadcn.png',
    },
  },
  {
    id: nanoid(),
    total: 463.25,
    createdAt: new Date('August 29, 2022 19:30:00'),
    user: {
      id: nanoid(),
      name: 'Dayet',
      image: 'https://github.com/shadcn.png',
    },
  },
]

export default CustomerTransactions
